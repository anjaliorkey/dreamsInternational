@extends('layouts.app')

@section('content')
 <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      @include('include.navbar')
      @include('include.header')

      
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-8">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto">
              <h2>What will you get if you'll join us</h2>
              <p class="mb-4">Get the best web hosting service at the price you can afford</p>
            </div>
          </div>
          <div class="row align-items-center mt-5">
            <div class="col-md-5 col-lg-6 order-md-1 order-0"><img class="w-100" src="public/assets/img/gallery/join-us.png" alt="" /></div>
            <div class="col-md-7 col-lg-6 pe-lg-4 pe-xl-7">
              <div class="d-flex align-items-start"><img class="me-4" src="public/assets/img/icons/give-a-care.png" alt="" width="30" />
                <div class="flex-1">
                  <h5>WE GIVE A CARE </h5>
                  <p class="text-muted mb-4">Beside the support we provide you with various tools to be able to host and manage your websites</p>
                </div>
              </div>
              <div class="d-flex align-items-start"><img class="me-4" src="public/assets/img/icons/tweak-as-you.png" alt="" width="30" />
                <div class="flex-1">
                  <h5>TWEAK AS YOU WISH</h5>
                  <p class="text-muted mb-4">Be able to customize your plan over time if needed so you pay only for what you use</p>
                </div>
              </div>
              <div class="d-flex align-items-start"><img class="me-4" src="public/assets/img/icons/security.png" width="30" alt="..." />
                <div class="flex-1">
                  <h5>SECURITY AT ITS BEST</h5>
                  <p>We are the most reliable service provider, ready to give you a helping hand the fastest way possible 24/7</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-8 bg-soft-primary">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
              <h2>Don't know where to start from?</h2>
              <p class="mb-5">We've got the best articles,tools and resources to help you to start</p>
            </div>
          </div>
          <div class="row h-100">
            <div class="col-md-6 mb-5 mb-md-0 h-100">
              <div class="card card-span bg-primary h-100">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between"><img class="mb-3" src="public/assets/img/icons/rocket.png" height="80" alt="..." /><img src="public/assets/img/icons/clouds-1.png" height="90" alt="..." /></div>
                  <h5 class="text-light">PLANING TO BUILD A WEBSITE</h5>
                  <p class="text-light lh-lg">You want to build a new website but not sure what to start with? We've prepared a step by step guide for you to handle the whole process from design to launch </p>
                  <div class="text-end"><a class="btn btn-light" href="#" role="button">LEARN MORE
                      <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 h-100">
              <div class="card bg-secondary card-span h-100">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between"><img class="mb-3" src="public/assets/img/icons/servion.png" height="80" alt="..." /><img src="public/assets/img/icons/logos.png" height="90" alt="..." /></div>
                  <h5 class="text-light">WANT TO MOVE A WEBSITE TO SERVION</h5>
                  <p class="text-light lh-lg">Already have an existing website and want to move it to Servion but not sure how to do it? No worries, it's not difficult, we can handle all the work for you. </p>
                  <div class="text-end"><a class="btn btn-light" href="#" role="button">LEARN MORE
                      <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6" id="pricingTable">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
              <h2>Types of hosting that we provide</h2>
              <p class="mb-5">Our service is always affordable for everyone. </p>
            </div>
          </div>
          <div class="row h-100">
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><img src="public/assets/img/icons/shared-hosting.png" alt="..." />
                    <h5 class="my-3">SHARED HOSTING</h5>
                    <ul class="list-unstyled">
                      <li>Increase the rank of you</li>
                      <li>website by the higher speed</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">15.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><img src="public/assets/img/icons/vpn-hosting.png" alt="..." />
                    <h5 class="my-3">VPS HOSTING</h5>
                    <ul class="list-unstyled">
                      <li>Be able to conceal your ID </li>
                      <li>whenever needed</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">8.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><img src="public/assets/img/icons/cloud-hosting.png" alt="..." />
                    <h5 class="my-3">CLOUD HOSTING</h5>
                    <ul class="list-unstyled">
                      <li>Super convenient and highly </li>
                      <li>customizable option</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">7.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><img src="public/assets/img/icons/wp-hosting.png" alt="..." />
                    <h5 class="my-3">WORDPRESS HOSTING</h5>
                    <ul class="list-unstyled">
                      <li>With low cost and high variety</li>
                      <li>of tools, plugins of your choice</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">13.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8" id="team">
        <div class="bg-holder" style="background-image:url(public/assets/img/gallery/testimonial-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
              <h2>Valued customers with valuable feedback</h2>
              <p class="mb-5">Feedbacks from our happy users. Become one of them. </p>
            </div>
          </div>
          <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100">
                  <div class="col-lg-6 mb-3 mb-md-0">
                    <div class="card card-span h-100 bg-transparent">
                      <div class="card-body my-2">
                        <div class="d-sm-flex"><img class="img-fluid me-3 me-md-2 me-lg-3" src="public/assets/img/gallery/mark.png" height="100" alt="..." />
                          <div class="flex-1 ps-2">
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p class="my-3">&quot;I've been using servion for more than a year and I must say I've never had such reliable service provider to work with. They've helped me out a lot&quot;</p>
                            <h6 class="mb-0 fs--1">-Erich Marks</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-3 mb-md-0">
                    <div class="card card-span h-100 bg-transparent">
                      <div class="card-body my-2">
                        <div class="d-sm-flex"><img class="img-fluid me-3 me-md-2 me-lg-3" src="public/assets/img/gallery/emily.png" height="100" alt="..." />
                          <div class="flex-1 ps-2">
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p class="my-3">&quot;I ve been using Servion for hosting many of my wordpress websites and I truly appreciate how affordable it is&quot;</p>
                            <h6 class="mb-0 fs--1">-Emily Hartman</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row h-100">
                  <div class="col-lg-6 mb-3 mb-md-0">
                    <div class="card card-span h-100 bg-transparent">
                      <div class="card-body my-2">
                        <div class="d-sm-flex"><img class="img-fluid me-3 me-md-2 me-lg-3" src="public/assets/img/gallery/mark.png" height="100" alt="..." />
                          <div class="flex-1 ps-2">
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p class="my-3">&quot;I've been using servion for more than a year and I must say I've never had such reliable service provider to work with. They've helped me out a lot&quot;</p>
                            <h6 class="mb-0 fs--1">-Erich Marks</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-3 mb-md-0">
                    <div class="card card-span h-100 bg-transparent">
                      <div class="card-body my-2">
                        <div class="d-sm-flex"><img class="img-fluid me-3 me-md-2 me-lg-3" src="public/assets/img/gallery/emily.png" height="100" alt="..." />
                          <div class="flex-1 ps-2">
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p class="my-3">&quot;I ve been using Servion for hosting many of my wordpress websites and I truly appreciate how affordable it is&quot;</p>
                            <h6 class="mb-0 fs--1">-Emily Hartman</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-lg-6 mb-3 mb-md-0">
                    <div class="card card-span h-100 bg-transparent">
                      <div class="card-body my-2">
                        <div class="d-sm-flex"><img class="img-fluid me-3 me-md-2 me-lg-3" src="public/assets/img/gallery/mark.png" height="100" alt="..." />
                          <div class="flex-1 ps-2">
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p class="my-3">&quot;I've been using servion for more than a year and I must say I've never had such reliable service provider to work with. They've helped me out a lot&quot;</p>
                            <h6 class="mb-0 fs--1">-Erich Marks</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-3 mb-md-0">
                    <div class="card card-span h-100 bg-transparent">
                      <div class="card-body my-2">
                        <div class="d-sm-flex"><img class="img-fluid me-3 me-md-2 me-lg-3" src="public/assets/img/gallery/emily.png" height="100" alt="..." />
                          <div class="flex-1 ps-2">
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p class="my-3">&quot;I ve been using Servion for hosting many of my wordpress websites and I truly appreciate how affordable it is&quot;</p>
                            <h6 class="mb-0 fs--1">-Emily Hartman</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
            <div class="row px-3 px-md-0 mt-4">
              <div class="col-12 position-relative">
                <ol class="carousel-indicators">
                  <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-lg-0 pt-md-8 py-0">

        <div class="container">
          <div class="row align-items-center justify-content-xl-between py-5 border-klean">
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="public/assets/img/gallery/robinhood.png" height="40" alt="..." /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="public/assets/img/gallery/reddit.png" height="40" alt="..." /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="public/assets/img/gallery/upcase.png" height="40" alt="..." /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="public/assets/img/gallery/hubspot.png" height="40" alt="..." /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="public/assets/img/gallery/tunein.png" height="40" alt="..." /></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      @include('include.footer')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

 
  </body>


@endsection
