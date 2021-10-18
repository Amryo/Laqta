   <!-- Modal -->
   <div class="modal fade" id="aboutUsVideo" tabindex="-1" aria-labelledby="aboutUsVideoLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content border-0 bg-transparent">
               <div class="modal-body m-0 p-0 position-relative">
                   <button type="button" class="bg-transparent border-0 position-absolute"
                       style="right: 55px;top: 12px;padding: 0;z-index: 90;" data-bs-dismiss="modal" aria-label="Close">
                       <svg xmlns="http://www.w3.org/2000/svg" width="32.721" height="32.721"
                           viewBox="0 0 32.721 32.721">
                           <g id="Group_1360" data-name="Group 1360" transform="translate(0.5 0.5)">
                               <g id="Group_1358" data-name="Group 1358">
                                   <circle id="Ellipse_377" data-name="Ellipse 377" cx="15.86" cy="15.86" r="15.86"
                                       fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1" />
                               </g>
                               <g id="Group_1359" data-name="Group 1359" transform="translate(8.384 15.86) rotate(-45)">
                                   <line id="Line_152" data-name="Line 152" y2="10.574" transform="translate(5.287)"
                                       fill="none" stroke="#fff" stroke-width="2" />
                                   <line id="Line_153" data-name="Line 153" x1="10.574" transform="translate(0 5.287)"
                                       fill="none" stroke="#fff" stroke-width="2" />
                               </g>
                           </g>
                       </svg>
                   </button>

                   <x-home-front-video2 />
               </div>
           </div>
       </div>
   </div>

   <!-- Header -->
   <header class="mainHeader position-relative">

       

       <!-- contentLayer -->
       <x-home-front />

   </header>

   <!-- Content -->
   <section id="secondSetion" class="contentLayer ourContent pb-3 darkTheme">
       <x-home-card />
       
       <x-home-main1 />
       <div class="all-our-creative-projects aboutSection pt-0 contactSection position-relative darkTheme mb-5"
           data-aos="fade-up">
           <div class="m-auto contactSectionInner">
               <h4 class="fs-50px text-secondary text-uppercase mb-3">Our Creative projects</h4>
               <div class="d-flex sectionTitle-top pt-2">
                   <div class="flex-basis-1-from-3 d-flex gap-2 gap-md-5">
                       <div class="line-height-20px">
                           <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0">Filter by</p>
                       </div>
                   </div>
                   <div
                       class="flex-basis-1-from-3 d-md-flex justify-content-between align-items-start ps-4 position-relative border-left-line-41px">
                       <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0">Project type</p>
                       <div class="d-flex flex-column" data-filter-group>
                           <button type="button"
                               class="btn shadow-none text-decoration-none p-0 m-0 text-start text-secondary-sm-subtitle fs-15px text-uppercase buttonsTabs"
                               data-filter=".branding">BRANDING</button>
                           <button type="button"
                               class="btn shadow-none text-decoration-none p-0 m-0 text-start text-secondary-sm-subtitle fs-15px text-uppercase buttonsTabs"
                               data-filter=".uxui">UI&amp;UX</button>
                           <button type="button"
                               class="btn shadow-none text-decoration-none p-0 m-0 text-start text-secondary-sm-subtitle fs-15px text-uppercase buttonsTabs"
                               data-filter=".campaigns">Campaigns</button>
                       </div>
                   </div>
                   <div
                       class="flex-basis-1-from-3 d-md-flex justify-content-between align-items-start ps-4 position-relative border-left-line-41px">
                       <p class="text-secondary-sm-subtitle fs-15px text-uppercase mb-0">Featured</p>
                       <div class="d-flex flex-column" data-filter-group>
                           <button type="button"
                               class="btn shadow-none text-decoration-none p-0 m-0 text-start text-secondary-sm-subtitle fs-15px text-uppercase buttonsTabs"
                               data-filter=".government">GOVERNMENT</button>
                           <button type="button"
                               class="btn shadow-none text-decoration-none p-0 m-0 text-start text-secondary-sm-subtitle fs-15px text-uppercase buttonsTabs"
                               data-filter=".individual">individual</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   {{-- <section class="containerMixItUpProjects pb-5 contentLayerNoRight darkTheme pb-15">
    <div class="contactSectionInner90 ms-auto position-relative" data-aos="fade-up">
        <div class="containerMixItUp row mx-0">
            <div class="tab-content col-12 col-lg-6 px-lg-0 mb-15-under-md" id="nav-tabContent">
                <div class="tab-pane fade active show h-100 me-5 position-relative" id="nav-project-1"
                    role="tabpanel" aria-labelledby="nav-project-1-tab">
                    <p class="mb-0 text-secondary-sm-title fs-20px ft-Gilroy-bold text-uppercase">CALIBAR</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class=" mb-0 fs-15px text-secondary-sm-title text-uppercase">
                            <span class="ft-Gilroy-bold">PROJECT</span> number
                        </p>
                        <p class=" mb-0 fs-15px text-secondary-sm-title ft-Gilroy-bold">01</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class=" mb-0 fs-15px text-secondary-sm-title text-uppercase">YEAR</p>
                        <p class=" mb-0 fs-15px text-secondary-sm-title ft-Gilroy-bold">2021</p>
                    </div>
                    <p class="mb-0 text-secondary-sm-title fs-20px sectionTitle-top pt-4"><span
                            class="ft-Gilroy-bold">PROJECT</span> DESCRIPTION</p>
                    <div class="fs-15px ft-Milliard-Medium text-secondary text-uppercase mt-4 line-height-30px">
                        LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD
                        TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS
                        NOSTRUD EXERCI
                    </div>
                    <div class="position-absolute start-0 w-100 sectionTitle-top pt-4" style="bottom: -80px;">
                        <a href="./project-review.html"
                            class="btn btn-link hoverBtnContainArrow shadow-none text-decoration-none position-relative">
                            <span
                                class="fs-15px pe-4 text-uppercase text-decoration-underline text-decoration-underline-white text-underline-offset-10px text-decoration-thickness-1px whiteColorTheme">Full
                                projects</span>
                            <svg class="translateArrow position-absolute d-none d-md-block"
                                xmlns="http://www.w3.org/2000/svg" width="42.213" height="12.832"
                                viewBox="0 0 42.213 12.832">
                                <g id="Group_1532" data-name="Group 1532" transform="translate(19333.83 -5950.084)">
                                    <g id="Group_1517" data-name="Group 1517"
                                        transform="translate(-18314.504 5899.745) rotate(180)">
                                        <path id="Path_4427" class="whiteStrokeTheme" data-name="Path 4427"
                                            d="M965.24-70.61l-6.062-6.063,6.063-6.063"
                                            transform="translate(18.642 19.918)" fill="none" stroke="#fff"
                                            stroke-miterlimit="10" stroke-width="2"></path>
                                    </g>
                                    <line id="Line_241" class="whiteStrokeTheme" data-name="Line 241" x1="41.324"
                                        y1="0.454" transform="translate(-19333.824 5956.046)" fill="none"
                                        stroke="#fff" stroke-width="2"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade h-100 me-5 position-relative" id="nav-project-2" role="tabpanel"
                    aria-labelledby="nav-project-2-tab">
                    <p class="mb-0 text-secondary-sm-title fs-20px ft-Gilroy-bold text-uppercase">laviar PROJECT</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class=" mb-0 fs-15px text-secondary-sm-title text-uppercase">
                            <span class="ft-Gilroy-bold">PROJECT</span> number
                        </p>
                        <p class=" mb-0 fs-15px text-secondary-sm-title ft-Gilroy-bold">02</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class=" mb-0 fs-15px text-secondary-sm-title text-uppercase">YEAR</p>
                        <p class=" mb-0 fs-15px text-secondary-sm-title ft-Gilroy-bold">2020</p>
                    </div>
                    <p class="mb-0 text-secondary-sm-title fs-20px sectionTitle-top pt-4"><span
                            class="ft-Gilroy-bold">PROJECT</span> DESCRIPTION</p>
                    <div class="fs-15px ft-Milliard-Medium text-secondary text-uppercase mt-4 line-height-30px">
                        LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD
                        TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS
                        NOSTRUD EXERCI
                    </div>
                    <div class="position-absolute start-0 w-100 sectionTitle-top pt-4" style="bottom: -80px;">
                        <a href="./project-review.html"
                            class="btn btn-link hoverBtnContainArrow shadow-none text-decoration-none position-relative">
                            <span
                                class="fs-15px pe-4 text-uppercase text-decoration-underline text-decoration-underline-white text-underline-offset-10px text-decoration-thickness-1px whiteColorTheme">Full
                                projects</span>
                            <svg class="translateArrow position-absolute d-none d-md-block"
                                xmlns="http://www.w3.org/2000/svg" width="42.213" height="12.832"
                                viewBox="0 0 42.213 12.832">
                                <g id="Group_1532" data-name="Group 1532" transform="translate(19333.83 -5950.084)">
                                    <g id="Group_1517" data-name="Group 1517"
                                        transform="translate(-18314.504 5899.745) rotate(180)">
                                        <path id="Path_4427" class="whiteStrokeTheme" data-name="Path 4427"
                                            d="M965.24-70.61l-6.062-6.063,6.063-6.063"
                                            transform="translate(18.642 19.918)" fill="none" stroke="#fff"
                                            stroke-miterlimit="10" stroke-width="2"></path>
                                    </g>
                                    <line id="Line_241" class="whiteStrokeTheme" data-name="Line 241" x1="41.324"
                                        y1="0.454" transform="translate(-19333.824 5956.046)" fill="none"
                                        stroke="#fff" stroke-width="2"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade h-100 me-5 position-relative" id="nav-project-3" role="tabpanel"
                    aria-labelledby="nav-project-3-tab">
                    <p class="mb-0 text-secondary-sm-title fs-20px ft-Gilroy-bold text-uppercase">MAYADIN PROJECT
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class=" mb-0 fs-15px text-secondary-sm-title text-uppercase">
                            <span class="ft-Gilroy-bold">PROJECT</span> number
                        </p>
                        <p class=" mb-0 fs-15px text-secondary-sm-title ft-Gilroy-bold">03</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class=" mb-0 fs-15px text-secondary-sm-title text-uppercase">YEAR</p>
                        <p class=" mb-0 fs-15px text-secondary-sm-title ft-Gilroy-bold">2019</p>
                    </div>
                    <p class="mb-0 text-secondary-sm-title fs-20px sectionTitle-top pt-4"><span
                            class="ft-Gilroy-bold">PROJECT</span> DESCRIPTION</p>
                    <div class="fs-15px ft-Milliard-Medium text-secondary text-uppercase mt-4 line-height-30px">
                        LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD
                        TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS
                        NOSTRUD EXERCI
                    </div>
                    <div class="position-absolute start-0 w-100 sectionTitle-top pt-4" style="bottom: -80px;">
                        <a href="./project-review.html"
                            class="btn btn-link hoverBtnContainArrow shadow-none text-decoration-none position-relative">
                            <span
                                class="fs-15px pe-4 text-uppercase text-decoration-underline text-decoration-underline-white text-underline-offset-10px text-decoration-thickness-1px whiteColorTheme">Full
                                projects</span>
                            <svg class="translateArrow position-absolute d-none d-md-block"
                                xmlns="http://www.w3.org/2000/svg" width="42.213" height="12.832"
                                viewBox="0 0 42.213 12.832">
                                <g id="Group_1532" data-name="Group 1532" transform="translate(19333.83 -5950.084)">
                                    <g id="Group_1517" data-name="Group 1517"
                                        transform="translate(-18314.504 5899.745) rotate(180)">
                                        <path id="Path_4427" class="whiteStrokeTheme" data-name="Path 4427"
                                            d="M965.24-70.61l-6.062-6.063,6.063-6.063"
                                            transform="translate(18.642 19.918)" fill="none" stroke="#fff"
                                            stroke-miterlimit="10" stroke-width="2"></path>
                                    </g>
                                    <line id="Line_241" class="whiteStrokeTheme" data-name="Line 241" x1="41.324"
                                        y1="0.454" transform="translate(-19333.824 5956.046)" fill="none"
                                        stroke="#fff" stroke-width="2"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-0 nav nav-tabs border-0 fsbanner position-relative overflow-hidden"
                id="nav-tab" role="tablist">
                <!-- Start component  -->
                <div class="border-0 rounded-0 mix branding government position-absolute fsbanner-item active"
                    id="nav-project-1-tab" data-bs-toggle="tab" data-bs-target="#nav-project-1" role="tab"
                    aria-controls="nav-project-1" aria-selected="true">
                    <div class="position-relative w-100 h-100">
                        <img class="w-100 h-100 position-relative zIndex-10"
                            src="./assets/imgs/creative-project-hom-page-1.webp" alt="creative-project-hom-page">
                        <div class="position-absolute w-100 h-100 start-0 top-0 aboutSectionItemGradient zIndex-20">
                        </div>
                        <div class="containerMixItUpProjects-content position-absolute zIndex-30 name">
                            <p class="mb-0 text-white fs-28px ft-Gilroy-ExtraBold text-uppercase detailsForProject">
                                CALIBAR</p>
                            <p class="mb-0 text-white text-uppercase fs-15px detailsForProject">This means that
                                something</p>
                        </div>
                        <div
                            class="position-absolute zIndex-30 fs-15px text-white containerMixItUpProjects-content2">
                            01/100+
                        </div>
                        <div class="containerMixItUpProjects-content3 position-absolute zIndex-30">
                            <div
                                class="containerMixItUpProjects-content3Inner d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="fs-15px text-white text-secondary-sm-title text-end mb-0 ms-4">01</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div id="scroll-animation-wrapper4" class="scroll-animation-wrapper m-0 p-0">
                                        <div class="lineBetween elementHeightTopToBottom"></div>
                                    </div>
                                </div>
                                <p
                                    class="fs-15px text-white text-secondary-sm-title text-uppercase mb-0 rotateText">
                                    CALIBAR PROJECT</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End component  -->

                <div class="border-0 rounded-0 mix branding government position-absolute fsbanner-item"
                    id="nav-project-2-tab" data-bs-toggle="tab" data-bs-target="#nav-project-2" role="tab"
                    aria-controls="nav-project-2" aria-selected="false">
                    <div class="position-relative w-100 h-100">
                        <img class="w-100 h-100 position-relative zIndex-10"
                            src="./assets/imgs/creative-project-hom-page-2.webp" alt="creative-project-hom-page">
                        <div class="position-absolute w-100 h-100 start-0 top-0 aboutSectionItemGradient zIndex-20">
                        </div>
                        <div class="containerMixItUpProjects-content position-absolute zIndex-30 name">
                            <p class="mb-0 text-white fs-28px ft-Gilroy-ExtraBold text-uppercase detailsForProject">
                                laviar PROJECT</p>
                            <p class="mb-0 text-white text-uppercase fs-15px detailsForProject">This means that
                                something</p>
                        </div>
                        <div
                            class="position-absolute zIndex-30 fs-15px text-white containerMixItUpProjects-content2">
                            02/100+
                        </div>
                        <div class="containerMixItUpProjects-content3 position-absolute zIndex-30">
                            <div
                                class="containerMixItUpProjects-content3Inner d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="fs-15px text-white text-secondary-sm-title text-end mb-0 ms-4">02</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div id="scroll-animation-wrapper5" class="scroll-animation-wrapper m-0 p-0">
                                        <div class="lineBetween elementHeightTopToBottom"></div>
                                    </div>
                                </div>
                                <p
                                    class="fs-15px text-white text-secondary-sm-title text-uppercase mb-0 rotateText">
                                    laviar PROJECT</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-0 rounded-0 mix branding government position-absolute fsbanner-item"
                    id="nav-project-3-tab" data-bs-toggle="tab" data-bs-target="#nav-project-3" role="tab"
                    aria-controls="nav-project-3" aria-selected="false">
                    <div class="position-relative w-100 h-100">
                        <img class="w-100 h-100 position-relative zIndex-10"
                            src="./assets/imgs/creative-project-hom-page-3.webp" alt="creative-project-hom-page">
                        <div class="position-absolute w-100 h-100 start-0 top-0 aboutSectionItemGradient zIndex-20">
                        </div>
                        <div class="containerMixItUpProjects-content position-absolute zIndex-30 name">
                            <p class="mb-0 text-white fs-28px ft-Gilroy-ExtraBold text-uppercase detailsForProject">
                                MAYADIN PROJECT</p>
                            <p class="mb-0 text-white text-uppercase fs-15px detailsForProject">This means that
                                something</p>
                        </div>
                        <div
                            class="position-absolute zIndex-30 fs-15px text-white containerMixItUpProjects-content2">
                            03/100+
                        </div>
                        <div class="containerMixItUpProjects-content3 position-absolute zIndex-30">
                            <div
                                class="containerMixItUpProjects-content3Inner d-flex flex-column justify-content-center align-items-center h-100">
                                <p class="fs-15px text-white text-secondary-sm-title text-end mb-0 ms-4">03</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div id="scroll-animation-wrapper6" class="scroll-animation-wrapper m-0 p-0">
                                        <div class="lineBetween elementHeightTopToBottom"></div>
                                    </div>
                                </div>
                                <p
                                    class="fs-15px text-white text-secondary-sm-title text-uppercase mb-0 rotateText">
                                    MAYADIN PROJECT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}