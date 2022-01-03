@extends('layouts.frontend')

@section('title','Blog')
    @section('content')
    <!--====== HEADER PART ENDS ======-->

    <!--====== Blog start======-->
    <section id="blog" class="blog-area pt-120">
      <div class="container">
        <div class="flex flex-col text-center w-full">
          <h1
            class="
              sm:text-3xl
              text-2xl
              font-medium
              title-font
              mb-4
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
      <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img
            alt="ecommerce"
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
          <p class="">
            {!! $blog->content !!} 
            </p>
        </div>
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      
      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">{{ $blog->author }}</h2>
      <p class="text-gray-500">{{ $blog->created_at }}</p>
    </div>
      </div>
    </section>

    @endsection
