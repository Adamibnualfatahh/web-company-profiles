@extends('layouts.frontend')

@section('title','Portfolio')
    @section('content')
   
        <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-8 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title"><span>Portfolios</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
 @foreach ($portfolio as $portfolio)
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-team wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="relative team-image">
                            <img class="w-full" src="/image/{{ $portfolio->image }}" alt="Team">
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
@endforeach
                

               
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
@endsection