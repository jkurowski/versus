<div class="bg-breadcrumb">
    <div class="">
        <div class="container">
            <div class="row py-1 py-md-3 py-xl-4">
                <div class="col-12 d-flex flex-column gap-1 gap-xl-3 align-items-center justify-content-center">
                    <div class="breadcrumb-icon">
                        <img
                                src="{{ asset('images/logo-sm-white.svg') }}"
                                alt="Logo Osiedle Versus"
                                width="42"
                                height="28"
                        />
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Strona główna</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $title }}
                            </li>
                        </ol>
                    </nav>
                    <div class="header-breadcrumb text-white">{{ $title }}</div>
                </div>
            </div>
        </div>
    </div>
</div>