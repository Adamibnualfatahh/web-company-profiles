

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
  <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
 <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}" />

    <!--====== Style CSS ======-->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">

  <title>Blog - {{ $blog->title }}</title>
  </head>
  <body>
  
    <!--====== HEADER PART ENDS ======-->

    <!--====== Blog start======-->
    <section id="blog" class="blog-area pt-10">
      
      <div class="container">
        <nav class="flex mb-10 " aria-label="Breadcrumb">
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
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">{{ Str::limit($blog->title, 20) }}</span>
              </div>
            </li>
          </ol>
        </nav>
        <div class="flex flex-col text-center w-full">
          <h1
            class="
              sm:text-3xl
              text-2xl
              font-medium
              title-font
              text-gray-900 
            "
          >
            {{ $blog->title }}
          </h1>
        </div>
      </div>
      <!-- container -->
    </section>

    <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-20 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img
            alt="Blog Content"
            class="
              lg:lg\:w-1\/3
              w-full

              h-64
              object-cover object-center
              rounded

              mb-10
            "
            src="/image/{{ $blog->image }}"
          />
          <br>
          <p class="break-words">
            {!! $blog->content !!} 
            </p>
        </div>
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      
      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">{{ $blog->author }}</h2>
      <p class="text-gray-500">{{ date('d-m-Y', strtotime($blog->created_at)) }}</p>
      
     
            <h1 class="text-center sm:text-3xl
              text-2xl
              font-medium
              title-font
              mb-0 mt-20
              text-gray-900"> - Konten Lainnya - </h1>
    </div>
      </div>  

       <div class="justify-center row mr-20 ml-20">

          @forelse (array_slice($blogs->toArray(), 0, 3)  as $blogs)
              <div class="w-full md:w-2/3 lg:w-1/3">
            <div
              class="mx-4 mt-10 single-blog wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.2s"
            >
              <div class="mb-5 overflow-hidden blog-image rounded-xl">
                <img class="w-full h-40" src="/image/{{ $blogs->image }}" alt="blog" />
              </div>
              <div class="blog-content">
                <ul class="flex mb-2 meta">
                  <li>Author: <a href="javascript:void(0)">{{ $blogs->author }}</a></li>
                  <li class="ml-12">{{ date('d-m-Y', strtotime($blogs->created_at)); }}</li>
                </ul>
                <p class="mb-2 text-2xl leading-snug text-gray-900">
                  {{ $blogs->title }}
                </p>
                <a class="text-theme-color-2" href="/blog/{{ $blogs->title }}">
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
            <h1 class="text-center sm:text-3xl
              text-xl
              font-medium
              title-font
              mb-0 mt-20
              text-gray-900"> <a href="/blog">Lihat  {{ $count-3 }} Konten Lainnya</a> </h1>
        </div>
        <div id="disqus_thread" class="mt-20 mr-20 ml-20"></div>
    </section>
  <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://company-site.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <script src="{{ asset('js/vendor/jquery-3.5.1-min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!--====== Plugins js ======-->
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!--====== Particles js ======-->
    <script src="{{ asset('js/particles.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>