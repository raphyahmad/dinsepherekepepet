@php
$site_name = get_setting_value('_site_name');
$jumbotron = get_section_data('JUMBOTRON');
$location = get_setting_value('_location');
$description = get_setting_value('_site_description');
$youtube = get_setting_value('_youtube');
$instagram = get_setting_value('_instagram'); 
$linkedin = get_setting_value('_linkedin');
$about = get_section_data('ABOUT');
$food = get_foods();
$drink = get_drinks();
$dessert = get_desserts();

@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $site_name }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{ $site_name }}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Partner</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ Storage::url($jumbotron->thumbnail) }}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{ $jumbotron->title }}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{!! strip_tags($jumbotron->content) !!}</p>
      </div>
    </header>
    <!-- Foods Section-->
    <section class="page-section portfolio" id="partner">
      <div class="container">
        <!-- Foods Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" data-aos="fade-down">Foods</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Foods Grid Items-->
        <div class="row justify-content-center">
          @php
          $i = 1;
          @endphp
          @foreach ($food as $item)
          <!-- Foods Item {{ $i }}-->
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $i }}">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid food-image" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
            </div>
          </div>
          <!-- last Foods {{ $i }} -->
           @php
          $i++;
           @endphp
          @endforeach
        </div>
      </div>
    </section>
    <!-- Beverage Section-->
    <section class="page-section portfolio" id="partner">
      <div class="container">
        <!-- Beverage Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" data-aos="fade-down">Beverage</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Beverage Grid Items-->
        <div class="row justify-content-center">
          @php
          $i = 1;
          @endphp
          @foreach ($drink as $item)
          <!-- Beverage Item {{ $i }}-->
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $i }}">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
            </div>
          </div>
          <!-- last Beverage {{ $i }} -->
           @php
          $i++;
           @endphp
          @endforeach
        </div>
      </div>
    </section>
    <!-- Dessert Section-->
    <section class="page-section portfolio" id="partner">
      <div class="container">
        <!-- Dessert Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" data-aos="fade-down">Dessert</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Dessert Grid Items-->
        <div class="row justify-content-center">
          @php
          $i = 1;
          @endphp
          @foreach ($dessert as $item)
          <!-- Dessert Item {{ $i }}-->
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $i }}">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
            </div>
          </div>
          <!-- last Dessert {{ $i }} -->
           @php
          $i++;
           @endphp
          @endforeach
        </div>
      </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-3 ms-auto text-center" data-aos="fade-right"><img src="{{ Storage::url($about->thumbnail) }}" class="w-75" /></div>
          <div class="col-lg-5 me-auto lead" data-aos="fade-left">
            {!!   strip_tags($about->content) !!}
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
              {{ $location }}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            @if ($youtube)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $youtube }}" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
            
            @endif
            @if ($instagram)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $instagram }}" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>
            @endif
            @if ($linkedin)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $linkedin }}" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
            @endif
            
          </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About us</h4>
            <p class="lead mb-0">
              {!! strip_tags($description) !!}</a>
              .
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; {{ $site_name }} 2025</small></div>
    </div>
    <!-- Partner Modals-->
     @php
     $i = 1;
     @endphp
      @foreach ($food as $item)
      
      <!-- Partner Modal {{ $i }}-->
      <div class="portfolio-modal modal fade" id="portfolioModal{{ $i }}" tabindex="-1" aria-labelledby="portfolioModal{{ $i }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <!-- Partner Modal - Title-->
                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $item -> title }}</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                      <div class="divider-custom-line"></div>
                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                      <div class="divider-custom-line"></div>
                    </div>
                    <!-- Partner Modal - Image-->
                    <img class="img-fluid rounded mb-5" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
                    <!-- Partner Modal - Text-->
                    {!! $item -> content !!}
                    <button class="btn btn-primary" data-bs-dismiss="modal">
                      <i class="fas fa-xmark fa-fw"></i>
                      Close Window
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @php
      $i++;
      @endphp

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
  </body>
</html>
