@extends('layouts.frontend')

@section('title','Portfolio')
    @section('content')
   <!-- This example requires Tailwind CSS v2.0+ -->
   @foreach ($misi as $misi)
       
   
<div class="mt-10 py-12 bg-white text-center">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
    <div class="lg:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Profiles</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl mb-3">
        Indonesia Maju
      </p>
      <img class="inline-block h-60 w-60 rounded-full ring-2 ring-white" src="/image/{{ $misi->image }}" alt="">
      <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
        {{ $misi->text }}
      </p>
    </div>

    <div class="mt-10">
      <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="relative">
          <dt>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Visi</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">
          {{ $misi->visi }}
          </dd>
        </div>

        <div class="relative">
          <dt>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Misi</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">
            {{ $misi->misi }}
          </dd>
        </div>
        
      </dl>
    </div>
  </div>
</div>
@endforeach
@endsection