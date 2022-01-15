
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery Videos') }}
        </h2>
        <h2 class="text-xl text-blue-800"><a href="/dashboard/gallery">Fotos</a>  | <a href="/dashboard/videos">Videos</a> </h2>
    </x-slot>
   <div class="py-12 ">
        
        <div class="overflow-x-auto">
            
            <div class="overflow-x-auto"> 
            <a href="{{ route('videos.create') }}"><button class="btn btn-primary ml-3">Add New</button></a>
             <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Name
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Title
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
                                  
                                 @foreach ($gallery as $gallery)
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4  text-gray-50	">
                                            <video class="rounded max-w-sm	 max-h-24" controls >
                                                <source src="/video/{{ $gallery->video }}" type="video/mp4">
                                            </video>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class=" text-gray-900">
                                            {{ $gallery->name }}
                                            </div>
                                        </td>
                                         <td class="px-6 py-4">
                                            <div class=" text-gray-900">
                                            {{ $gallery->title }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4  ">
                                            <a href="videos/edit/{{$gallery->id }}"><button class="px-4 py-1  btn btn-primary">Edit</button></a>
                                        </td>
                                         @method('DELETE')
                                         <td class="px-6 py-4  ">
                                            <a href="videos/destroy/{{$gallery->id }}"><button class="px-4 py-1  btn btn-error">Delete</button></a>
                                        </td>
                                         @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>  
        </div>
    </div>  
</x-app-layout>