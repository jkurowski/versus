@extends('layouts.page', ['body_class' => 'gallery'])

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
    <!-- ---------- -->
    <!-- MAIN GALLERY -->
    <!-- ---------- -->
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
                        <div class="title-tag" data-aos="fade-up">Wizualizacje</div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            Osiedla Versus
                        </div>
                    </div>
                </div>
            </div>

            <!-- IMAGES -->
            <div class="row g-4">
                <!-- 1 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade">
                        <a
                                href="/img/images/gallery/gallery-1@2x.png"
                                class="glightbox"
                                data-gallery="gallery-visual"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-1@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 2 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="100">
                        <a
                                href="/img/images/gallery/gallery-2@2x.png"
                                class="glightbox"
                                data-gallery="gallery-visual"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-2.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-2@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 3 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="200">
                        <a
                                href="/img/images/gallery/gallery-3@2x.png"
                                class="glightbox"
                                data-gallery="gallery-visual"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-3.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-3@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 4 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade">
                        <a
                                href="/img/images/gallery/gallery-4@2x.png"
                                class="glightbox"
                                data-gallery="gallery-visual"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-4.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-4@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 5 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="100">
                        <a
                                href="/img/images/gallery/gallery-5@2x.png"
                                class="glightbox"
                                data-gallery="gallery-visual"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-5.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-5@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 6 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="200">
                        <a
                                href="/img/images/gallery/gallery-6@2x.png"
                                class="glightbox"
                                data-gallery="gallery-visual"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-6.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-6@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------- -->
    <!-- SECOND GALLERY -->
    <!-- ---------- -->
    <section class="margin-xs">
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
                        <div class="title-tag" data-aos="fade-up">dziennik</div>
                        <div
                                class="header-2 mb-3 mb-lg-5"
                                data-aos="fade"
                                data-aos-delay="300"
                        >
                            inwestycji
                        </div>
                    </div>
                </div>
            </div>
            <!-- IMAGES -->
            <div class="row g-4">
                <div class="fs-5 fw-medium">2024.01</div>
                <!-- 1 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade">
                        <a
                                href="/img/images/gallery/gallery-1@2x.png"
                                class="glightbox"
                                data-gallery="gallery-second"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-1@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 2 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="100">
                        <a
                                href="/img/images/gallery/gallery-2@2x.png"
                                class="glightbox"
                                data-gallery="gallery-second"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-2.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-2@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 3 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="200">
                        <a
                                href="/img/images/gallery/gallery-3@2x.png"
                                class="glightbox"
                                data-gallery="gallery-second"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-3.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-3@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 4 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade">
                        <a
                                href="/img/images/gallery/gallery-4@2x.png"
                                class="glightbox"
                                data-gallery="gallery-second"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-4.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-4@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 5 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="100">
                        <a
                                href="/img/images/gallery/gallery-5@2x.png"
                                class="glightbox"
                                data-gallery="gallery-second"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-5.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-5@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 6 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="200">
                        <a
                                href="/img/images/gallery/gallery-6@2x.png"
                                class="glightbox"
                                data-gallery="gallery-second"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-6.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-6@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------- -->
    <!-- THIRD GALLERY -->
    <!-- ---------- -->
    <section class="margin-xs">
        <div class="container">
            <!-- IMAGES -->
            <div class="row g-4">
                <div class="fs-5 fw-medium">2024.07</div>
                <!-- 1 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade">
                        <a
                                href="/img/images/gallery/gallery-1@2x.png"
                                class="glightbox"
                                data-gallery="gallery-third"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-1@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-1@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 2 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="100">
                        <a
                                href="/img/images/gallery/gallery-2@2x.png"
                                class="glightbox"
                                data-gallery="gallery-third"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-2.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-2@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-2@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 3 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="200">
                        <a
                                href="/img/images/gallery/gallery-3@2x.png"
                                class="glightbox"
                                data-gallery="gallery-third"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-3.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-3@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-3@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 4 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade">
                        <a
                                href="/img/images/gallery/gallery-4@2x.png"
                                class="glightbox"
                                data-gallery="gallery-third"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-4.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-4@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-4@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 5 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="100">
                        <a
                                href="/img/images/gallery/gallery-5@2x.png"
                                class="glightbox"
                                data-gallery="gallery-third"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-5.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-5@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-5@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
                <!-- 6 IMAGE -->
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-box" data-aos="fade" data-aos-delay="200">
                        <a
                                href="/img/images/gallery/gallery-6@2x.png"
                                class="glightbox"
                                data-gallery="gallery-third"
                        >
                            <picture>
                                <source
                                        srcset="/img/images/gallery/gallery-6.webp"
                                        media="(max-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6@2x.webp"
                                        media="(min-width: 992px)"
                                        type="image/webp"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6.png"
                                        media="(max-width: 992px)"
                                        type="image/png"
                                />
                                <source
                                        srcset="/img/images/gallery/gallery-6@2x.png"
                                        media="(min-width: 992px)"
                                        type="image/png"
                                />
                                <img
                                        src="/img/images/gallery/gallery-6@2x.png"
                                        width="876"
                                        height="632"
                                        class="img-fluid gallery-img"
                                        loading="lazy"
                                        alt="Osiedle Versus - Wizualizacje"
                                />
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection