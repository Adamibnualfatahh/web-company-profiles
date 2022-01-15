
  @extends('layouts.frontend')

  @section('title','Blogs')
      @section('content')

  <!--====== BLOG PART START ======-->
  <style type="text/css">
      .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
      }
    </style>


      <section id="blog" class="blog-area pt-120">
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
                  <a href="/blog" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Blogs</a>
                </div>
              </li>
            </ol>
          </nav>

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
          <label class="relative block">
            <form action="/blog">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <svg class="h-5 w-5 fill-gray-300" viewBox="0 0 20 20"><!-- ... --></svg>
            </span>
            <div class="grid grid-cols-6 gap-4">
              <input class="col-span-5 placeholder:italic placeholder:text-gray-400 block bg-white border border-gray-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
            <button class="p-1 bg-red-300 hover:bg-red-600 hover:drop-shadow-lg text-gray-100 rounded-lg  border-red-300" type="submit">Cari</button>  </div>
            </form>
          </label>
        
          <div class="justify-center row">
            @forelse ($blog as $blog)
                <div class="w-full md:w-2/3 lg:w-1/3">
              <div
                class="mx-4 mt-10 single-blog wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <div class="mb-5 max-h-60 overflow-hidden blog-image rounded-xl">
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
                  <a class="text-theme-color-2" href="/blog/{{ $blog->title }}">
                    Baca Selengkapnya
                    <i class="ml-2 lni lni-chevron-right"></i>
                  </a>
                </div>
              </div>
              <!-- single blog -->
            </div>
            @empty
                <h2 class="mt-20 text-2xl	font-extrabold	">Oh Tidak Halaman Masih Kosong ...</h2>
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
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
      <!--====== BLOG PART ENDS ======-->
      @endsection