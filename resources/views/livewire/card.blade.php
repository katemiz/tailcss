<?php

use function Livewire\Volt\{state};

state(['img' => "https://picsum.photos/200"]);  // Hero, Page, Section

state(['title' => "Default Header Title"]);
state(['content' => false]);
state(['background' => "bg-blue-100"]);

state(['more' => false]);
state(['time' => false]);




?>






<article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm my-4">
    <img alt="{{ $title }}" src="{{ $img }}" class="h-56 w-full object-cover object-scale-down {{ $background }}" />

    <div class="p-4 sm:p-6">

        @if ($more)
        <time datetime="2022-10-10" class="block text-xs text-gray-500">{{ $time }}</time>
        @endif


      <a href="#">
        <h3 class="text-lg font-medium text-gray-900">{!! $title !!}</h3>
      </a>

      <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">{!! $content !!}</p>


      @if ($more)
        <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            {{ $more }}
            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">&rarr;</span>
        </a>
      @endif

    </div>
  </article>
