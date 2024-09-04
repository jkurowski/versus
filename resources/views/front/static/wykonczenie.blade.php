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
                        <div class="title-tag" data-aos="fade-up">
                            mieszkanie pod klucz
                        </div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            z Maxfliz
                        </div>
                        <div class="" data-aos="fade-up" data-aos-delay="200">
                            <p class="paragraph text-pretty mb-4">
                                Podnieś wartość swojej inwestycji. Szybko, sprawnie,
                                efektywnie. Dla Naszego zespołu słowo „niemożliwe” nie
                                istnieje. Jesteśmy doświadczonymi specjalistami, kierującymi
                                się w swojej pracy pasją i doświadczeniem.
                            </p>
                            <p class="paragraph text-pretty mb-4">
                                Dział Obsługi Inwestycji Maxfliz to przede wszystkim
                                indywidualne i profesjonalne podejście do każdej realizacji
                                oraz współpraca wyłącznie z profesjonalistami.
                            </p>
                            <p class="paragraph text-pretty mb-4">
                                W ofercie „Wykończenia pod klucz” świadczymy kompleksową
                                usługę wykończenia lokalu mieszkalnego, na podstawie
                                wybranego wcześniej programu wykończeniowego. W ramach
                                realizacji przygotowujemy projekty kompletnych mieszkań. To
                                co nas wyróżnia to możliwość obejrzenia materiałów z
                                wybranego pakietu w naszych salonach wraz z naszym
                                opiekunem.
                            </p>
                            <p class="paragraph text-pretty mb-4">
                                Realizację wykonujemy w najwyższym standardzie,
                                wykorzystując niebanalne rozwiązania, wyszukane detale oraz
                                ekskluzywne materiały z najnowszych kolekcji prestiżowych
                                marek.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- IMAGE -->
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <picture data-aos="fade">
                        <source
                                srcset="{{ asset('images/end.webp') }}"
                                media="(max-width: 992px)"
                                type="image/webp"
                        />
                        <source
                                srcset="{{ asset('images/end@2x.webp') }}"
                                media="(min-width: 992px)"
                                type="image/webp"
                        />
                        <source
                                srcset="{{ asset('images/end.jpg') }}"
                                media="(max-width: 992px)"
                                type="image/jpg"
                        />
                        <source
                                srcset="{{ asset('images/end@2x.jpg') }}"
                                media="(min-width: 992px)"
                                type="image/jpg"
                        />
                        <img
                                loading="lazy"
                                class="img-fluid col-6-image"
                                src="{{ asset('images/end@2x.jpg') }}"
                                width="1147"
                                height="765"
                                aria-label="Osiedle Versus - Wykończenia"
                                alt="Osiedle Versus - Wykończenia"
                        />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- -->
    <!-- BENEFITS SECTION -->
    <!-- ---------- -->
    <section class="margin-xs">
        <div class="container">
            <!-- TITLE -->
            <div class="row mb-5 mb-lg-90px">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-lg-center">
                        <div class="logo-icon mb-2" data-aos="fade-right">
                            <img
                                    src="{{ asset('images/logo-sm-black.svg') }}"
                                    alt="Logo Osiedle Versus"
                                    width="50"
                                    height="34"
                            />
                        </div>
                        <div class="title-tag text-black" data-aos="fade-up">
                            korzyści
                        </div>
                        <div
                                class="header-2 text-black"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            ze współpracy
                        </div>
                    </div>
                </div>
            </div>
            <!-- LIST -->
            <div class="row benefit-list gx-lg-90px">
                <div class="col-lg-6">
                    <ul>
                        <li data-aos="fade">
                            Bezpieczeństwo - Rozumiemy je na wielu płaszczyznach i wiemy
                            jak ważnym elementem jest dla naszych Klientów. Od 24
                            miesięcznej gwarancji na wykonywane usługi i materiały, przez
                            opiekę naszych doradców na wszystkich etapach realizacji, aż
                            po serwis posprzedażowy. Wszystkie te elementy składają się w
                            całość, która zapewnia najwyższy poziom bezpieczeństwa.
                        </li>
                        <li data-aos="fade">
                            Kompleksowość - Współpracując z Maxfliz w jednym miejscu
                            zrealizujesz swoje pomysły związane z aranżacją każdej
                            przestrzeni. Szeroka gama asortymentu i doświadczenie naszych
                            doradców sprawią, że wykończenie łazienki, kuchni, salonu,
                            jadalni, a nawet ogrodu nie stanowi wyzwania.
                        </li>
                        <li data-aos="fade">
                            Oszczędność czasu - 5 salonów stacjonarnych w 4 miastach w
                            Polsce, to ponad 13.000 m2najwyższej klasy ekspozycji,
                            prezentującej najnowsze światowe trendy. Gotowe aranżacje,
                            asortyment od A do Z oraz pełna obsługa sprzedażowa. Wszystko
                            w jednym miejscu.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li data-aos="fade">
                            Tylko sprawdzone ekipy - Współpracujemy wyłącznie z
                            wykonawcami, których umiejętności i rzetelność sprawdziliśmy
                            na wspólnych realizacjach.
                        </li>
                        <li data-aos="fade">
                            Opieka - Dla naszych Klientów jesteśmy do dyspozycji na każdym
                            etapie realizacji.
                        </li>
                        <li data-aos="fade">
                            Gwarancja - Dajemy 24 miesięczną gwarancję na wykonane usługi
                            i materiały.
                        </li>
                        <li data-aos="fade">
                            Oszczędność pieniędzy - Możliwość obniżenia stawki VAT z 23%
                            na 8%.
                        </li>
                        <li data-aos="fade">
                            Współpraca z najlepszymi - Od lat współpracujemy tylko ze
                            sprawdzonymi i markowymi producentami płytek, mebli,
                            oświetlenia i wyposażenia łazienek w Europie i na świecie. To
                            daje gwarancję wysokiej jakości produktów i terminowych
                            dostaw.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- -->
    <!--  -->
    <!-- ---------- -->
    <section class="margin-xs">
        <div class="container">
            <div class="row">
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
                        <div class="title-tag" data-aos="fade-up">
                            umów się na spotkanie
                        </div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            z opiekunem
                        </div>
                        <!-- CONTACT INFO -->
                        <div class="contact-info-box">
                            <div class="contact-info-box-title mb-4">
                                MARIUSZ GRZESIAK
                            </div>
                            <div class="d-flex flex-wrap gap-4 flex-row">
                                <!-- PHONE -->
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
                                    <a href="tel:+48533998165" aria-label="Zadzwoń do nas">
                                        533 998 165
                                    </a>
                                </div>
                                <!-- EMAIL -->
                                <div class="contact-info-box-data">
                                    <div class="contact-icon">
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="11.747"
                                                height="9.398"
                                                viewBox="0 0 11.747 9.398"
                                        >
                                            <path
                                                    id="Icon_metro-mail"
                                                    data-name="Icon metro-mail"
                                                    d="M15.714,7.712h-9.4A1.169,1.169,0,0,0,5.147,8.887l-.006,7.048A1.174,1.174,0,0,0,6.316,17.11h9.4a1.174,1.174,0,0,0,1.175-1.175V8.887A1.174,1.174,0,0,0,15.714,7.712Zm0,2.349L11.015,13l-4.7-2.937V8.887l4.7,2.937,4.7-2.937v1.175Z"
                                                    transform="translate(-5.141 -7.712)"
                                            />
                                        </svg>
                                    </div>
                                    <a href="mailto:mariusz.grzesiak@maxfliz.pl"
                                    >mariusz.grzesiak@maxfliz.pl</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection