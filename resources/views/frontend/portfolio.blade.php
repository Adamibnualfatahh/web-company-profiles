@extends('layouts.frontend')

@section('title','Portfolio')
    @section('content')
   
        <section id="team" class="team-area pt-120">
         <div class="container">

            <nav class="flex mb-10" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                  <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Home
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <a href="/portfolio" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Portfolio</a>
                  </div>
                </li>
              </ol>
            </nav>


            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-8 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title"><span>Portfolios</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
           
            <div class="justify-center row">
 @forelse ($portfolio as $portfolio)
                <div class="w-full sm:w-2/3 lg:w-1/3 ">
                    <div class="mt-8 text-center single-team wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="relative team-image">
                            <img class="w-full max-h-60 min:h-60" src="/image/{{ $portfolio->image }}" alt="Team">
                            <div class="team-social">
                                <ul>
                                    <h2 class="text-white my-2 mx-2"> {{ date('d-m-Y', strtotime($portfolio->created_at))}}</h2>
                                </ul>
                            </div>
                        </div>
                        <div class="p-8">
                            <h5 class="mb-1 text-xl font-bold text-gray-900">{{ $portfolio->name }}</h5>
                            <p>{{ $portfolio->title }}</p>
                        </div>
                    </div> <!-- single team -->
                </div>
@empty
    <h1>Halaman Masih Kosong</h1>
@endforelse
                

               
    </div> <!-- row -->
    </div> <!-- container -->
    </section>
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
                  @foreach ($home as $home)
                      {{ $home->title }}
                  @endforeach
                
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
                 @foreach ($about as $about)
                     
                
                  <li>{{ $about->phone }}</li>
                  <li>{{ $about->emails }}</li>
              
                  <li>
                    {{ $about->locations }}
                  </li>
                   @endforeach
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
@endsection