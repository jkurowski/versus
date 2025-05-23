@extends('layouts.page', ['body_class' => 'clipboard'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => ($page->meta_title) ? $page->meta_title : $page->title,
    'header_file' => 'rooms.jpg',
    'items' => []
    ])
@stop

@section('content')
    <section id="clipboard" class="pt-3 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="clipboardmessage"></div>
                </div>
            </div>
        </div>

        <div class="container" id="main-ap-axis">
            <div class="row">
                @include('front.investment_shared.list')
            </div>
        </div>

        @if($properties->count() > 0)
        <div class="container property mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div id="contact" class="bg-contact-form p-4 p-lg-5">
                        <div class="form-container">
                            <form class="row validateForm" id="contact-form" action="{{ route('clipboard.send') }}" method="post">
                                <div class="px-lg-3">
                                    <img
                                            src="{{ asset('images/logo-sm-black.svg') }}"
                                            alt="Logo Osiedle Versus"
                                            width="42"
                                            height="28"
                                            class="mb-1"
                                    />
                                    <!-- FORM TITLE -->
                                    <div class="title-tag-sm">Zapytaj o</div>
                                    <div class="header-3 mb-3">@if($properties->count() > 1)mieszkania @else mieszkanie @endif</div>
                                </div>
                                {{ csrf_field() }}
                                <div class="col-12">
                                    @if (session('success'))
                                        <div class="alert alert-success border-0 mb-3">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning border-0 mb-3">
                                            {{ session('warning') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-12 col-sm-4">
                                    <label for="form_name">Imię i nazwisko <span class="text-danger">*</span></label>
                                    <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                    @error('form_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror

                                </div>
                                <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                    <label for="form_email">Adres e-mail <span class="text-danger">*</span></label>
                                    <input name="form_email" id="form_email" class="validate[required,custom[email]] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                    @error('form_email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                    <label for="form_phone">Numer telefonu <span class="text-danger">*</span></label>
                                    <input name="form_phone" id="form_phone" class="validate[required,custom[phone]] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                                    @error('form_phone')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-4">
                                    <label for="form_message">Wiadomość <span class="text-danger">*</span></label>
                                    <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                    @error('form_message')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                @foreach ($rules as $r)
                                    <div class="col-12">
                                        <div class="form-check text-start pt-5 d-flex gap-3 align-items-center">
                                            <input
                                                    class="form-check-input @if($r->required === 1) validate[required] @endif"
                                                    type="checkbox"
                                                    value="1"
                                                    id="zgoda_{{$r->id}}"
                                                    name="rule_{{$r->id}}"
                                                    data-prompt-position="topLeft:0"
                                            />
                                            <label class="form-check-label small fw-medium" for="zgoda_{{$r->id}}">{!! $r->text !!}</label>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-12">
                                    <input type="hidden" name="form_page" value="Schowek">
                                    <script type="text/javascript">
                                        document.write("<button class=\"btn btn-primary mt-4 btn-submit\" type=\"submit\">WYŚLIJ WIADOMOŚĆ</button>");
                                    </script>
                                    <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        const buttons = document.querySelectorAll('#addToFav');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                removeProperty(button.getAttribute('data-id'))
            });
        });

        function removeProperty(property_id) {
            const xhr = new XMLHttpRequest();
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            xhr.open('DELETE', '/pl/clipboard');
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            const data = { id: property_id };
            const jsonData = JSON.stringify(data);
            xhr.send(jsonData);

            xhr.addEventListener('load', function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const message = response.message;
                    const count = response.count;
                    document.querySelector('#clipboardmessage').innerHTML = message;
                    document.querySelector('#clipboardcount').innerHTML = count;
                    const item = document.querySelector(`[data-room="${property_id}"]`);
                    if (!item) {
                        return;
                    }

                    item.animate(
                        [{ opacity: 1 }, { opacity: 0 }],
                        { duration: 500 }
                    ).onfinish = () => {
                        item.remove();
                    };
                }
            });
        }
    </script>
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
