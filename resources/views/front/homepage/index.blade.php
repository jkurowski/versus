@extends('layouts.homepage')

@section('content')
    <main class="">
        <!-- ---------- -->
        <!-- HERO SECTION -->
        <!-- ---------- -->
        <section class="hero-bg section-max-width">
            <div class="container h-100">
                <div class="hero-container">
                    <!-- TITLE -->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center">
                                <div class="logo-icon mb-4" data-aos="fade-right">
                                    <img
                                            src="{{ asset('images/logo-sm-white.svg') }}"
                                            alt="Logo Osiedle Versus"
                                            width="50"
                                            height="34"
                                    />
                                </div>
                                <div class="title-tag text-white mb-4" data-aos="fade-up">
                                    Kraków, ul. federowicza
                                </div>
                                <div
                                        class="header-1 text-white"
                                        data-aos="fade"
                                        data-aos-delay="300"
                                >
                                    osiedle Versus
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FORM -->
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                            <form class="apartments-form" data-aos="fade" method="get" action="/pl/mieszkania/#roomlist">
                                <select name="area" id="" class="form-select apartments-form-select" aria-label="Powierzchnia">
                                    <option>Powierzchnia</option>
                                    <option value="25-35">Od 25 do 35 m<sup>2</sup></option>
                                    <option value="36-45">Od 36 do 45 m<sup>2</sup></option>
                                    <option value="46-55">Od 46 do 55 m<sup>2</sup></option>
                                    <option value="56-65">Od 56 do 65 m<sup>2</sup></option>
                                </select>
                                <select name="room" id="" class="form-select apartments-form-select" aria-label="Pokoje">
                                    <option>Liczba pokoi</option>
                                    <option value="2">2-pokojowe</option>
                                    <option value="3">3-pokojowe</option>
                                </select>
                                <select name="floor" id="" class="form-select apartments-form-select" aria-label="Piętro">
                                    <option>Piętro</option>
                                    <option value="0">Parter</option>
                                    <option value="1">1 piętro</option>
                                    <option value="2">2 piętro</option>
                                </select>
                                <button class="btn btn-primary d-flex align-items-center gap-2" type="submit">
                                    <span> Szukaj </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row feature gy-4">
                    <div class="col-lg-4">
                        <div class="feature-box" data-aos="fade-right">
                            <div class="feature-title-box mb-4">
                                <div class="feature-svg">
                                    <img
                                            src="{{ asset('images/icons/perfect-localization.svg') }}"
                                            width="53"
                                            height="53"
                                            alt="Doskonała lokalizacja"
                                    />
                                </div>
                                <div class="feature-title">
                                    Doskonała <br />
                                    lokalizacja
                                </div>
                            </div>
                            <p class="feature-text">
                                Inwestycja zlokalizowana jest w miejscu posiadającym dobrze
                                rozwiniętą infrastrukturę, oferuje szeroką bazę usługowo
                                handlową w najbliższej okolicy oraz doskonałą komunikację z
                                centrum Krakowa.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade">
                        <div class="feature-box">
                            <div class="feature-title-box mb-4">
                                <div class="feature-svg">
                                    <img
                                            src="{{ asset('images/icons/flat-system.svg') }}"
                                            width="53"
                                            height="53"
                                            alt="Funkcjonalny układ mieszkań"
                                    />
                                </div>
                                <div class="feature-title">
                                    Funkcjonalny <br />
                                    układ mieszkań
                                </div>
                            </div>
                            <p class="feature-text">
                                Plany mieszkań został uważnie przemyślane i dopracowane. Każdy
                                znajdzie mieszkanie odpowiadające indywidualnym preferencjom.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left">
                        <div class="feature-box">
                            <div class="feature-title-box mb-4">
                                <div class="feature-svg">
                                    <img
                                            src="{{ asset('images/icons/heating.svg') }}"
                                            width="53"
                                            height="53"
                                            alt="Ogrzewanie podłogowe w każdym mieszkaniu"
                                    />
                                </div>
                                <div class="feature-title">
                                    Ogrzewanie podłogowe <br />
                                    w każdym mieszkaniu
                                </div>
                            </div>
                            <p class="feature-text">
                                Mieszkania są wykonane w najwyższym standardzie obejmującym m.
                                in. ogrzewanie podłogowe zasilane wodą z MPEC, indywidualną
                                klimatyzację, filtry antysmogowe i wiele więcej.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------- -->
        <!-- SLIDER RIGHT - Wygoda życia -->
        <!-- ---------- -->
        <section class="margin-xxs">
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
                            <div class="title-tag" data-aos="fade-up">WYGODA ŻYCIA</div>
                            <div
                                    class="header-2 mb-3 mb-lg-5"
                                    data-aos="fade"
                                    data-aos-delay="300"
                            >
                                osiedla Versus
                            </div>
                            <div class="" data-aos="fade-up" data-aos-delay="200">
                                <p class="paragraph text-pretty mb-4">
                                    Osiedle Versus to idealne połączenie mieszkania w mieście z
                                    bliskością natury. Budynki znajdują się przy ulicy Jana
                                    Kantego Federowicza, w sąsiedztwie centrum handlowego ATUT
                                    Czerwona Maki, gdzie do dyspozycji są liczne sklepy,
                                    siłownie, punkty usługowe. W niedalekim sąsiedztwie są
                                    szkoły, przedszkola, Uniwersytet Jagielloński.
                                </p>
                                <p class="paragraph text-pretty mb-3 mb-md-5">
                                    Osiedle będzie się składało z sześciu budynków
                                    wielorodzinnych, które zostały podzielone na trzy etapy
                                    realizacji. Pierwszy etap obejmuje budynki 25 i 27.
                                </p>
                            </div>
                            <a
                                    href="/pl/lokalizacja/"
                                    class="btn btn-primary"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                            ><span>Sprawdź</span></a
                            >
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
                                                srcset="{{ asset('images/gallery/gallery-1@2x.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.png') }}"
                                                media="(max-width: 992px)"
                                                type="image/png"
                                        />
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.png') }}"
                                                media="(min-width: 992px)"
                                                type="image/png"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-right-img"
                                                src="{{ asset('images/gallery/gallery-1@2x.png') }}"
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
                                                srcset="{{ asset('images/compare2.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2.jpg') }}"
                                                media="(max-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.jpg') }}"
                                                media="(min-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-right-img"
                                                src="{{ asset('images/compare2@2x.jpg') }}"
                                                width="1344"
                                                height="1328"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>
                                <!-- 1 -->
                                <div class="">
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.png') }}"
                                                media="(max-width: 992px)"
                                                type="image/png"
                                        />
                                        <source
                                                srcset="{{ asset('images/gallery/gallery-1@2x.png') }}"
                                                media="(min-width: 992px)"
                                                type="image/png"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-right-img"
                                                src="{{ asset('images/gallery/gallery-1@2x.png') }}"
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
                                                srcset="{{ asset('images/compare2.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2.jpg') }}"
                                                media="(max-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.jpg') }}"
                                                media="(min-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-right-img"
                                                src="{{ asset('images/compare2@2x.jpg') }}"
                                                width="1344"
                                                height="1328"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>
                                <!-- 1 -->
                                <div class="">
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/building-front.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/building-front@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/building-front.jpg') }}"
                                                media="(max-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <source
                                                srcset="{{ asset('images/building-front@2x.jpg') }}"
                                                media="(min-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-right-img"
                                                src="{{ asset('images/building-front@2x.jpg') }}"
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
                                                srcset="{{ asset('images/compare2.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2.jpg') }}"
                                                media="(max-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.jpg') }}"
                                                media="(min-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <img
                                                loading="lazy"
                                                class="slider-right-img"
                                                src="{{ asset('images/compare2@2x.jpg') }}"
                                                width="1344"
                                                height="1328"
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

        <!-- ---------- -->
        <!-- INSIDE
         SLIDER LEFT - FUNKCJONALNOŚĆ,
         FEATURES,
         TEXT || Compare images - NOWOCZESNE mieszkania,
         Apartments 3-col
         -->
        <!-- ---------- -->
        <div class="background-svg">
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
                                                    srcset="{{ asset('images/compare2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/compare2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/compare2.jpg') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <source
                                                    srcset="{{ asset('images/compare2@2x.jpg') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <img
                                                    loading="lazy"
                                                    class="slider-left-img"
                                                    src="{{ asset('images/compare2@2x.jpg') }}"
                                                    width="1344"
                                                    height="1328"
                                                    aria-label="Nowoczesne mieszkania"
                                                    alt="Nowoczesne mieszkania"
                                            />
                                        </picture>
                                    </div>
                                    <!-- 1 -->
                                    <div class="">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/building-front.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/building-front@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/building-front.jpg') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <source
                                                    srcset="{{ asset('images/building-front@2x.jpg') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <img
                                                    loading="lazy"
                                                    class="slider-left-img"
                                                    src="{{ asset('images/building-front@2x.jpg') }}"
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
                                                    srcset="{{ asset('images/compare2.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/compare2@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/compare2.jpg') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <source
                                                    srcset="{{ asset('images/compare2@2x.jpg') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <img
                                                    loading="lazy"
                                                    class="slider-left-img"
                                                    src="{{ asset('images/compare2@2x.jpg') }}"
                                                    width="1344"
                                                    height="1328"
                                                    aria-label="Nowoczesne mieszkania"
                                                    alt="Nowoczesne mieszkania"
                                            />
                                        </picture>
                                    </div>
                                    <!-- 1 -->
                                    <div class="">
                                        <picture>
                                            <source
                                                    srcset="{{ asset('images/building-front.webp') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/building-front@2x.webp') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/webp"
                                            />
                                            <source
                                                    srcset="{{ asset('images/building-front.jpg') }}"
                                                    media="(max-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <source
                                                    srcset="{{ asset('images/building-front@2x.jpg') }}"
                                                    media="(min-width: 992px)"
                                                    type="image/jpg"
                                            />
                                            <img
                                                    loading="lazy"
                                                    class="slider-left-img"
                                                    src="{{ asset('images/building-front@2x.jpg') }}"
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
                                        W każdym etapie inwestycji zaprojektowano podziemne hale
                                        garażowe z miejscami postojowymi. Pierwszy etap inwestycji
                                        obejmuje dwa nowoczesne budynki wielorodzinne – 25 i 27, w
                                        których znajdzie się łącznie 70 mieszkań oraz dwa
                                        podziemne garaże wielostanowiskowe. Zakończenie pierwszego
                                        etapu inwestycji planowane jest na III kwartał 2025 roku.
                                    </p>
                                    <p class="paragraph text-pretty text-white mb-3 mb-md-5">
                                        Mieszkania zostały zaprojektowane z myślą o
                                        funkcjonalności, ergonomii przestrzeni i wysokim
                                        standardzie wykończenia. Oferujemy lokale o powierzchni od
                                        33 do 56 m². Mieszkania zlokalizowane na parterze będą
                                        posiadały przynależne ogródki, a mieszkania na wyższych
                                        kondygnacjach - szerokie balkony. Każde mieszkanie
                                        zostanie wyposażone w ogrzewanie podłogowe, klimatyzację
                                        oraz filtry antysmogowe.
                                    </p>
                                </div>

                                <a
                                        href="/pl/o-inwestycji/"
                                        class="btn btn-primary"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                ><span>Sprawdź</span></a
                                >
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
            <!-- TEXT || Compare images - NOWOCZESNE mieszkania -->
            <!-- ---------- -->
            <section class="margin-xxs">
                <div class="container">
                    <div class="row gy-5">
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
                                    NOWOCZESNE
                                </div>
                                <div
                                        class="header-2 mb-3 mb-lg-5 text-white"
                                        data-aos="fade"
                                        data-aos-delay="300"
                                >
                                    mieszkania
                                </div>
                                <div class="" data-aos="fade-up" data-aos-delay="200">
                                    <p class="paragraph text-pretty mb-4 text-white">
                                        Osiedle Versus wyróżnia szczególna troska o zdrowie i
                                        dobre samopoczucie mieszkańców. Wszystkie mieszkania będą
                                        wyposażone w filtry antysmogowe. Filtry oczyszczają
                                        powietrze ze smogu, pyłów, kurzu, spalin. Jest to ważny
                                        aspekt zdrowotny w mieszkaniach zlokalizowanych w centrach
                                        dużych miast.
                                    </p>
                                    <p class="paragraph text-pretty mb-4 text-white">
                                        Niewątpliwie dużym atutem mieszkań będzie zainstalowana
                                        klimatyzacja. Klimatyzowane pomieszczenia to komfort pracy
                                        i relaksu, który powinien towarzyszyć nam każdego dnia.
                                        Wszystkie mieszkania będą wyposażone w ogrzewanie
                                        podłogowe. Jest to idealne rozwiązanie dla osób
                                        cierpiących na alergię lub astmę.
                                    </p>
                                    <p class="paragraph text-pretty mb-3 mb-md-5 text-white">
                                        Dodatkowo ograniczamy koszty związane z opłatami za
                                        ciepło, ponieważ takie ogrzewanie wymaga niższej
                                        temperatury czynnika grzewczego niż standardowe. Brak
                                        kaloryferów to również dodatkowa przestrzeń i łatwiejsza
                                        aranżacja przestrzeni mieszkalnej.
                                    </p>
                                </div>

                                <a
                                        href="/pl/mieszkania/"
                                        class="btn btn-primary"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                ><span>Sprawdź</span></a
                                >
                            </div>
                        </div>
                        <!-- COMPARE -->
                        <div class="col-lg-6 offset-lg-1 align-self-center">
                            <div class="images-compare">
                                <div class="image-container">
                                    <!-- LEFT IMAGE -->
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/compare1.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare1@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare1.jpg') }}"
                                                media="(max-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare1@2x.jpg') }}"
                                                media="(min-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <img
                                                loading="lazy"
                                                class="image-before compare-slider-img"
                                                src="{{ asset('images/compare1@2x.jpg') }}"
                                                width="2500"
                                                height="1563"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                    <!-- RIGHT IMAGE -->
                                    <picture>
                                        <source
                                                srcset="{{ asset('images/compare2.webp') }}"
                                                media="(max-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.webp') }}"
                                                media="(min-width: 992px)"
                                                type="image/webp"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2.jpg') }}"
                                                media="(max-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <source
                                                srcset="{{ asset('images/compare2@2x.jpg') }}"
                                                media="(min-width: 992px)"
                                                type="image/jpg"
                                        />
                                        <img
                                                loading="lazy"
                                                class="image-after compare-slider-img"
                                                src="{{ asset('images/compare2@2x.jpg') }}"
                                                width="1344"
                                                height="1328"
                                                aria-label="Nowoczesne mieszkania"
                                                alt="Nowoczesne mieszkania"
                                        />
                                    </picture>
                                </div>
                                <input
                                        type="range"
                                        min="0"
                                        max="100"
                                        value="50"
                                        class="compare-slider"
                                        aria-label="Porównaj zdjęcia"
                                />
                                <div class="compare-slider-line"></div>
                                <div class="compare-slider-btn" aria-hidden="true">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="50"
                                            height="50"
                                            viewBox="0 0 50 50"
                                    >
                                        <g
                                                id="Group_62"
                                                data-name="Group 62"
                                                transform="translate(-1560 -3734)"
                                        >
                                            <circle
                                                    id="Ellipse_13"
                                                    data-name="Ellipse 13"
                                                    cx="25"
                                                    cy="25"
                                                    r="25"
                                                    transform="translate(1560 3734)"
                                                    fill="#fff"
                                            />
                                            <g
                                                    id="Group_61"
                                                    data-name="Group 61"
                                                    transform="translate(0.01 -0.428)"
                                            >
                                                <path
                                                        id="Icon_ionic-ios-arrow-forward"
                                                        data-name="Icon ionic-ios-arrow-forward"
                                                        d="M17.3,13.766,11.564,8.039a1.078,1.078,0,0,1,0-1.529,1.091,1.091,0,0,1,1.533,0L19.59,13a1.08,1.08,0,0,1,.032,1.492L13.1,21.025A1.082,1.082,0,0,1,11.569,19.5Z"
                                                        transform="translate(1580.104 3745.231)"
                                                />
                                                <path
                                                        id="Icon_ionic-ios-arrow-forward-2"
                                                        data-name="Icon ionic-ios-arrow-forward"
                                                        d="M17.3,13.766,11.564,8.039a1.078,1.078,0,0,1,0-1.529,1.091,1.091,0,0,1,1.533,0L19.59,13a1.08,1.08,0,0,1,.032,1.492L13.1,21.025A1.082,1.082,0,0,1,11.569,19.5Z"
                                                        transform="translate(1589.896 3772.769) rotate(180)"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------- -->
            <!-- Apartments 3-col -->
            <!-- ---------- -->
            <section class="margin-xs">
                <div class="container">
                    <!-- TITLE -->
                    <div class="row mb-5 mb-lg-90px">
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
                        <div class="col-sm-6 col-lg-4 d-flex justify-content-center" data-aos="fade-right">
                            <div class="ap-box ap-box-m2" data-aos="fade-right">
                                <div class="ap-box-info">
                                    <div class="ap-box-tag">mieszkania</div>
                                    <div class="ap-box-title">2-pokojowe</div>
                                </div>
                                <a href="/pl/mieszkania/?rooms=2#room-list" class="btn btn-primary"><span>Sprawdź</span></a>
                                <a href="/pl/mieszkania/?rooms=2#room-list" class="ap-box-link"></a>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="col-sm-6 col-lg-4 d-flex justify-content-center" data-aos="fade">
                            <div class="ap-box ap-box-m3" data-aos="fade">
                                <div class="ap-box-info">
                                    <div class="ap-box-tag">mieszkania</div>
                                    <div class="ap-box-title">3-pokojowe</div>
                                </div>
                                <a href="/pl/mieszkania/?rooms=3#room-list" class="btn btn-primary"><span>Sprawdź</span></a>
                                <a href="/pl/mieszkania/?rooms=3#room-list" class="ap-box-link"></a>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="offset-sm-3 offset-lg-0 col-sm-6 col-lg-4 d-flex justify-content-center" data-aos="fade-left">
                            <div class="ap-box ap-box-garden" data-aos="fade-left">
                                <div class="ap-box-info">
                                    <div class="ap-box-tag">mieszkania</div>
                                    <div class="ap-box-title">z ogródkiem</div>
                                </div>
                                <a href="/pl/mieszkania/?garden=1#room-list" class="btn btn-primary"><span>Sprawdź</span></a>
                                <a href="/pl/mieszkania/?garden=1#room-list" class="ap-box-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

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

                                <a
                                        href="/pl/lokalizacja/"
                                        class="btn btn-primary"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                ><span>Sprawdź</span></a
                                >
                            </div>
                        </div>
                        <!-- MAP -->
                        <div
                                class="col-lg-6 offset-lg-1 position-relative"
                                data-map="true"
                        >
                            <div class="map-container">
                                <div id="map-location"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection