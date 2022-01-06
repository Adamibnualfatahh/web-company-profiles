<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
        <h4>Tampilan Untuk Menu Home Frontend</h4>
    </x-slot>
     <div class="py-12">
          @if ($errors->any())
            <div class="alert alert-error mb-8">
                <div class="flex-1">
                    @foreach ($errors->all() as $error)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current"> 
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>                         
                    </svg> 
                    <label>{{ $error }}</label>
                     @endforeach
                </div>
            </div>
            @endif
            <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 w-full text-center ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Title
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Text
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Gambar
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                   @forelse ($home as $home)
                                    <tr class="whitespace-nowrap">
                                      <td class="px-6 py-4 text-sm text-gray-900">
                                           {{ $home->title }}
                                        </td>
                                        <td>
                                            <div class="px-6 py-4 text-sm text-gray-900">
                                            {{ $home->text }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar">
                                            <div class="rounded-btn w-20 h-20">
                                                <img src="/image/{{ $home->image }}">
                                            </div>
                                            </div> 
                                        </td>
                                      <td class="px-6 py-4 text-sm text-gray-900">
                                            <a href="{{ route('home.edit',$home->id) }}">                                           
                                            <button class="btn btn-primary">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                   @empty
                                       <td class="text-gray-500">Halaman Masih Kosong</td>
                                   @endforelse
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  </div>
</x-app-layout>