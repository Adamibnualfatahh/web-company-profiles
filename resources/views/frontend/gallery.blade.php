@extends('layouts.frontend')

@section('title','Gallery')
    @section('content')
<!--====== BRAMD PART START ======-->

    <section id="team" class="team-area pt-120">
      <div class="container">
        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Gallery</span>Pages</h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">
       @forelse ($gallery as $gallery)
           <div class="w-full sm:w-2/3 lg:w-1/3">
            <div
              class="mt-8 text-center single-team wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="relative team-image">
                <img class="w-full" src="/image/{{ $gallery->image }}" alt="Team" />
              </div>
              <div class="p-8">
                <h5 class="mb-1 text-xl font-bold text-gray-900">{{ $gallery->name }}</h5>
                <p>{{ $gallery->title }}</p>
              </div>
            </div>
                        
            <!-- single team -->
          </div>
       @empty
           <h1 class="text-center">Halaman Masih Kosong </h1>
       @endforelse
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->
@endsection