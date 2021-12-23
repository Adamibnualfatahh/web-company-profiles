<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
        <h4>Tampilan Untuk Menu About Frontend</h4>
    </x-slot>
    <div class="py-12 ">
        
        <div class="overflow-x-auto">
            
            <div class="overflow-x-auto"> 
                <a href="{{ route('about.create') }}"><button class="btn btn-primary ml-4">Add New</button></a>
            <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 max-w-xs">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Title
                                        </th>
                                         <th class="px-6 py-2 text-xs text-gray-500">
                                            text
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                   @forelse ($about as $about)
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                           <img class="w-30 md:w-25 lg:w-30" src="/image/{{ $about->image }}" alt="">
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                            {{ Str::limit($about->title,50) }}
                                            </div>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                
                                            {{ Str::limit($about->text,50) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="about/destroy/{{$about->id }}"><button class="px-4 py-1 text-sm btn btn-error">Delete</button></a>
                                        </td>
                                        <td class="px-6 py-4  ">
                                            <a href="about/ubah/{{$about->id }}"><button class="px-4 py-1 text-sm btn btn-primary">Edit</button></a>
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
        </div>
    </div>  
</x-app-layout>