@extends('layouts.frontend')

@section('title','Home')
    @section('content')
    @foreach ($home as $home)
        

      <div
        id="home"
        class="header-hero"
        style="background-image: url(images/banner-bg.svg)"
      >
        <div class="container">
          <div class="justify-center row">
            <div class="w-full lg:w-2/3">
              <div class="pt-32 mb-12 text-center lg:pt-48 header-hero-content">
                <h2
                  class="
                    mb-3
                    text-4xl
                    font-bold
                    text-white
                    header-title
                    wow
                    fadeInUp
                  "
                  data-wow-duration="1.3s"
                  data-wow-delay="0.5s"
                >
                 {{ $home->title }}
                </h2>
                <p
                  class="mb-8 text-white text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >
                  {{ $home->text }}
                </p>
                <a
                  href="#features"
                  class="page-scroll main-btn gradient-btn gradient-btn-2 wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                  >Get Started</a
                >
              </div>
              <!-- header hero content -->
            </div>
          </div>
          <!-- row -->
          <div class="justify-center row">
            <div class="w-full lg:w-2/3">
              <div
                class="text-center header-hero-image wow fadeIn"
                data-wow-duration="1.3s"
                data-wow-delay="1.4s"
              >
                <img src="/image/{{ $home->image }}" alt="Hero Image" />
              </div>
              <!-- header hero image -->
            </div>
          </div>
          <!-- row -->
        </div>
         @endforeach
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>
  
    
    <div class="pt-24 brand-area">
      <div class="container">
        <div class="row">
          <div class="w-full">
            <div class="items-center justify-center row lg:justify-between">
          @foreach ($customer as $customer)
        
              <div
                class="single-logo hover:opacity-100 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <img src="/image/{{ $customer->image }}" alt="brand" />
              </div>
              <!-- single logo -->
      @endforeach        
            <!-- brand logo -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>

    <!--====== BRAMD PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Clean and simple design, <span> Comes with everything you need to get started!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row ">
                
              @foreach ($card as $card)
                  
              

                <div class="w-full sm:w-2/3 lg:w-1/3 ">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="/image/{{ $card->image }}" alt="shape">
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">{{ $card->text }}</h4>
                            <p class="mb-8">{{ $card->title }}</p>
                        </div>
                    </div> <!-- single services -->
                </div>

              @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

   

    <section id="about" class="relative pt-20 about-area">
      <div class="container">
        <div class="row">
          <div class="w-full lg:w-1/2">
            @foreach ($about as $about)
             
            <div
              class="mx-4 mt-12 about-content wow fadeInLeftBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="mb-4 section-title">
                <div class="line"></div>
                <h3 class="title">
                 {{ $about->text }}
                </h3>
              </div>
              <!-- section title -->
              <p class="mb-8">
                {{ $about->title }}
              </p>
            </div>
            <!-- about content -->
          </div>
          
          <div class="w-full lg:w-1/2">
            <div
              class="mx-4 mt-12 text-center about-image wow fadeInRightBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img src="/image/{{ $about->image  }}" alt="about" />
            </div>
            <!-- about image -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
      
    </section>
    @endforeach

  <footer id="footer" class="relative z-10 footer-area pt-120">
      <div
        class="footer-bg"
        style="background-image: url({{ url('images/footer-bg.svg') }})"
      ></div>
      <div class="container">
        <div
          class="
            px-6
            pt-10
            pb-20
            mb-12
            bg-white
            rounded-lg
            shadow-xl
            md:px-12
            subscribe-area
            wow
            fadeIn
          "
          data-wow-duration="1s"
          data-wow-delay="0.5s"
        >
          <div class="row text-right">
            <div class="w-full lg:w-1/2 text-center">
              <div class="lg:mt-12 subscribe-content">
                <h1 class="text-2xl font-bold sm:text-4xl subscribe-title">
   
                     {{ $home->title }}
         
                 
                  <span class="block font-normal"></span>
                </h1>
              </div>
            </div>
            <div class="w-full lg:w-1/2">
              <div class="mt-12 subscribe-form">

              </div>
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- subscribe area -->
        <div class="footer-widget pb-120">
          <div class="row">
            
            <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
              <div class="row">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                  <div
                    class="mt-12 link-wrapper wow fadeIn"
                    data-wow-duration="1s"
                    data-wow-delay="0.6s"
                  >
                    <div class="footer-title">
                      <h4 class="mb-8 text-2xl font-bold text-white">
                        Resources
                      </h4>
                    </div>
                    <ul class="link">
                     
                      <li><a href="/">Home</a></li>
                      <li><a href="gallery">Gallery</a></li>
                      <li><a href="blog">Blog</a></li>
                      <li><a href="portfolio">Portfolio</a></li>
                      <li><a href="contact">Contact</a></li>
                      <li><a href="profile">Profile</a></li>
                    </ul>
                  </div>
                  <!-- footer wrapper -->
                </div>
              </div>
            </div>
            <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
              <div
                class="mt-12 footer-contact wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Contact Us</h4>
                </div>
                <ul class="contact">
                 

                            <li>{{ $about->phone }}</li>
                  <li>{{ $about->emails }}</li>
              
                  <li>
                    {{ $about->locations }}
                  </li>

                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer widget -->
        
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2" class="particles"></div>
    </footer>
  <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <!--====== ABOUT PART ENDS ======-->
   
@endsection