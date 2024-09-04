<!-- ---------- -->
<!-- NAVIGATION -->
<!-- ---------- -->
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-custom bg-white">
        <div class="container d-flex justify-content-between position-relative">
            <!-- ---------- -->
            <!-- INFO -- EMAIL/PHONE CONTAINER -->
            <!-- ---------- -->
            <div class="info-container">
                <div class="info-container__text info-container__box">
                    <span>Skontaktuj się z nami</span>
                </div>
                <div class="info-container__phone info-container__box">
                    <a href="tel:+48570570700" aria-label="Zadzwoń do nas">
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
                        +48 570 570 700
                    </a>
                </div>
                <div class="info-container__phone info-container__box">
                    <a href="mailto:biuro@fraxbud.pl" aria-label="Napisz do nas">
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
                        biuro@fraxbud.pl
                    </a>
                </div>
                <div class="info-container__likes info-container__box">
                    <a href="#">
                        <span>Ulubione</span>
                        <div class="like">2</div>
                    </a>
                </div>
            </div>
            <!-- ---------- -->
            <!-- Logo -->
            <!-- ---------- -->
            <div>
                <a
                        class="text-center d-inline-flex justify-content-center"
                        href="/"
                >
                    <img
                            class="img-fluid logo"
                            src="{{ asset('images/logo.png') }}"
                            width="358"
                            height="358"
                            alt="Logo Osiedle Versus"
                    />
                </a>
            </div>
            <!-- ---------- -->
            <!-- Toggle button for mobile -->
            <!-- ---------- -->
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon-x">
              <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="28"
                      fill="currentColor"
                      class="bi bi-x"
                      viewBox="0 0 16 16"
              >
                <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                />
              </svg>
            </span>
            </button>
            <!-- ---------- -->
            <!-- Links -->
            <!-- ---------- -->
            <div
                    class="collapse navbar-collapse justify-content-end position-relative"
                    id="navbarNav"
            >
                <ul
                        class="navbar-nav fw-light gap-lg-2 gap-xl-4 align-items-xl-center"
                >
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/mieszkania/"><span>Mieszkania</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/garaze/"><span>Garaże</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/o-inwestycji/"><span>O inwestycji</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/lokalizacja/"><span>Lokalizacja</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/galeria/"><span>Galeria</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/wykonczenie/"><span>Wykończenie</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pl/kontakt/"><span>Kontakt</span></a>
                    </li>
                    <li class="nav-item mt-3 d-flex justify-content-between li-hidden">
                        <div class="info-container__text info-container__box">
                            <span>Skontaktuj się z nami</span>
                        </div>
                    </li>
                    <li class="nav-item mt-3 d-flex justify-content-between li-hidden li-contact-mobile">
                        <div class="info-container__phone info-container__box">
                            <a href="tel:+48570570700" aria-label="Zadzwoń do nas">
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
                                +48 570 570 700
                            </a>
                        </div>
                        <div class="info-container__phone info-container__box">
                            <a href="mailto:biuro@fraxbud.pl" aria-label="Napisz do nas">
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
                                biuro@fraxbud.pl
                            </a>
                        </div>
                        <div class="info-container__likes info-container__box">
                            <a href="#">
                                <span>Ulubione</span>
                                <div class="like">2</div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>