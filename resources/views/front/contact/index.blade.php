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
                        <a href="tel:+48570570700">570 570 700</a>
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
                                <source
                                        srcset="{{ asset('images/team/Gabriela.webp') }}"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="{{ asset('images/team/Gabriela@2x.webp') }}"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="{{ asset('images/team/Gabriela.jpg') }}"
                                        media="(max-width: 992px)"
                                        type="image/jpg"
                                />
                                <source
                                        srcset="{{ asset('images/team/Gabriela@2x.jpg') }}"
                                        media="(min-width: 992px)"
                                        type="image/jpg"
                                />
                                <img
                                        loading="lazy"
                                        class="img-fluid person-img person-img-gabriela"
                                        src="{{ asset('images/team/Gabriela@2x.jpg') }}"
                                        width="1000"
                                        height="667"
                                        aria-label="Osiedle Versus - zespół - Gabriela"
                                        alt="Osiedle Versus - zespół - Gabriela"
                                />
                            </picture>
                        </div>
                        <div class="person-info">
                            <div class="person-name">Gabriela</div>
                            <a href="tel:+48570570232" class="person-phone"
                            >+48 570 570 232</a
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
                        <form id="contact-form" autocomplete="off" class="p-0 p-lg-3">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                            id="form-errors"
                                            class="alert-danger alert hide-empty"
                                    ></div>
                                    <div
                                            id="form-success"
                                            class="alert-success alert hide-empty"
                                    ></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="user-name"
                                                placeholder="Imię i nazwisko"
                                                name="username"
                                                required=""
                                        />
                                        <label for="user-name">Imię i nazwisko*</label>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input
                                                type="email"
                                                class="form-control"
                                                id="user-email"
                                                placeholder="Adres e-mail"
                                                name="email"
                                                required=""
                                        />
                                        <label for="user-email">Adres e-mail*</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input
                                                type="tel"
                                                class="form-control"
                                                id="user-tel"
                                                placeholder="Telefon"
                                                name="tel"
                                        />
                                        <label for="user-tel">Numer telefon</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                        <textarea
                                class="form-control"
                                placeholder="Wiadomość"
                                id="user-message"
                                style="height: 150px"
                                name="message"
                        ></textarea>
                                        <label for="user-message">Wiadomość</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check text-start pt-5 d-flex gap-3">
                                    <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="terms-check"
                                            name="terms"
                                    />
                                    <label
                                            class="form-check-label small fw-medium"
                                            for="terms-check"
                                    >
                                        Wyrażam zgodę na przetwarzanie moich danych osobowych
                                        podanych w formularzu, celem przygotowania oferty przez
                                        firmę Frax-Bud -
                                        <a href="/pl/polityka-prywatnosci/" target="_blank" rel="noopener noreferrer">polityka prywatności</a>*
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-start">
                                <button
                                        data-btn-submit=""
                                        type="submit"
                                        class="btn btn-primary mt-5 btn-submit"
                                        disabled=""
                                >
                                    <span> Wyślij </span>
                                </button>
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
                                            <span
                                            >ul. Kamieniarska 37,<br />
                            30-364 Kraków</span
                                            >
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