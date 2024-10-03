@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', 'Mieszkania')
@section('seo_title', 'Mieszkania')
@section('seo_description', 'Mieszkania')

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => 'Mieszkania',
    'header_file' => 'rooms.jpg',
    'items' => []
    ])
@stop

@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    @if($investment->plan)
                        <div id="plan-holder">
                            <div class="plan-info text-center mb-3"><b>Z planu budynku wybierz piętro. Z <a href="#main-ap-axis" class="scroll-to" data-offset="80" style="color:#7b592b">listy poniżej</a> wybierz mieszkanie.</b></div>
                            <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan">
                            <map name="invesmentplan">
                                @foreach($floors as $floor)
                                    @if($floor->html)
                                        <area
                                                shape="poly"
                                                href="{{route('front.investment.floor', [$floor->building, $floor, Str::slug($floor->name)])}}"
                                                title="{{$floor->name}}"
                                                alt="floor-{{$floor->id}}"
                                                data-item="{{$floor->id}}"
                                                data-floornumber="{{$floor->id}}"
                                                data-floortype="{{$floor->type}}"
                                                coords="@if($floor->html) {{cords($floor->html)}} @endif">
                                    @endif
                                @endforeach
                            </map>
                        </div>
                    @endif
                </div>
            </div>
            <!-- FORM -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 apartments-form-col">
                    <form class="apartments-form apartments-form-move-top">
                        <select
                                name=""
                                id=""
                                class="form-select apartments-form-select"
                                aria-label="Powierzchnia"
                        >
                            <option selected="">Powierzchnia</option>
                            <option value="1">Od 25 do 35 m<sup>2</sup></option>
                            <option value="2">Od 35 do 45 m<sup>2</sup></option>
                            <option value="3">Od 50 do 60 m<sup>2</sup></option>
                        </select>
                        <select
                                name=""
                                id=""
                                class="form-select apartments-form-select"
                                aria-label="Pokoje"
                        >
                            <option selected="">Liczba pokoi</option>
                            <option value="2">2-pokojwe</option>
                            <option value="3">3-pokojwe</option>
                        </select>
                        <select
                                name=""
                                id=""
                                class="form-select apartments-form-select"
                                aria-label="Piętro"
                        >
                            <option selected="">Piętro</option>
                            <option value="1">1 piętro</option>
                            <option value="2">2 piętro</option>
                            <option value="3">3 piętro</option>
                        </select>
                        <button class="btn btn-primary d-flex align-items-center gap-2" type="button">
                            <span> Szukaj </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
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
                        @include('front.investment_shared.list')
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
        <script>
            function toggleNav() {
                const sideMenu = document.getElementById("sideMenu");
                const floor = document.getElementById("pagecontent");

                if(sideMenu.classList.contains('openMenu')){
                    sideMenu.style.width = "0";
                    sideMenu.classList.remove("openMenu");
                    floor.style.left = "0";
                    document.body.style.overflow = 'scroll';
                } else {
                    sideMenu.style.width = "250px";
                    sideMenu.classList.add("openMenu");
                    floor.style.left = "250px";
                    document.body.style.overflow = 'hidden';
                }
            }
        </script>
    @endpush
@endsection