@extends('layouts.page', ['body_class' => 'about'])

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
    <section class="margin-below-breadcrumb">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <!-- TEXT -->
                <div class="col-lg-5 align-self-center">
                    <div class="d-flex flex-column">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag" data-aos="fade-up">NOWE MIESZKANIA</div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            w Krakowie
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="200">
                            <p class="paragraph text-pretty mb-4">
                                Osiedle Versus zlokalizowane jest przy ul. Federowicza w
                                Krakowie w dobrze skomunikowanej i zagospodarowanej części
                                miasta.
                            </p>
                            <p class="paragraph text-pretty mb-4">
                                Inwestycja będzie składała się z sześciu budynków
                                wielorodzinnych. Osiedle podzielone zostało na trzy etapy
                                realizacji. Obecnie wznoszony jest pierwszy etap obejmujący
                                budynki Federowicza 23 - roboczo oznaczony B2 i Federowicza
                                25 - roboczo oznaczony B1
                            </p>
                            <p class="paragraph text-pretty mb-3 mb-md-5">
                                W skład pierwszego etapu inwestycji wchodzą dwa dwupiętrowe
                                budynki wielorodzinne, w których znajduje się łącznie 70
                                mieszkań oraz dwa podziemne garaże wielostanowiskowe.
                                Zakończenie pierwszego etapu inwestycji przewidziane jest na
                                III kwartał 2025 roku
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SLIDER -->
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <div class="slider-right">
                        <!-- SLIDES -->
                        <div class="slick-slider-right">
                            <!-- 1 -->
                            <div class="">
                                <picture>
                                    <source
                                            srcset="{{ asset('images/investment/investment-1.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
                                    />
                                    <img
                                            loading="lazy"
                                            class="slider-right-img"
                                            src="{{ asset('images/investment/investment-1@2x.png') }}"
                                            width="2500"
                                            height="1563"
                                            aria-label="Nowoczesne mieszkania"
                                            alt="Nowoczesne mieszkania"
                                    />
                                </picture>
                            </div>
                            <!-- 2 -->
                            <div class="">
                                <picture>
                                    <source
                                            srcset="{{ asset('images/investment/investment-8.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
                                    />
                                    <img
                                            loading="lazy"
                                            class="slider-right-img"
                                            src="{{ asset('images/investment/investment-8@2x.png') }}"
                                            width="2500"
                                            height="1563"
                                            aria-label="Nowoczesne mieszkania"
                                            alt="Nowoczesne mieszkania"
                                    />
                                </picture>
                            </div>
                            <!-- 1 -->
                            <div class="">
                                <picture>
                                    <source
                                            srcset="{{ asset('images/investment/investment-1.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
                                    />
                                    <img
                                            loading="lazy"
                                            class="slider-right-img"
                                            src="{{ asset('images/investment/investment-1@2x.png') }}"
                                            width="2500"
                                            height="1563"
                                            aria-label="Nowoczesne mieszkania"
                                            alt="Nowoczesne mieszkania"
                                    />
                                </picture>
                            </div>
                            <!-- 2 -->
                            <div class="">
                                <picture>
                                    <source
                                            srcset="{{ asset('images/investment/investment-8.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
                                    />
                                    <img
                                            loading="lazy"
                                            class="slider-right-img"
                                            src="{{ asset('images/investment/investment-8@2x.png') }}"
                                            width="2500"
                                            height="1563"
                                            aria-label="Nowoczesne mieszkania"
                                            alt="Nowoczesne mieszkania"
                                    />
                                </picture>
                            </div>
                            <!-- 1 -->
                            <div class="">
                                <picture>
                                    <source
                                            srcset="{{ asset('images/investment/investment-1.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-1@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
                                    />
                                    <img
                                            loading="lazy"
                                            class="slider-right-img"
                                            src="{{ asset('images/investment/investment-1@2x.png') }}"
                                            width="2500"
                                            height="1563"
                                            aria-label="Nowoczesne mieszkania"
                                            alt="Nowoczesne mieszkania"
                                    />
                                </picture>
                            </div>
                            <!-- 2 -->
                            <div class="">
                                <picture>
                                    <source
                                            srcset="{{ asset('images/investment/investment-8.webp') }}"
                                            media="(max-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8@2x.webp') }}"
                                            media="(min-width: 992px)"
                                            type="image/webp"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8.png') }}"
                                            media="(max-width: 992px)"
                                            type="image/png"
                                    />
                                    <source
                                            srcset="{{ asset('images/investment/investment-8@2x.png') }}"
                                            media="(min-width: 992px)"
                                            type="image/png"
                                    />
                                    <img
                                            loading="lazy"
                                            class="slider-right-img"
                                            src="{{ asset('images/investment/investment-8@2x.png') }}"
                                            width="2500"
                                            height="1563"
                                            aria-label="Nowoczesne mieszkania"
                                            alt="Nowoczesne mieszkania"
                                    />
                                </picture>
                            </div>
                        </div>
                        <!-- BUTTONS -->
                        <div class="slick-slider-right-btns">
                            <button
                                    type="button"
                                    class="slick-slider-right-prev slick-prev"
                                    aria-label="Poprzedni slajd"
                            >
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25.209"
                                        height="19.189"
                                        viewBox="0 0 25.209 19.189"
                                >
                                    <path
                                            id="arrow_right_alt_24dp_E8EAED_FILL0_wght100_GRAD0_opsz24"
                                            d="M15.615,19.189l-.941-.941,8-8H0V8.936H22.669l-8-8L15.615,0l9.595,9.595Z"
                                            transform="translate(25.209 19.189) rotate(180)"
                                    />
                                </svg>
                            </button>
                            <button
                                    type="button"
                                    class="slick-slider-right-next slick-next"
                                    aria-label="Następny slajd"
                            >
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25.209"
                                        height="19.189"
                                        viewBox="0 0 25.209 19.189"
                                >
                                    <path
                                            id="arrow_right_alt_24dp_E8EAED_FILL0_wght100_GRAD0_opsz24"
                                            d="M227.615-664.811l-.941-.941,8-8H212v-1.317h22.669l-8-8,.941-.941,9.595,9.595Z"
                                            transform="translate(-212 684)"
                                    />
                                </svg>
                            </button>
                        </div>
                        <!-- Background -->
                        <div class="column-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="background-svg background-svg-investment">
        <!-- ---------- -->
        <!-- SLIDER LEFT - FUNKCJONALNOŚĆ -->
        <!-- ---------- -->
        <section class="margin-xs">
            <div class="container">
                <div class="row gy-5 gy-lg-0">
                    <!-- SLIDER -->
                    <div
                            class="order-1 col-lg-6 position-relative align-self-center"
                            dir="rtl"
                    >
                        <div class="slider-left" dir="rtl">
                            <!-- SLIDES -->
                            <div class="slick-slider-left">
                                <!-- 2 -->
                                <div class="">
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/investment/investment-2.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-2@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-2.png') }}"
                                                media="(max-width: 992px)"
                                                type="image/png"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-2@2x.png') }}"
                                                media="(min-width: 992px)"
                                                type="image/png"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-left-img"
                                                src="{{ asset('images/investment/investment-2@2x.png') }}"
                                                width="2500"
                                                height="1563"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>
                                <!-- 1 -->
                                <div class="">
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/investment/investment-3.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-3@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-3.png') }}"
                                                media="(max-width: 992px)"
                                                type="image/png"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-3@2x.png') }}"
                                                media="(min-width: 992px)"
                                                type="image/png"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-left-img"
                                                src="{{ asset('images/investment/investment-3@2x.png') }}"
                                                width="2500"
                                                height="1563"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>

                                <!-- 2 -->
                                <div class="">
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/investment/investment-2.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-2@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-2.png') }}"
                                                media="(max-width: 992px)"
                                                type="image/png"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-2@2x.png') }}"
                                                media="(min-width: 992px)"
                                                type="image/png"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-left-img"
                                                src="{{ asset('images/investment/investment-2@2x.png') }}"
                                                width="2500"
                                                height="1563"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>
                                <!-- 1 -->
                                <div class="">
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/investment/investment-3.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-3@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-3.png') }}"
                                                media="(max-width: 992px)"
                                                type="image/png"
                                        />
                                        <source
                                                srcset="{{ asset('images/investment/investment-3@2x.png') }}"
                                                media="(min-width: 992px)"
                                                type="image/png"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-left-img"
                                                src="{{ asset('images/investment/investment-3@2x.png') }}"
                                                width="2500"
                                                height="1563"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>
                            </div>
                            <!-- BUTTONS -->
                            <div class="slick-slider-left-btns">
                                <button
                                        type="button"
                                        class="slick-slider-left-prev slick-prev"
                                        aria-label="Poprzedni slajd"
                                >
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="25.209"
                                            height="19.189"
                                            viewBox="0 0 25.209 19.189"
                                    >
                                        <path
                                                fill="#fff"
                                                id="arrow_right_alt_24dp_E8EAED_FILL0_wght100_GRAD0_opsz24"
                                                d="M227.615-664.811l-.941-.941,8-8H212v-1.317h22.669l-8-8,.941-.941,9.595,9.595Z"
                                                transform="translate(-212 684)"
                                        />
                                    </svg>
                                </button>
                                <button
                                        type="button"
                                        class="slick-slider-left-next slick-next"
                                        aria-label="Następny slajd"
                                >
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="25.209"
                                            height="19.189"
                                            viewBox="0 0 25.209 19.189"
                                            fill="#fff"
                                    >
                                        <path
                                                id="arrow_right_alt_24dp_E8EAED_FILL0_wght100_GRAD0_opsz24"
                                                d="M15.615,19.189l-.941-.941,8-8H0V8.936H22.669l-8-8L15.615,0l9.595,9.595Z"
                                                transform="translate(25.209 19.189) rotate(180)"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- TEXT -->
                    <div
                            class="order-0 order-lg-2 col-lg-5 offset-lg-1 align-self-center"
                    >
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
                                FUNKCJONALNOŚĆ
                            </div>
                            <div
                                    class="header-2 mb-3 mb-lg-5 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                z wysokim standardem
                            </div>
                            <div class="" data-aos="fade-up" data-aos-delay="200">
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Mieszkania zaprojektowano z myślą o funkcjonalności i
                                    ergonomii przestrzeni oraz wysokim standardzie
                                    wykończenia. Oferujemy lokale o powierzchni od 33 do 56
                                    m2. Mieszkania zlokalizowane na parterze posiadać będą
                                    przynależne ogródki, natomiast mieszkania na wyższych
                                    kondygnacjach szerokie balkony.
                                </p>
                                <p class="paragraph text-pretty text-white mb-3 mb-md-5">
                                    Każde mieszkanie będzie wyposażone w ogrzewanie podłogowe,
                                    klimatyzację, filtry antysmogowe.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- FEATURES -->
        <!-- ---------- -->
        <section class="margin-xxs">
            <div class="container">
                <!-- TITLE -->
                <div class="row mb-5 mb-lg-90px">
                    <div class="col-12 mb-2 mb-lg-5">
                        <div class="d-flex flex-column align-items-lg-center">
                            <div class="logo-icon mb-2" data-aos="fade-right">
                                <img
                                        src="{{ asset('images/logo-sm-white.svg') }}"
                                        alt="Logo Osiedle Versus"
                                        width="50"
                                        height="34"
                                />
                            </div>
                            <div class="title-tag text-white" data-aos="fade-up">
                                dlaczego
                            </div>
                            <div
                                    class="header-2 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                warto?
                            </div>
                        </div>
                    </div>
                    <!-- TEXT -->
                    <div class="col-lg-6 offset-lg-3">
                        <div
                                class="paragraph text-lg-center text-white"
                                data-aos="fade-up"
                        >
                            Inwestycja charakteryzuje się nowoczesną architekturą, wysoką
                            jakością projektu oraz użytych materiałów. Każde mieszkanie
                            będzie wyposażone w udogodnienia takie jak ogrzewanie
                            podłogowe, klimatyzacja, filtry antysmogowe.
                        </div>
                    </div>
                </div>
                <!-- FEATURES -->
                <div class="row feature-sm">
                    <div class="col-12 col-lg-11 offset-lg-1 col-xxl-8 offset-xxl-2">
                        <div class="row gy-5 gy-md-90px">
                            <div
                                    class="align-self-center col-6 col-md-4"
                                    data-aos="fade"
                                    data-aos-delay="200"
                            >
                                <div class="feature-sm-box">
                                    <div class="icon">
                                        <img
                                                src="{{ asset('images/icons/windows.svg') }}"
                                                width="60"
                                                height="60"
                                                alt="Okna - icona"
                                        />
                                    </div>
                                    <div class="title">
                                        okna <br />
                                        trzyszybowe
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="align-self-center col-6 col-md-4"
                                    data-aos="fade"
                                    data-aos-delay="250"
                            >
                                <div class="feature-sm-box">
                                    <div class="icon">
                                        <img
                                                src="{{ asset('images/icons/garage.svg') }}"
                                                width="60"
                                                height="60"
                                                alt="wewnętrzne miejsca postojowe - icona"
                                        />
                                    </div>
                                    <div class="title">
                                        wewnętrzne <br />
                                        miejsca postojowe
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="align-self-center col-6 col-md-4"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                <div class="feature-sm-box">
                                    <div class="icon">
                                        <img
                                                src="{{ asset('images/icons/heating.svg') }}"
                                                width="60"
                                                height="60"
                                                alt="ogrzewanie podlogowe"
                                        />
                                    </div>
                                    <div class="title">
                                        ogrzewanie <br />
                                        podlogowe
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="align-self-center col-6 col-md-4"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                <div class="feature-sm-box">
                                    <div class="icon">
                                        <img
                                                src="{{ asset('images/icons/air-con.svg') }}"
                                                width="60"
                                                height="60"
                                                alt="klimatyzacja w każdym mieszkaniu"
                                        />
                                    </div>
                                    <div class="title">
                                        klimatyzacja <br />
                                        w każdym mieszkaniu
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="align-self-center col-6 col-md-4"
                                    data-aos="fade"
                                    data-aos-delay="250"
                            >
                                <div class="feature-sm-box">
                                    <div class="icon">
                                        <img
                                                src="{{ asset('images/icons/filter.svg') }}"
                                                width="60"
                                                height="60"
                                                alt="filtry antysmogowe"
                                        />
                                    </div>
                                    <div class="title">
                                        filtry <br />
                                        antysmogowe
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="align-self-center col-6 col-md-4"
                                    data-aos="fade"
                                    data-aos-delay="200"
                            >
                                <div class="feature-sm-box">
                                    <div class="icon">
                                        <img
                                                src="{{ asset('images/icons/ctv.svg') }}"
                                                width="60"
                                                height="60"
                                                alt="monitoring"
                                        />
                                    </div>
                                    <div class="title">monitoring</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- TEXT / IMG -->
        <!-- ---------- -->
        <section class="margin-xs">
            <div class="container">
                <!-- TEXT -->
                <div class="row mb-3 mb-lg-4 gy-4 gy-lg-0">
                    <!-- TITLE -->
                    <div class="col-lg-5 align-self-center">
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
                                ogrzewanie
                            </div>
                            <div
                                    class="header-2 mb-3 mb-lg-5 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                mieszkania
                            </div>
                            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Ogromną zaletą mieszkań dostępnych w ofercie Osiedla
                                    Versus jest wyposażenie ich w system ogrzewania
                                    podłogowego. Zapewnia on równomierne rozchodzenie się
                                    ciepła w każdym z pomieszczeń.
                                </p>
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Zastosowanie tego rodzaju ogrzewania wpłynie pozytywnie na
                                    przyszłe rachunki mieszkańców. Ogrzewanie podłogowe jest
                                    bowiem bardziej energooszczędne niż tradycyjne kaloryfery,
                                    ponieważ stosuje się niższą temperaturę czynnika cieplnego
                                    niż w grzejnikach i nie występują straty energii związane
                                    z konwekcją powietrza.
                                </p>
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Dodatkowo jest to idealne rozwiązanie dla osób cierpiących
                                    na alergię lub astmę. Brak kaloryferów to również
                                    dodatkowa przestrzeń i łatwiejsza aranżacja przestrzeni
                                    mieszkalnej.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- IMAGE -->
                    <div class="col-lg-6 offset-lg-1 align-self-center">
                        <picture data-aos="fade">
                            <source
                                    srcset="{{ asset('images/investment/investment-4.webp') }}"
                                    media="(max-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-4@2x.webp') }}"
                                    media="(min-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-4.jpg') }}"
                                    media="(max-width: 992px)"
                                    type="image/jpg"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-4@2x.jpg') }}"
                                    media="(min-width: 992px)"
                                    type="image/jpg"
                            />
                            <img
                                    loading="lazy"
                                    class="img-fluid col-6-image investment-4"
                                    src="{{ asset('images/investment/investment-4@2x.jpg') }}"
                                    width="1147"
                                    height="765"
                                    aria-label="Osiedle Versus - Ox"
                                    alt="Osiedle Versus - Ox"
                            />
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!--  IMG / TEXT -->
        <!-- ---------- -->
        <section class="margin-xs">
            <div class="container">
                <!-- TEXT -->
                <div class="row mb-3 mb-lg-4 gy-4 gy-lg-0">
                    <!-- IMAGE -->
                    <div class="order-1 col-lg-6 align-self-center">
                        <picture data-aos="fade">
                            <source
                                    srcset="{{ asset('images/investment/investment-5.webp') }}"
                                    media="(max-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-5@2x.webp') }}"
                                    media="(min-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-5.jpg') }}"
                                    media="(max-width: 992px)"
                                    type="image/jpg"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-5@2x.jpg') }}"
                                    media="(min-width: 992px)"
                                    type="image/jpg"
                            />
                            <img
                                    loading="lazy"
                                    class="img-fluid col-6-image col-6-image-right"
                                    src="{{ asset('images/investment/investment-5@2x.jpg') }}"
                                    width="1147"
                                    height="765"
                                    aria-label="Osiedle Versus - Ox"
                                    alt="Osiedle Versus - Ox"
                            />
                        </picture>
                    </div>
                    <!-- TEXT -->
                    <div
                            class="order-0 order-lg-2 col-lg-5 offset-lg-1 align-self-center"
                    >
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
                                KLIMATYZOWANE
                            </div>
                            <div
                                    class="header-2 mb-3 mb-lg-5 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                pomieszczenia
                            </div>
                            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Każde mieszkanie będzie posiadało instalację klimatyzacji.
                                    Klimatyzacja zapewnia komfort cieplny w czasie upałów.
                                    Zbyt wysoka temperatura sprawia że mamy gorsze
                                    samopoczucie, jest też niebezpieczna dla osób z chorobami
                                    kardiologicznymi.
                                </p>
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Kiedy na zewnątrz panuje skwar mieszkańcy inwestycji
                                    osiedle Versus będą odczuwali komfort podczas relaksu w
                                    swoim domu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- TEXT / IMG -->
        <!-- ---------- -->
        <section class="margin-xs">
            <div class="container">
                <!-- TEXT -->
                <div class="row mb-3 mb-lg-4 gy-4 gy-lg-0">
                    <!-- TITLE -->
                    <div class="col-lg-5 align-self-center">
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
                                świeże
                            </div>
                            <div
                                    class="header-2 mb-3 mb-lg-5 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                powietrze
                            </div>
                            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Osiedle Versus wyróżnia szczególna troska o zdrowie i
                                    dobre samopoczucie mieszkańców. Wszystkie mieszkania będą
                                    wyposażone w filtry antysmogowe. Filtry oczyszczają
                                    powietrze ze smogu, pyłów, kurzu, spalin.
                                </p>
                                <p class="paragraph text-pretty mb-4 text-white">
                                    Zainstalowane w nawiewnikach okiennych filtry z
                                    wielowarstwowej membrany z nanowłókien, ograniczają
                                    przenikanie zanieczyszczeń do wnętrza mieszkań, a
                                    jednocześnie zapewniają stały dopływ czystego powietrza.
                                    Jest to ważny aspekt zdrowotny w mieszkaniach
                                    zlokalizowanych w centrach dużych miast.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- IMAGE -->
                    <div class="col-lg-6 offset-lg-1 align-self-center">
                        <picture data-aos="fade">
                            <source
                                    srcset="{{ asset('images/investment/investment-6.webp') }}"
                                    media="(max-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-6@2x.webp') }}"
                                    media="(min-width: 992px)"
                                    type="image/webp"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-6.jpg') }}"
                                    media="(max-width: 992px)"
                                    type="image/jpg"
                            />
                            <source
                                    srcset="{{ asset('images/investment/investment-6@2x.jpg') }}"
                                    media="(min-width: 992px)"
                                    type="image/jpg"
                            />
                            <img
                                    loading="lazy"
                                    class="img-fluid col-6-image"
                                    src="{{ asset('images/investment/investment-6@2x.jpg') }}"
                                    width="1147"
                                    height="765"
                                    aria-label="Osiedle Versus - Ox"
                                    alt="Osiedle Versus - Ox"
                            />
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- Apartments 2-col -->
        <!-- ---------- -->
        <section class="margin-xs">
            <div class="container">
                <!-- TITLE -->
                <div class="row mb-5 mb-lg-90px gy-4 gy-lg-0">
                    <div class="col-12">
                        <div class="d-flex flex-column align-items-lg-center">
                            <div class="logo-icon mb-2" data-aos="fade-right">
                                <img
                                        src="{{ asset('images/logo-sm-white.svg') }}"
                                        alt="Logo Osiedle Versus"
                                        width="50"
                                        height="34"
                                />
                            </div>
                            <div class="title-tag text-white" data-aos="fade-up">
                                Nasze
                            </div>
                            <div
                                    class="header-2 text-white"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                mieszkania
                            </div>
                        </div>
                    </div>
                </div>
                <!-- AP BOXES -->
                <div class="row gx-sm-30px gy-30px gy-lg-0">
                    <!-- 1 -->
                    <div
                            class="col-lg-6 d-flex flex-column gap-3 gap-lg-5 justify-content-center"
                            data-aos="fade-right"
                    >
                        <div class="ap-box ap-box-m2" data-aos="fade-right">
                            <div class="ap-box-info">
                                <div class="ap-box-tag">mieszkania</div>
                                <div class="ap-box-title">2-pokojowe</div>
                            </div>
                            <a href=/pl/mieszkanie/" class="btn btn-primary">
                                <span>Sprawdź</span>
                            </a>
                            <a href="/pl/mieszkanie/" class="ap-box-link"></a>
                        </div>
                        <div class="ap-box-additional">
                            <div class="d-flex flex-column mb-4">
                                <div class="logo-icon mb-2" data-aos="fade-right">
                                    <img
                                            src="{{ asset('images/logo-sm-black.svg') }}"
                                            alt="Logo Osiedle Versus"
                                            width="50"
                                            height="34"
                                    />
                                </div>
                                <div class="title-tag text-change" data-aos="fade-up">
                                    mieszkania
                                </div>
                                <div
                                        class="header-2 text-change"
                                        data-aos="fade"
                                        data-aos-delay="300"
                                >
                                    dwupokojowe
                                </div>
                            </div>
                            <p
                                    class="paragraph text-pretty mb-4 text-change"
                                    data-aos="fade-up"
                            >
                                Inwestycja zaprojektowana została z myślą o osobach
                                aktywnych poszukujących miejsca tętniącego życiem, w którym
                                nie można się nudzić. W ofercie znajdują się funkcjonalne
                                mieszkania dwupokojowe o powierzchniach 32-40 m2.
                            </p>
                            <a
                                    href="/pl/mieszkania/"
                                    class="btn btn-primary btn-big"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                            ><span>Sprawdź</span></a
                            >
                        </div>
                    </div>
                    <!-- 2 -->
                    <div
                            class="col-lg-6 d-flex flex-column gap-3 gap-lg-5 justify-content-center"
                            data-aos="fade"
                    >
                        <div class="ap-box ap-box-m3" data-aos="fade">
                            <div class="ap-box-info">
                                <div class="ap-box-tag">mieszkania</div>
                                <div class="ap-box-title">3-pokojowe</div>
                            </div>
                            <a href="/pl/mieszkanie/" class="btn btn-primary">
                                <span>Sprawdź</span>
                            </a>
                            <a href="/pl/mieszkanie/" class="ap-box-link"></a>
                        </div>
                        <div class="ap-box-additional">
                            <div class="d-flex flex-column mb-4">
                                <div class="logo-icon mb-2" data-aos="fade-right">
                                    <img
                                            src="{{ asset('images/logo-sm-black.svg') }}"
                                            alt="Logo Osiedle Versus"
                                            width="50"
                                            height="34"
                                    />
                                </div>
                                <div class="title-tag text-black" data-aos="fade-up">
                                    mieszkania
                                </div>
                                <div
                                        class="header-2 text-black"
                                        data-aos="fade"
                                        data-aos-delay="300"
                                >
                                    trzypokojowe
                                </div>
                            </div>
                            <p class="paragraph text-pretty mb-4" data-aos="fade-up">
                                Mieszkania o powierzchni większej niż 50 m2 są to mieszkania
                                3-pokojowe. Jest to idealne rozwiązanie dla rodzin z
                                dziećmi, jak również dla wszystkich osób potrzebujących
                                większej, oddzielnej przestrzeni dla siebie. Największe
                                lokale w ofercie mają powierzchnię 56 m2.
                            </p>
                            <a
                                    href="/pl/mieszkania/"
                                    class="btn btn-primary btn-big"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                            ><span>Sprawdź</span></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ---------- -->
    <!-- TEXT / IMG -->
    <!-- ---------- -->
    <section class="margin-xxs">
        <div class="container">
            <!-- TEXT -->
            <div class="row mb-3 mb-lg-4 gy-4 gy-lg-0">
                <!-- TITLE -->
                <div class="col-lg-5 align-self-center">
                    <div class="d-flex flex-column">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag text-black" data-aos="fade-up">o</div>
                        <div
                                class="header-2 mb-3 mb-lg-5 text-black"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            Deweloperze
                        </div>
                        <div
                                class="mb-3 mb-md-5"
                                data-aos="fade-up"
                                data-aos-delay="200"
                        >
                            <p class="paragraph text-pretty mb-4 text-black">
                                Firma FRAX-BUD działa na krakowskim rynku budowlanym od 1990
                                roku. Realizujemy głównie inwestycje wielorodzinne w
                                atrakcyjnych lokalizacjach. Oddaliśmy do użytkowania setki
                                mieszkań, domów oraz lokali usługowych. Zapewniamy wysoki
                                standard wykonania i terminowość budowy.
                            </p>
                            <p class="paragraph text-pretty mb-4 text-black">
                                Nasza firma charakteryzuje się stabilną pozycją na rynku
                                deweloperskim, jednocześnie konsekwentnie i dynamicznie się
                                rozwija. Gwarantujemy, że nowe mieszkania zachwycą Was nie
                                tylko ze względu na swoją lokalizację, ale również ze
                                względu na zastosowanie wyjątkowo funkcjonalnych rozwiązań i
                                wysokiej jakości materiałów budowlanych.
                            </p>
                            <p class="paragraph text-pretty text-black">
                                Naszym celem jest poszerzanie oferty wysokiej klasy mieszkań
                                na krakowskim rynku nieruchomości.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- IMAGE -->
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <picture data-aos="fade">
                        <source
                                srcset="{{ asset('images/investment/investment-7.webp') }}"
                                media="(max-width: 992px)"
                                type="image/webp"
                        />
                        <source
                                srcset="{{ asset('images/investment/investment-7@2x.webp') }}"
                                media="(min-width: 992px)"
                                type="image/webp"
                        />
                        <source
                                srcset="{{ asset('images/investment/investment-7.jpg') }}"
                                media="(max-width: 992px)"
                                type="image/jpg"
                        />
                        <source
                                srcset="{{ asset('images/investment/investment-7@2x.jpg') }}"
                                media="(min-width: 992px)"
                                type="image/jpg"
                        />
                        <img
                                loading="lazy"
                                class="img-fluid col-6-image"
                                src="{{ asset('images/investment/investment-7@2x.jpg') }}"
                                width="1147"
                                height="765"
                                aria-label="Osiedle Versus - Ox"
                                alt="Osiedle Versus - Ox"
                        />
                    </picture>
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
                                        <a
                                                href="/pl/polityka-prywatnosci/"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                        >
                                            polityka prywatności</a
                                        >*
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
                        <div class="header-2 mb-4">z nami</div>
                        <p class="paragraph text-pretty mb-4">
                            Jeśli jesteś zainteresowany naszymi mieszkaniami, chciałbyś
                            umówić się na wizytę, otrzymać szczegółową ofertę lub po
                            prostu porozmawiać z naszym sprzedawcą, zachęcamy do kontaktu.
                        </p>
                        <div class="contact-info-box">
                            <div class="contact-info-box-title mb-4">biuro sprzedaży</div>
                            <div
                                    class="d-flex flex-wrap gap-4 flex-row justify-content-between"
                            >
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
                                <!-- PHONE -->
                                <div
                                        class="d-flex flex-sm-column gap-3 contact-info-box-phones"
                                >
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
                                        <a href="tel:+48570570700" aria-label="Zadzwoń do nas">
                                            570 570 700
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection