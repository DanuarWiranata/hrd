<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Webpage Title -->
    <title>HRD App</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link href="{{ URL::asset('css/fontawesome-all.css'); }}" rel="stylesheet" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ URL::asset('css/swiper.css'); }}"> /> 
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css'); }}"> />
    <link rel="stylesheet" href="{{ URL::asset('css/homepage.css'); }}"> />
    
    <!-- Navigation -->
    <nav class="navbar fixed-top">
      <div
        class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap"
      >
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a
            class="btn-navbar flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
            href="#"
            >Login</a
          >
        </div>
        <div
          class="navbar-collapse offcanvas-collapse"
          id="navbarsExampleDefault"
        >
          <ul
            class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row"
          >
            <li>
              <a class="nav-link page-scroll active" href="#header"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li>
              <a class="nav-link page-scroll" href="#achievement"
                >Achievement</a
              >
            </li>
            <li>
              <a class="nav-link page-scroll" href="#workshop">Workshop</a>
            </li>
          </ul>
        </div>
        <!-- end of navbar-collapse -->
      </div>
      <!-- e container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header
      id="header"
      class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32"
    >
      <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
          <h1 class="h1-large mb-5">Elevate Workforce Productivity</h1>
          <p class="p-large mb-8">
            Boost your team's productivity with efficient employee data
            management. This platform optimizes HR processes, allowing you to
            elevate your workforce
          </p>
          <a class="btn-solid-lg" href="#">Complete Your Data</a>
          <a class="btn-solid-lg secondary" href="#">Your Achievement</a>
        </div>
        <div class="xl:text-right">
          <img
            class="inline"
            src="images/unsplash_gMsnXqILjp4.svg"
            alt="alternative"
          />
        </div>
      </div>
      <!-- end of container -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

    <!-- Introduction -->
    <div class="pt-4 pb-px text-center">
      <div class="container px-4 sm:px-8 xl:px-4">
        <h2 class="mb-12 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">
          Workshop
        </h2>
      </div>
      <!-- end of container -->
    </div>
    <!-- end of introduction -->

    <!-- Features -->
    <div id="features" class="cards-1">
      <div class="container-card">
        <!-- Card -->
        <div class="card">
          <img src="" alt="" width="600" />
          <div class="card-body">
            <h4>Judul Workshop</h4>
            <p>Description</p>
          </div>

          <div class="card-footer">
            <div class="user">
              <div class="container1">
                <div class="user-info">
                  <h5>Participants</h5>
                  <small></small>
                </div>
                <button class="card-button">Enroll Now</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="" alt="" width="600" />
          <div class="card-body">
            <h4>Judul Workshop</h4>
            <p>Description</p>
          </div>

          <div class="card-footer">
            <div class="user">
              <div class="container1">
                <div class="user-info">
                  <h5>Participants</h5>
                  <small></small>
                </div>
                <button class="card-button">Enroll Now</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <img src="" alt="" width="600" />
          <div class="card-body">
            <h4>Judul Workshop</h4>
            <p>Description</p>
          </div>

          <div class="card-footer">
            <div class="user">
              <div class="container1">
                <div class="user-info">
                  <h5>Participants</h5>
                  <small></small>
                </div>
                <button class="card-button">Enroll Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- end of cards-1 -->
    <!-- end of features -->

    <!-- Introduction -->
    <div class="pt-4 pb-px text-center">
      <div class="container px-4 sm:px-8 xl:px-4">
        <h2 class="mb-12 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">
          Achievement
        </h2>
      </div>
      <!-- end of container -->
    </div>
    <!-- end of introduction -->

    <!-- Testimonials -->
    <div class="slider-1 pb-24">
      <div class="container px-4">
        <p class="mb-12 text-center text-3xl lg:max-w-xl lg:mx-auto">
          Congratulation You've Done Your Workshops!
        </p>

        <!-- Card Slider -->
        <div class="slider-container">
          <div class="swiper-container card-slider">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide">
                <div class="card">
                  <img src="images/unsplash_gMsnXqILjp4.svg" alt="" width="600" />
                  <div class="card-body">
                    <h4>Judul Workshop</h4>
                    <p>Description</p>
                  </div>
                  <div class="card-footer">
                    <div class="user">
                      <div class="container1">
                        <button class="card-button">Claim Sertificate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="card">
                  <img src="images/unsplash_gMsnXqILjp4.svg" alt="" width="600" />
                  <div class="card-body">
                    <h4>Judul Workshop</h4>
                    <p>Description</p>
                  </div>
                  <div class="card-footer">
                    <div class="user">
                      <div class="container1">
                        <button class="card-button">Claim Sertificate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="card">
                  <img src="images/unsplash_gMsnXqILjp4.svg" alt="" width="600" />
                  <div class="card-body">
                    <h4>Judul Workshop</h4>
                    <p>Description</p>
                  </div>
                  <div class="card-footer">
                    <div class="user">
                      <div class="container1">
                        <button class="card-button">Claim Sertificate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="card">
                  <img src="images/unsplash_gMsnXqILjp4.svg" alt="" width="600" />
                  <div class="card-body">
                    <h4>Judul Workshop</h4>
                    <p>Description</p>
                  </div>
                  <div class="card-footer">
                    <div class="user">
                      <div class="container1">
                        <button class="card-button">Claim Sertificate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="card">
                  <img src="images/unsplash_gMsnXqILjp4.svg" alt="" width="600" />
                  <div class="card-body">
                    <h4>Judul Workshop</h4>
                    <p>Description</p>
                  </div>
                  <div class="card-footer">
                    <div class="user">
                      <div class="container1">
                        <button class="card-button">Claim Sertificate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="card">
                  <img src="images/unsplash_gMsnXqILjp4.svg" alt="" width="600" />
                  <div class="card-body">
                    <h4>Judul Workshop</h4>
                    <p>Description</p>
                  </div>
                  <div class="card-footer">
                    <div class="user">
                      <div class="container1">
                        <button class="card-button">Claim Sertificate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->
            </div>
            <!-- end of swiper-wrapper -->

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- end of add arrows -->
          </div>
          <!-- end of swiper-container -->
        </div>
        <!-- end of slider-container -->
        <!-- end of card slider -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of testimonials -->

    <!-- Footer -->
    <div class="footer">
      <div class="container px-4 sm:px-8">
        <div class="social-container">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-pinterest-p fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-youtube fa-stack-1x"></i>
            </a>
          </span>
        </div>
        <!-- end of social-container -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->

    <!-- Scripts -->
    <script src="{{ URL::asset('js/jquery.min.js'); }}"></script>
    <!-- jQuery for JavaScript plugins -->
    <script src="{{ URL::asset('js/jquery.easing.min.js'); }}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ URL::asset('js/swiper.min.js'); }}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.js'); }}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="{{ URL::asset('js/scripts.js'); }}"></script>
    <!-- Custom scripts -->
  </body>
</html>
