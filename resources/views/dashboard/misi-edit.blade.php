 <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
        <h4>Profile Edit</h4>
    </x-slot>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <table>
               <tr>
                   <td> <img class="rounded-btn w-50 h-30" src="/image/{{ $misi->image }}" alt=""></td>
                   <td>
                        <form class="w-full max-w-sm" method="POST"  action="{{ route('misi.update',$misi->id) }} " enctype="multipart/form-data">
                    @csrf   
                    @method('PUT') 
                    <input type="hidden" name="id" id="id" value="{{ $misi->id}}">            
                 <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Text 
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="text" type="text" value="{{ $misi->text }}">
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Visi
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="visi" type="text" value="{{ $misi->visi }}">
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Misi
                    </label>
                    </div>
                    <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="misi" type="text" value="{{ $misi->misi }}">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name" >
                        Image
                    </label>
                    </div>
                   
                    <div class="md:w-2/3">
                   <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="image" type="file" value="{{ $misi->image }}">
                    </div>
                </div>
                 
                
                
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                    <button class="btn btn-outline btn-primary w-full" type="submit">
                        Kirim
                    </button>
                    </div>
                </div>
            </form>
                   </td>
               </tr>
           </table>
        </div>
    </div>  
</x-app-layout>
 <script>
            CKEDITOR.replace( 'editor1' );
        </script>