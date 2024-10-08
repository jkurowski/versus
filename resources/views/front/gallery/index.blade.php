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
    <section class="margin-below-breadcrumb">
        @foreach($galleries as $key => $g)
            @if($g->photos->count() > 0)
                <div class="container @if($key > 0) margin-xs @endif">
                    <!-- TEXT -->
                    <div class="row mb-3 mb-lg-4">
                        <!-- TITLE -->
                        <div class="col-lg-5 align-self-center">
                            <div class="d-flex flex-column">
                                <div class="logo-icon mb-2" data-aos="fade-right">
                                    <img src="{{ asset('images/logo-sm-black.svg') }}" alt="Logo Osiedle Versus" width="50" height="34"/>
                                </div>
                                <div class="title-tag" data-aos="fade-up">{{ $g->name }}</div>
                                <div class="header-2 mb-3 mb-lg-5" data-aos="fade" data-aos-delay="300">
                                    {{ $g->text }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IMAGES -->
                    <div class="row g-4">
                        @foreach($g->photos as $p)
                            <!-- 1 IMAGE -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="gallery-box" data-aos="fade">
                                    <a href="{{ asset('/uploads/gallery/images/'.$p->file) }}" class="glightbox" data-gallery="gallery-{{ $g->id }}">
                                        <picture>
                                            <source srcset="{{ asset('/uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}" type="image/webp"/>

                                            <img
                                                    src="{{ asset('/uploads/gallery/images/thumbs/'.$p->file) }}"
                                                    width="876"
                                                    height="632"
                                                    class="img-fluid gallery-img"
                                                    loading="lazy"
                                                    alt="{{ $p->name }}"
                                            />
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('js/glightbox.min.js') }}" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
        });
    </script>
@endpush