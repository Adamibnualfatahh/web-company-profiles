<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
        <h4>Profile Manager</h4>
    </x-slot>
 <div class="py-12">
            <div class="overflow-x-auto">
                <div class="flex flex-col">                               
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 m-3 w-full text-center ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            text
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            visi
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            misi
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                  
                                
                                      
                                  @foreach ($misi as $misi)
                                      
                                  
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4">
                                            <img class="rounded-btn w-50 h-50" src="/image/{{ $misi->image }}" alt="">
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500">
                                           {{ Str::limit($misi->text,40) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                           {{ Str::limit($misi->visi,50) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ Str::limit($misi->misi,50) }}
                                           {{-- {{ date('d-m-Y', strtotime($portfolio->created_at))}} --}}
                                            </div>
                                        </td>
                                        
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="misi/edit/{{ $misi->id }}">                                           
                                            <button class="px-4 py-1 text-sm btn btn-error">Edit</button>
                                            </a>
                                        </td>

                                    </tr>
                            @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>