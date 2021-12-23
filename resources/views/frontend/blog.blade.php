
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
              
          @endforelse
          
         
          
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
    @endsection