<x-front-layout>
    <!-- contentLayer -->
    <section class="contentLayer w-100 h-100 mainHeader zIndex-40 position-relative othersPage">
        <div class="contentLayerBorder w-100 h-100 position-relative" data-aos="fade">
            <!-- NavBar -->
            <nav class="navbar navbarPosition navbar-light d-block p-0 text-end">
                <button
                    class="navbar-toggler navButton rounded-0 shadow-none position-absolute navsBtn w-51px h-51px p-0 zIndex-60"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.406" height="23" viewBox="0 0 31.406 23">
                        <g id="Group_1791" data-name="Group 1791" transform="translate(-2674.773 3140.753)">
                            <line class="whiteStrokeTheme" id="Line_204" data-name="Line 204" x2="31.406"
                                transform="translate(2674.773 -3140.253)" fill="none" stroke="#fff" stroke-width="1" />
                            <line class="whiteStrokeTheme" id="Line_205" data-name="Line 205" x2="31.406"
                                transform="translate(2674.773 -3129.253)" fill="none" stroke="#fff" stroke-width="1" />
                            <line class="whiteStrokeTheme" id="Line_206" data-name="Line 206" x2="31.406"
                                transform="translate(2674.773 -3118.253)" fill="none" stroke="#fff" stroke-width="1" />
                        </g>
                    </svg>

                </button>
                <div class="collapse navbar-collapse w-100 fade position-absolute top-0 zIndex-50"
                    id="navbarSupportedContent">
                    <ul
                        class="navbar-nav me-auto mb-2 mb-lg-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                        <li class="layerActiveNav position-absolute w-100 top-0 start-0 position-relative zIndex-10"
                            style="height: 64.5%;">
                        </li>
                        <li
                            class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                            <a class="nav-link p-0 fw-bolder text-uppercase w-100 h-100 d-flex justify-content-center align-items-center active"
                                aria-current="page" href="./index.html">Home</a>
                        </li>
                        <li
                            class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                            <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                                href="./about.html">About</a>
                        </li>
                        <li
                            class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                            <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                                href="./services.html">Services</a>
                        </li>
                        <li
                            class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                            <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                                href="./clients.html">Clients</a>
                        </li>
                        <li
                            class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                            <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                                href="./works.html">Works</a>
                        </li>
                        <li
                            class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                            <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                                href="./contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="./index.html">
                <svg class="position-relative zIndex-60 circlePosition" xmlns="http://www.w3.org/2000/svg"
                    width="27.098" height="27.098" viewBox="0 0 27.098 27.098">
                    <circle class="whiteFillTheme" id="Ellipse_447" data-name="Ellipse 447" cx="13.549s" cy="13.549"
                        r="13.549" fill="#fff" />
                </svg>
            </a>
            <!-- TextContent -->
            <div class="aboutTextContent w-100 mt-5 px-lg-4 px-md-0">
                <div class="container">
                    <div class="d-flex justify-content-between pb-1">
                        <h1 class="fs-50px whiteColorTheme text-uppercase mb-0 d-flex align-items-center">Our Creative
                            projects
                        </h1>
                        <span class="fs-53px text-secondary ft-Gilroy-Thin">05</span>
                    </div>
                    <div class="d-flex sectionTitle-top pt-2">
                        <div class="flex-basis-1-from-3 d-flex gap-2 gap-md-5">
                            <div class="line-height-20px">
                                <p class="whiteColorTheme fs-20px text-uppercase mb-0 ft-Gilroy-bold">MAYADIN</p>
                            </div>
                        </div>
                        <div
                            class="flex-basis-1-from-3 d-md-flex justify-content-between align-items-start px-4 position-relative border-left-line-41px">
                            <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0">Project type</p>
                            <div class="d-flex flex-column text-start">
                                @foreach($categories as $category)
                                <p @if($category->id == $project->category_id) style="color:#fff !important;" @endif
                                    class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0">
                                    {{ $category->name }}
                                </p>
                                @endforeach
                            </div>
                        </div>
                        <div
                            class="flex-basis-1-from-3 d-md-flex justify-content-between align-items-start px-4 position-relative border-left-line-41px">
                            <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0">Featured</p>
                            <div class="d-flex flex-column text-start">
                                <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0" @if($project->featured
                                    == 1) style="color:#fff
                                    !important;" @endif>individual</p>
                                <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0" @if($project->featured
                                    == 2) style="color:#fff
                                    !important;" @endif>GOVERNMENT</p>

                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-5 mb-15">
                        <img class="w-100 h-100" src="{{asset('front/assets/imgs/our-creative-projects-1.webp')}}"
                            alt="our-creative-projects-shots">
                        <img class="w-100 h-100" src="{{asset('front/assets/imgs/our-creative-projects-2.webp')}}"
                            alt="our-creative-projects-shots">
                        <img class="w-100 h-100" src="{{asset('front/assets/imgs/our-creative-projects-3.webp')}}"
                            alt="our-creative-projects-shots">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>