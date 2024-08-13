{{-- <x-app title="Title of Web Page"> --}}

    <section class="container mx-auto bg-white">




        <div class="container mx-auto px-4">

            <livewire:header type="Hero" title="Be Agile<br>Run Agile" subtitle="Product Data Management"/>

            <div class="flex flex-wrap -mx-4">

                <div class="flex flex-col w-full md:w-1/3 px-4">



                    @foreach ($mottos as $motto)


                    {{-- <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 my-3">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto bg-blue-50 md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset("/images/".$motto['img'])}}" alt="{{$motto['title']}}">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{$motto['title']}}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{$motto['content']}}</p>
                        </div>
                    </a> --}}

{{--

                    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-md overflow-hidden sm:max-w-2xl">
                        <div class="sm:flex">
                          <div class="sm:shrink-0 bg-gray-200">
                            <img class="h-48 w-full object-cover object-scale-down sm:h-full sm:w-48" src="{{asset("/images/".$motto['img'])}}" alt="Modern building architecture">
                          </div>
                          <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$motto['title']}}</div>
                            <p class="mt-2 text-slate-500">{{$motto['content']}}</p>
                          </div>
                        </div>
                      </div>
 --}}


                      <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl my-3 ">
                        <div class="xl:flex">
                          <div class="md:shrink-0 bg-blue-50">
                            <img class="h-48 w-full object-cover object-scale-down md:h-full md:w-48" src="{{asset("/images/".$motto['img'])}}" alt="Modern building architecture">
                          </div>
                          <div class="p-8 bg-gray-100 shadow-md">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$motto['title']}}</div>
                            <p class="mt-2 text-slate-500">{{$motto['content']}}</p>
                          </div>
                        </div>
                      </div>




                    @endforeach



                </div>

                <div class="w-full md:w-2/3 p-4">
                    <img src="{{asset("/images/hero.svg")}}" alt="PDM Hero" class="w-full bg-white m-auto">
                </div>
            </div>
        </div>













        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-2">

            <div class="rounded-lg bg-gray-200 bg-teal-300 p-4">
                @foreach ($mottos as $motto)
                  <livewire:card  :img="asset('images/' . $motto['img'])" :title="$motto['title']" :content="$motto['content']"/>
                @endforeach
            </div>

            <div class="rounded-lg bg-gray-200 lg:col-span-2 bg-green-300 p-4">

                <livewire:file-list mid="3"/>

                <livewire:notification type="success" message="this is the message"/>
                <livewire:notification type="fail" message="this is the message"/>
                <livewire:notification type="info" message="this is the message"/>

                <livewire:file-upload model_name="Record" mid="3" isMultiple="{{true}}" />


                <livewire:info-box mid="3" />


            </div>

          </div>










    </section>
{{-- </x-app> --}}
