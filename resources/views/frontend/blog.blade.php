
@extends('layouts.frontend')

@section('title','Blogs')
    @section('content')

<!--====== BLOG PART START ======-->

    <section id="blog" class="blog-area pt-120">
      <div class="container">
        <div class="row">
          <div class="w-full lg:w-1/2">
            <div class="pb-8 section-title">
              <div class="line"></div>
              <h3 class="title"><span>Our Recent</span> Blog Posts</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">

          @forelse ($blog as $blog)
              <div class="w-full md:w-2/3 lg:w-1/3">
            <div
              class="mx-4 mt-10 single-blog wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.2s"
            >
              <div class="mb-5 overflow-hidden blog-image rounded-xl">
                <img class="w-full" src="/image/{{ $blog->image }}" alt="blog" />
              </div>
              <div class="blog-content">
                <ul class="flex mb-5 meta">
                  <li>Author: <a href="javascript:void(0)">{{ $blog->author }}</a></li>
                  <li class="ml-12">{{ date('d-m-Y', strtotime($blog->created_at)); }}</li>
                </ul>
                <p class="mb-6 text-2xl leading-snug text-gray-900">
                  {{ $blog->title }}
                </p>
                <a class="text-theme-color-2" href="/blog/{{ $blog->slug }}">
                  Baca Selengkapnya
                  <i class="ml-2 lni lni-chevron-right"></i>
                </a>
              </div>
            </div>
            <!-- single blog -->
          </div>
          @empty
              <h2>Halaman Masih Kosong</h2>
          @endforelse
          
         
          
        </div>
        <!-- row -->
      </div>
      <!-- container -->
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
    <!--====== BLOG PART ENDS ======-->
    @endsection