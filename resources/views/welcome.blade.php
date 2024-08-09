{{-- <x-app title="Title of Web Page"> --}}

    <section class="bg-gray-200">




        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <h1 class="text-5xl font-light my-6">Be Agile<br>Run Agile</h1>
                    <h2 class="text-2xl mb-8">Product Data Management</h2>


                    @foreach ($mottos as $motto)
            

                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 my-3">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto bg-blue-50 md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset("/images/".$motto['img'])}}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$motto['title']}}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{$motto['content']}}</p>
                        </div>
                    </a>
            
                    @endforeach



                </div>

                <div class="w-full md:w-2/3 px-4">
                    <img src="{{asset("/images/hero.svg")}}" alt="PDM Hero" class="w-full">
                </div>
            </div>
        </div>










        
        















    </section>
{{-- </x-app> --}}
