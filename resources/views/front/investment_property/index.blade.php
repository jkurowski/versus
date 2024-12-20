@extends('layouts.page', ['body_class' => 'property'])

@section('meta_title', $property->name)
@section('seo_title', $investment->name.' - '.$floor->name.' - '.$property->name)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => $property->name,
    'header_file' => 'rooms.jpg',
    'items' => [
        ['uri'=> $current_locale.'/mieszkania', 'title' => 'Mieszkania'],
        ['uri'=> $current_locale.'/pietro/budynek/'.$investment->id.'/p/'.$floor->id, 'title' => $investment->name.' - '.$floor->name]
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
                            @if($prev) <a href="{{route('front.investment.property', ['investment_id' => $property->investment_id, 'floor' => $property->floor_id, 'property' => $prev->id])}}" class="btn btn-primary"
                            ><span>poprzednie mieszkanie</span></a
                            >@endif
                        </div>
                        <div class="btn-center">
                            <a href="{{route('front.investment.floor', [$property->building_id, $floor->id, Str::slug($floor->name)])}}" class="btn btn-primary"
                            ><span>plan piętra</span></a
                            >
                        </div>
                        <div class="btn-next">
                            @if($next) <a href="{{route('front.investment.property', ['investment_id' => $property->investment_id, 'floor' => $property->floor_id, 'property' => $next->id])}}" class="btn btn-primary"
                            ><span>następne mieszkanie</span></a
                            >@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------- -->
    <!-- HERO  -->
    <!-- ---------- -->
    <section class="pt-3 pt-lg-5">
        <div class="container">
            <div class="row gy-3 gy-lg-0">
                <div class="col-lg-5">
                    <div class="apartment-box">
                        <div class="apartment-tag bg-success mb-4" data-aos="fade-up">
                            {{ roomStatus($property->status )}}
                        </div>
                        <div
                                class="apartment-box-info"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            <!-- TITLE -->
                            <div class="mb-4">
                                <div class="logo-icon mb-2">
                                    <img
                                            src="{{ asset('images/logo-sm-white.svg') }}"
                                            alt="Logo Osiedle Versus"
                                            width="50"
                                            height="34"
                                    />
                                </div>
                                <div class="title-tag text-white">{{$property->name_list}}</div>
                                <div class="header-2 text-white">{{$property->number}}</div>
                            </div>
                            <!-- PRICE -->
                            @if($property->price && $investment->show_prices)
                            <div class="mb-4">
                                <div class="apartment-price">@money($property->price)</div>
                            </div>
                            @endif
                            <!-- LEVEL - ROOMS - BUTTONS -->
                            <div class="apartment-data-box">
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Piętro:</div>
                                    <div class="apartment-data-number">{{$floor->number}}</div>
                                </div>
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Liczba pokoi:</div>
                                    <div class="apartment-data-number">{{$property->rooms}}</div>
                                </div>
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Powierzchnia:</div>
                                    <div class="apartment-data-number">{{$property->area}} m<sup>2</sup></div>
                                </div>
                                @if($property->area_floor)
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Powierzchnia przy podłodze:</div>
                                    <div class="apartment-data-number">{{$property->area_floor}} m<sup>2</sup></div>
                                </div>
                                @endif
                                @if($property->window)
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Wystawa okna:</div>
                                    <div class="apartment-data-number">{!! window($property->window) !!}</div>
                                </div>
                                @endif
                                @if($property->garden_area)
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Ogródek:</div>
                                    <div class="apartment-data-number">{{$property->garden_area}} m<sup>2</sup></div>
                                </div>
                                @endif
                                @if($property->balcony_area)
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Balkon:</div>
                                    <div class="apartment-data-number">{{$property->balcony_area}} m<sup>2</sup></div>
                                </div>
                                @endif
                                @if($property->terrace_area)
                                <div class="apartment-data">
                                    <div class="apartment-data-name">Taras:</div>
                                    <div class="apartment-data-number">{{$property->terrace_area}} m<sup>2</sup></div>
                                </div>
                                @endif
                                @if($property->file_pdf)
                                <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank" class="btn btn-primary w-100"
                                ><span>POBIERZ KARTĘ .PDF</span></a
                                >
                                @endif

                                @if($property->view_3d)
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalEstate" class="btn btn-primary w-100"><span>WIRTUALNY SPACER</span></a>
                                    <!-- Modal -->
                                @endif

                                <!--  -->
                                <!-- ADD class btn-like-active on liked item -->
                                <!--  -->
                                <button id="addToFav" data-id="{{$property->id}}" class="btn btn-like w-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg><span>DODAJ DO ULUBIONYCH</span></button>
                                <div id="clipboardmessage"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 align-content-center">
                    @if($property->view_360)
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $property->view_360 }}"></iframe>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="margin-xs">
        <div class="container">
            <div class="row gy-3 gy-lg-0">
                <div class="order-1 col-lg-7 align-content-center" data-aos="fade">
                    @if($property->file)
                        <a href="{{ asset('/investment/property/'.$property->file) }}" class="glightbox" data-gallery="gallery-visual">
                            <picture>
                                <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}" loading="lazy" class="img-fluid ap-img-3d">
                            </picture>
                        </a>
                    @endif
                </div>
                <!-- FORM -->
                <div class="order-0 order-lg-2 col-lg-5">
                    <div class="bg-contact-form p-3 p-md-30px">
                        <div class="px-lg-3 d-flex flex-column align-items-center">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="42"
                                    height="28"
                                    class="mb-1"
                            />
                            <!-- FORM TITLE -->
                            <div class="title-tag-sm">jesteś zainteresowany</div>
                            <div class="header-3 mb-3">tym mieszkaniem?</div>
                        </div>
                        <!-- FORM -->
                        <form id="contact-form"
                              autocomplete="off" class="p-0 p-lg-3 validateForm"
                              action="{{route('contact.property', $property->id)}}"
                              method="post"
                        >
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    @if (session('success'))
                                        <div id="form-success" class="alert-success alert hide-empty">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div id="form-errors" class="alert-danger alert hide-empty">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="validate[required] form-control @error('form_name') is-invalid @enderror" id="form_name" placeholder="Imię i nazwisko" name="form_name" required="" value="{{ old('form_name') }}" />

                                        @error('form_name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror

                                        <label for="form_name">Imię i nazwisko*</label>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="validate[required,custom[email]] form-control @error('form_email') is-invalid @enderror" id="form_email" placeholder="Adres e-mail" name="form_email" required="" value="{{ old('form_email') }}" />

                                        @error('form_email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror

                                        <label for="form_email">Adres e-mail*</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="validate[required,custom[phone]] form-control @error('form_phone') is-invalid @enderror" id="form_phone" placeholder="Telefon" name="form_phone" value="{{ old('form_phone') }}" />
                                        @error('form_phone')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <label for="form_phone">Numer telefon</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="validate[required] form-control @error('form_message') is-invalid @enderror" placeholder="Wiadomość" id="form_message" style="height: 150px" name="form_message">{{ old('form_message') }}</textarea>

                                        @error('form_message')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <label for="form_message">Wiadomość</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">

                                @foreach ($rules as $r)
                                        <div class="form-check text-start pt-5 d-flex gap-3">
                                        <input class="form-check-input @if($r->required === 1)validate[required] @endif" type="checkbox" value="1" id="zgoda_{{$r->id}}" name="rule_{{$r->id}}" data-prompt-position="topLeft:0"/>
                                        <label class="form-check-label small fw-medium" for="zgoda_{{$r->id}}">{!! $r->text !!}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-12 d-flex justify-content-start">
                                <input name="form_page" type="hidden" value="{{$property->name}}">
                                <script type="text/javascript">
                                    document.write("<button data-btn-submit=\"\" type=\"submit\" class=\"btn btn-primary mt-5 btn-submit\"><span> Wyślij </span></button>");
                                </script>
                                <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b></p></noscript>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($property->view_3d)
    <div class="modal fade" id="modalEstate" tabindex="-1" aria-labelledby="modalEstateLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{$property->name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="{!! estate2link($property->view_3d) !!}" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
@push('scripts')
    <div id="root3dEstate"></div>
    <script>
        (function(w, d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], a = {renderDom: function(){}};
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.async=!!0;
            js.src = 'https://implementations.3destate.pl/sdk.js';
            fjs.parentNode.insertBefore(js, fjs);
            w.API_IMPLEMENTATION_3D_ESTATE = a;
            w.websiteCode = "fraxbud";
        }(window, document, 'script', 'jssdk-implementation-3destate'));

        window.API_IMPLEMENTATION_3D_ESTATE.renderDom();
    </script>
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />

    <script type="text/javascript">
        const button = document.querySelector('#addToFav');
        button.addEventListener('click', function() {
            const xhr = new XMLHttpRequest();
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const property_id = button.getAttribute('data-id');

            xhr.open('POST', '/pl/clipboard');
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
                }
            });
        });
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
        });

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
