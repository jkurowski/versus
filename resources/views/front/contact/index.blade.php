@extends('layouts.page', ['body_class' => 'contact'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', [
    'title' => ($page->meta_title) ? $page->meta_title : $page->title,
    ])
@stop

@section('content')
    <section class="margin-below-breadcrumb">
        <div class="container">
            <!-- TEXT -->
            <div class="row mb-3 mb-lg-4">
                <!-- TITLE -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag" data-aos="fade-up">kontakt</div>
                        <div class="header-2 mb-3 mb-lg-5" data-aos="fade" data-aos-delay="300">
                            z nami
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5" data-aos="fade">
                    <p class="paragraph text-pretty mb-4">
                        Jeśli jesteś zainteresowany naszymi mieszkaniami, chciałbyś
                        umówić się na wizytę, otrzymać szczegółową ofertę lub po prostu
                        porozmawiać z naszym sprzedawcą, zachęcamy do kontaktu.
                    </p>
                    <p class="paragraph text-pretty mb-4 mb-lg-0">
                        Mamy świadomość, że każdy ma indywidualne preferencje i
                        potrzeby, dlatego dokładamy wszelkich starań, aby znaleźć
                        mieszkanie, które spełni Twoje wymagania. Nasz zespół jest
                        dostępny, aby odpowiedzieć na Twoje pytania i zapewnić Ci
                        niezbędne informacje.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1" data-aos="fade">
                    <p class="paragraph text-pretty">
                        Skontaktuj się z nami dzisiaj pod numerem telefonu
                        <a href="tel:+48570370403">570 370 403</a> lub <a href="tel:+48570570654">570 570 654</a>
                        lub napisz wiadomość e-mail na adres
                        <a href="mailto:biuro@fraxbud.pl">biuro@fraxbud.pl</a> Chętnie
                        pomożemy Ci znaleźć wymarzone mieszkanie i zrealizować Twoje
                        marzenia o idealnym miejscu do życia
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- -->
    <!-- TEAM -->
    <!-- ---------- -->
    <section class="margin-xxs">
        <div class="container">
            <!-- TEXT -->
            <div class="row mb-3 mb-lg-4">
                <!-- TITLE -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag" data-aos="fade-up">nasz</div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            zespół
                        </div>
                    </div>
                </div>
            </div>
            <!-- STAFF -->
            <div class="row g-4 team">
                <!-- 1 -->
                <div class="col-6 col-lg-3">
                    <div class="person-box">
                        <div class="person-image" data-aos="fade-right">
                            <picture>
                                <img
                                        loading="lazy"
                                        class="img-fluid person-img person-img-gabriela"
                                        src="{{ asset('images/team/weronika.jpg') }}"
                                        width="1000"
                                        height="667"
                                        aria-label="Osiedle Versus - Zespół - Weronika"
                                        alt="Osiedle Versus - Zespół - Weronika"
                                />
                            </picture>
                        </div>
                        <div class="person-info">
                            <div class="person-name">Weronika</div>
                            <a href="tel:+48570370403" class="person-phone"
                            >+48 570 370 403</a
                            >
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-6 col-lg-3">
                    <div class="person-box">
                        <div
                                class="person-image"
                                data-aos-delay="200"
                                data-aos="fade-right"
                        >
                            <picture>
                                <source
                                        srcset="{{ asset('images/team/Paulina.webp') }}"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="{{ asset('images/team/Paulina@2x.webp') }}"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="{{ asset('images/team/Paulina.jpg') }}"
                                        media="(max-width: 992px)"
                                        type="image/jpg"
                                />
                                <source
                                        srcset="{{ asset('images/team/Paulina@2x.jpg') }}"
                                        media="(min-width: 992px)"
                                        type="image/jpg"
                                />
                                <img
                                        loading="lazy"
                                        class="img-fluid person-img person-img-paulina"
                                        src="{{ asset('images/team/Paulina@2x.jpg') }}"
                                        width="1000"
                                        height="667"
                                        aria-label="Osiedle Versus - zespół - Paulina"
                                        alt="Osiedle Versus - zespół- Paulina"
                                />
                            </picture>
                        </div>
                        <div class="person-info">
                            <div class="person-name">Paulina</div>
                            <a href="tel:+48570570654" class="person-phone"
                            >+48 570 570 654</a
                            >
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-6 col-lg-3">
                    <div class="person-box">
                        <div
                                class="person-image"
                                data-aos-delay="400"
                                data-aos="fade-right"
                        >
                            <picture>
                                <source
                                        srcset="{{ asset('images/team/Joanna.webp') }}"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="{{ asset('images/team/Joanna@2x.webp') }}"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="{{ asset('images/team/Joanna.jpg') }}"
                                        media="(max-width: 992px)"
                                        type="image/jpg"
                                />
                                <source
                                        srcset="{{ asset('images/team/Joanna@2x.jpg') }}"
                                        media="(min-width: 992px)"
                                        type="image/jpg"
                                />
                                <img
                                        loading="lazy"
                                        class="img-fluid person-img person-img-joanna"
                                        src="{{ asset('images/team/Joanna@2x.jpg') }}"
                                        width="1000"
                                        height="667"
                                        aria-label="Osiedle Versus - zespół - Joanna"
                                        alt="Osiedle Versus - zespół - Joanna"
                                />
                            </picture>
                        </div>
                        <div class="person-info">
                            <div class="person-name">Joanna</div>
                            <a href="tel:+48660421576" class="person-phone"
                            >+48 660 421 576</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- -->
    <!-- CONTACT FORM -->
    <!-- ---------- -->
    <section class="margin-xs pb-3 pb-sm-0">
        <div class="container">
            <div class="row gy-5 gy-lg-5">
                <!-- FORM -->
                <div class="col-lg-5">
                    <div class="bg-contact-form p-3 p-md-30px">
                        <div class="px-lg-3">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="42"
                                    height="28"
                                    class="mb-1"
                            />
                            <!-- FORM TITLE -->
                            <div class="title-tag-sm">Formularz</div>
                            <div class="header-3 mb-3">kontaktowy</div>
                        </div>
                        <!-- FORM -->
                        <form id="contact-form"
                              autocomplete="off" class="p-0 p-lg-3 validateForm"
                              action="{{route('contact.form')}}"
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
                                <input name="form_page" type="hidden" value="Kontakt">
                                <script type="text/javascript">
                                    document.write("<button data-btn-submit=\"\" type=\"submit\" class=\"btn btn-primary mt-5 btn-submit\"><span> Wyślij </span></button>");
                                </script>
                                <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b></p></noscript>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTACT INFO -->
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="d-flex flex-column">
                        <div class="logo-icon mb-2">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="42"
                                    height="28"
                            />
                        </div>
                        <div class="title-tag">kontakt</div>
                        <div class="header-2 mb-3 mb-lg-5">z nami</div>

                        <div class="row gy-3">
                            <div class="col-sm-6">
                                <div class="contact-info-box">
                                    <div class="contact-info-box-title mb-4">
                                        biuro sprzedaży
                                    </div>
                                    <div
                                            class="d-flex flex-wrap gap-4 flex-row justify-content-between"
                                    >
                                        <!-- ADDRESS -->
                                        <div class="contact-info-box-data">
                                            <div class="contact-icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="10.099"
                                                        height="14.427"
                                                        viewBox="0 0 10.099 14.427"
                                                >
                                                    <path
                                                            id="Icon_material-location-on"
                                                            data-name="Icon material-location-on"
                                                            d="M12.549,3A5.046,5.046,0,0,0,7.5,8.049c0,3.787,5.049,9.378,5.049,9.378S17.6,11.837,17.6,8.049A5.046,5.046,0,0,0,12.549,3Zm0,6.853a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,12.549,9.853Z"
                                                            transform="translate(-7.5 -3)"
                                                    />
                                                </svg>
                                            </div>
                                            <span>ul. Federowicza 15,<br />30-392 Kraków</span>
                                        </div>
                                        <!-- TIME -->
                                        <div class="contact-info-box-data">
                                            <div class="contact-icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11"
                                                        height="11"
                                                        viewBox="0 0 11.83 11.83"
                                                >
                                                    <path
                                                            id="Icon_ionic-ios-time"
                                                            data-name="Icon ionic-ios-time"
                                                            d="M9.29,3.375A5.915,5.915,0,1,0,15.2,9.29,5.914,5.914,0,0,0,9.29,3.375Zm.4,6.427a.4.4,0,0,1-.4.4H6.56a.4.4,0,1,1,0-.8H8.892V5.65a.4.4,0,1,1,.8,0Z"
                                                            transform="translate(15.205 15.205) rotate(180)"
                                                    />
                                                </svg>
                                            </div>
                                            <span>pn - pt<br />9:00 - 17:00</span>
                                        </div>
                                        <!-- PHONE -->
                                        <div class="d-flex flex-sm-column gap-3 contact-info-box-phones">
                                            <div class="contact-info-box-data">
                                                <div class="contact-icon">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="10.05"
                                                        height="10.05"
                                                        viewBox="0 0 10.05 10.05"
                                                    >
                                                        <path
                                                            id="Icon_material-local-phone"
                                                            data-name="Icon material-local-phone"
                                                            d="M6.521,8.85a8.458,8.458,0,0,0,3.68,3.68L11.429,11.3a.555.555,0,0,1,.57-.134,6.369,6.369,0,0,0,1.993.318.56.56,0,0,1,.558.558v1.949a.56.56,0,0,1-.558.558A9.491,9.491,0,0,1,4.5,5.058.56.56,0,0,1,5.058,4.5H7.013a.56.56,0,0,1,.558.558,6.343,6.343,0,0,0,.318,1.993.56.56,0,0,1-.14.57Z"
                                                            transform="translate(-4.5 -4.5)"
                                                        />
                                                    </svg>
                                                </div>
                                                <a href="tel:+48570370403" aria-label="Zadzwoń do nas">
                                                    570 370 403
                                                </a>
                                            </div>
                                            <div class="contact-info-box-data">
                                                <div class="contact-icon">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="10.05"
                                                        height="10.05"
                                                        viewBox="0 0 10.05 10.05"
                                                    >
                                                        <path
                                                            id="Icon_material-local-phone"
                                                            data-name="Icon material-local-phone"
                                                            d="M6.521,8.85a8.458,8.458,0,0,0,3.68,3.68L11.429,11.3a.555.555,0,0,1,.57-.134,6.369,6.369,0,0,0,1.993.318.56.56,0,0,1,.558.558v1.949a.56.56,0,0,1-.558.558A9.491,9.491,0,0,1,4.5,5.058.56.56,0,0,1,5.058,4.5H7.013a.56.56,0,0,1,.558.558,6.343,6.343,0,0,0,.318,1.993.56.56,0,0,1-.14.57Z"
                                                            transform="translate(-4.5 -4.5)"
                                                        />
                                                    </svg>
                                                </div>
                                                <a href="tel:+48570570654" aria-label="Zadzwoń do nas">
                                                    570 570 654
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info-box">
                                    <div class="contact-info-box-title mb-4">
                                        ADRES INWESTYCJI
                                    </div>
                                    <div
                                            class="d-flex flex-wrap gap-4 flex-row justify-content-between"
                                    >
                                        <!-- ADDRESS -->
                                        <div class="contact-info-box-data">
                                            <div class="contact-icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="10.099"
                                                        height="14.427"
                                                        viewBox="0 0 10.099 14.427"
                                                >
                                                    <path
                                                            id="Icon_material-location-on"
                                                            data-name="Icon material-location-on"
                                                            d="M12.549,3A5.046,5.046,0,0,0,7.5,8.049c0,3.787,5.049,9.378,5.049,9.378S17.6,11.837,17.6,8.049A5.046,5.046,0,0,0,12.549,3Zm0,6.853a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,12.549,9.853Z"
                                                            transform="translate(-7.5 -3)"
                                                    />
                                                </svg>
                                            </div>
                                            <span
                                            >ul. Federowicza 15, 17, 19, 21, 23, 25 <br />
                            30-392 Kraków</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- -->
    <!-- MAP -->
    <!-- ---------- -->
    <div class="bg-section">
        <section class="margin-md">
            <div class="container">
                <div class="row gy-5 pb-90px">
                    <!-- TITLE -->
                    <div class="col-lg-5 pt-sm-3 pt-lg-5">
                        <div class="d-flex flex-column">
                            <div class="logo-icon mb-2" data-aos="fade-right">
                                <img
                                        src="{{ asset('images/logo-sm-white.svg') }}"
                                        alt="Logo Osiedle Versus"
                                        width="50"
                                        height="34"
                                />
                            </div>
                            <div class="title-tag text-white" data-aos="fade-up">
                                lokalizacja
                            </div>
                            <div
                                    class="header-2 mb-3 mb-lg-5 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                osiedla versus
                            </div>
                            <div class="" data-aos="fade-up" data-aos-delay="200">
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Budynki znajdują się w dzielnicy Skotniki, która posiada
                                    wyjątkowo dobrze rozwiniętą infrastrukturę, oferuje
                                    szeroką bazę usługowo handlową w najbliższej okolicy oraz
                                    doskonałą komunikację z centrum Krakowa.
                                </p>
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Osiedle Versus zlokalizowane jest przy ulicy Jana Kantego
                                    Federowicza, w sąsiedztwie licznych sklepów, siłowni,
                                    punktów usługowych, szkół, przedszkoli uczelni.
                                </p>
                            </div>

                            <a href="/pl/lokalizacja/" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200"><span>Sprawdź</span></a>
                        </div>
                    </div>
                    <!-- MAP -->
                    <div class="col-lg-6 offset-lg-1 position-relative" data-map="true">
                        <div class="map-container">
                            <div id="map-location"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <div id="root3dEstate"></div>
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px,16px"
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
