<?php

namespace App\Http\Controllers\Front\Clipboard;

use App\Http\Controllers\Controller;

use App\Mail\ClipboardSend;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use Cookie;

// CMS
use App\Repositories\Client\ClientRepository;
use App\Http\Requests\ClipboardFormRequest;
use App\Models\Page;
use App\Models\Property;
use App\Models\Recipient;
use App\Models\RodoRules;

class IndexController extends Controller
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $page = Page::find(4);
        $items = session('clipboard.items');
        $properties = collect();

        if (!empty($items)) {
            $ids = array_map('intval', $items);
            $properties = Property::whereIn('id', $ids)->get();
        }

        return view('front.clipboard.index', [
            'page' => $page,
            'properties' => $properties,
            'rules' => RodoRules::orderBy('sort')->whereActive(1)->get()
        ]);
    }

    public function send(ClipboardFormRequest $request, Recipient $recipient)
    {
        $recipient->notify(new ContactNotification($request));

        $items = session('clipboard.items');
        $properties = collect();

        if (!empty($items)) {
            $ids = array_map('intval', $items);
            $properties = Property::whereIn('id', $ids)->get();
        }

        Mail::to(settings()->get("page_email"))->send(new ClipboardSend($request, $properties));

        if( count(Mail::failures()) == 0 ) {
            $cookie_name = 'dp_';
            foreach ($_COOKIE as $name => $value) {
                if (stripos($name, $cookie_name) === 0) {
                    Cookie::queue(
                        Cookie::forget($name)
                    );
                }
            }
        }

        return redirect()->back()->with(
            'success',
            'Twoja wiadomość została wysłana.'
        );
    }

    public function store(Request $request)
    {
        $id = $request->get('id');
        $items = $request->session()->get('clipboard.items', []);

        if (!in_array($id, $items)) {
            $items[] = $id;
            $request->session()->put('clipboard.items', array_unique($items));
        }

        return response()->json(['message' => '<div class="alert alert-success border-0 mt-3">Mieszkanie dodane do ulubionych</div>', 'count' => count($items)]);
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $items = $request->session()->get('clipboard.items', []);

        // Find the index of the item in the clipboard
        $index = array_search($id, $items);

        if ($index !== false) {
            // Remove the item from the clipboard
            $removed = $request->session()->pull("clipboard.items.$index");

            // Check if the item was actually removed
            if ($removed !== null) {
                return response()->json([
                    'message' => '<div class="alert alert-success border-0 mt-3">Mieszkanie usunięte z ulubionych</div>',
                    'count' => count($items) - 1
                ]);
            }
        }

        return response()->json([
            'message' => '<div class="danger alert-danger border-0 mt-3">Wybrane mieszkanie nie istnieje w ulubionych</div>',
            'count' => count($items)
        ]);
    }
}
