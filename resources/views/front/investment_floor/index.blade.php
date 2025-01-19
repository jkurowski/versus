@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $floor->name)
@section('seo_title', $floor->meta_title)
@section('seo_description', $floor->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => $investment->name.' - '.$building->name.' - '.$floor->name,
    'header_file' => 'rooms.jpg',
    'items' => [
        ['uri'=> $current_locale.'/mieszkania', 'title' => 'Mieszkania']
        ]
    ])
@stop

@section('content')
    <section class="pt-3 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="apartment-btns">
                        <div class="btn-prev">
                            @if($prev_floor) <a href="{{route('front.investment.floor', [$building->id, $prev_floor, Str::slug($prev_floor->name)])}}" class="btn btn-primary"
                            ><span>Piętro niżej</span></a
                            >@endif
                        </div>
                        <div class="btn-center">
                            <a href="{{ route('plan') }}" class="btn btn-primary"
                            ><span>Plan inwestycji</span></a
                            >
                        </div>
                        <div class="btn-next">
                            @if($next_floor) <a href="{{route('front.investment.floor', [$building->id, $next_floor, Str::slug($next_floor->name)])}}" class="btn btn-primary"
                            ><span>Piętro wyżej</span></a
                            >@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    @if($floor->file)
                        <img src="{{ asset('/investment/floor/webp/'.$floor->file_webp) }}" alt="{{$floor->name}}" id="invesmentplan" usemap="#invesmentplan">
                        <map name="invesmentplan">
                            @if($properties)
                                @foreach($properties as $r)
                                    @if($r->html)
                                        <area
                                                shape="poly"
                                                data-item="{{$r->id}}"
                                                alt="{{$r->slug}}"
                                                data-roomnumber="{{$r->number}}"
                                                data-roomtype="{{$r->typ}}"
                                                data-roomstatus="{{$r->status}}"
                                                coords="{{cords($r->html)}}"
                                                class="inline status-{{$r->status}}"
                                                href="@if($r->status <> 3 && $floor->type == 1) {{route('front.investment.property', ['investment_id' => $investment->id, 'floor' => $floor->id, 'property' => $r->id])}} @else # @endif"
                                                title="<h4 class='mb-2'>{{$r->name}}</h4>
                                                <ul class='mb-0 list-unstyled mt-0'>
                                                <li>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b></li>
                                                @if($r->show_prices)
                                                    @if($r->price_promotion)
                                                    <li>Cena: <b class=fr>@money($r->price_promotion)</b></li>
                                                    @else
                                                        @if($r->price)
                                                        <li>Cena: <b class=fr>@money($r->price)</b></li>
                                                        @endif
                                                    @endif
                                                @endif

                                                @if($floor->type == 1)<li>Pokoje: <b class=fr>{{$r->rooms}}</b></li>@endif
                                                <li><b>{{ roomStatus($r->status) }}</b></li></ul>">
                                    @endif
                                @endforeach
                            @endif
                        </map>
                    @endif
                </div>
            </div>

            @if($floor->id <> 7 && $floor->id <> 8)
            <!-- FORM -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 apartments-form-col h-auto">
                    <form class="apartments-form" method="get" action="">
                        <select name="area" class="form-select apartments-form-select" aria-label="Powierzchnia">
                            <option value="">Powierzchnia</option>
                            {!! area2Select($floor->area_range) !!}
                        </select>
                        <select name="rooms" id="" class="form-select apartments-form-select" aria-label="Pokoje">
                            <option value="">Liczba pokoi</option>
                            @foreach($uniqueRooms as $room)
                                <option value="{{ $room }}" @if(request()->input('rooms') == $room) selected @endif >{{ $room }}</option>
                            @endforeach
                        </select>
                        <select name="status" id="" class="form-select apartments-form-select" aria-label="Status">
                            <option value="">Status</option>
                            <option value="1" @if(request()->input('status') == 1) selected @endif >Na sprzedaż</option>
                            <option value="2" @if(request()->input('status') == 2) selected @endif >Rezerwacja</option>
                            <option value="3" @if(request()->input('status') == 3) selected @endif >Sprzedane</option>
                        </select>
                        <button class="btn btn-primary d-flex align-items-center gap-2" type="submit">
                            <span> Szukaj </span>
                        </button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </section>

    <section>
        <div class="container">
            @if($floor->id <> 7 && $floor->id <> 8)
            <div class="row apartment-row align-items-center">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row-grid-btns py-4">
                        <div class="grid-btn">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="32"
                                    height="32"
                                    viewBox="0 0 32 32"
                            >
                                <g
                                        id="Group_410"
                                        data-name="Group 410"
                                        transform="translate(-1451 -1192)"
                                >
                                    <g
                                            id="Rectangle_283"
                                            data-name="Rectangle 283"
                                            transform="translate(1470 1211)"
                                            fill="none"
                                            stroke="#292929"
                                            stroke-width="1"
                                    >
                                        <rect width="13" height="13" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="12"
                                                height="12"
                                                fill="none"
                                        />
                                    </g>
                                    <g
                                            id="Rectangle_284"
                                            data-name="Rectangle 284"
                                            transform="translate(1451 1211)"
                                            fill="none"
                                            stroke="#292929"
                                            stroke-width="1"
                                    >
                                        <rect width="13" height="13" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="12"
                                                height="12"
                                                fill="none"
                                        />
                                    </g>
                                    <g
                                            id="Rectangle_285"
                                            data-name="Rectangle 285"
                                            transform="translate(1451 1192)"
                                            fill="none"
                                            stroke="#292929"
                                            stroke-width="1"
                                    >
                                        <rect width="13" height="13" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="12"
                                                height="12"
                                                fill="none"
                                        />
                                    </g>
                                    <g
                                            id="Rectangle_286"
                                            data-name="Rectangle 286"
                                            transform="translate(1470 1192)"
                                            fill="none"
                                            stroke="#292929"
                                            stroke-width="1"
                                    >
                                        <rect width="13" height="13" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="12"
                                                height="12"
                                                fill="none"
                                        />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="row-btn active">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="32"
                                    height="32"
                                    viewBox="0 0 32 32"
                            >
                                <g
                                        id="Group_411"
                                        data-name="Group 411"
                                        transform="translate(-1498 -1192)"
                                >
                                    <g
                                            id="Rectangle_282"
                                            data-name="Rectangle 282"
                                            transform="translate(1498 1219)"
                                            fill="#fff"
                                            stroke="#000"
                                            stroke-width="1"
                                    >
                                        <rect width="32" height="5" rx="2.5" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="31"
                                                height="4"
                                                rx="2"
                                                fill="none"
                                        />
                                    </g>
                                    <g
                                            id="Rectangle_287"
                                            data-name="Rectangle 287"
                                            transform="translate(1498 1210)"
                                            fill="#fff"
                                            stroke="#000"
                                            stroke-width="1"
                                    >
                                        <rect width="32" height="5" rx="2.5" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="31"
                                                height="4"
                                                rx="2"
                                                fill="none"
                                        />
                                    </g>
                                    <g
                                            id="Rectangle_288"
                                            data-name="Rectangle 288"
                                            transform="translate(1498 1201)"
                                            fill="#fff"
                                            stroke="#000"
                                            stroke-width="1"
                                    >
                                        <rect width="32" height="5" rx="2.5" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="31"
                                                height="4"
                                                rx="2"
                                                fill="none"
                                        />
                                    </g>
                                    <g
                                            id="Rectangle_289"
                                            data-name="Rectangle 289"
                                            transform="translate(1498 1192)"
                                            fill="#fff"
                                            stroke="#000"
                                            stroke-width="1"
                                    >
                                        <rect width="32" height="5" rx="2.5" stroke="none" />
                                        <rect
                                                x="0.5"
                                                y="0.5"
                                                width="31"
                                                height="4"
                                                rx="2"
                                                fill="none"
                                        />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="main-ap-axis">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row g-2 g-xl-4">
                        @include('front.investment_shared.list', ['investment' => $investment])
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    @push('scripts')
        <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
    @endpush
@endsection