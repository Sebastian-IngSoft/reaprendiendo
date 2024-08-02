@props(['type'])
@php

switch ($type) {
  case 'info':
    $typeComponent = 'p-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
    break;
  case 'danger':
  $typeComponent = 'p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
    
    break;
  case 'success':
  $typeComponent = 'p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-grenn-400';
  
    break;
    
}

    
@endphp


<div {{$attributes->merge(['class'=> ' '.$typeComponent])}}>
  <span class="font-medium">{{$title}}!</span> {{$slot}}
</div>
{{$attributes->merge(['class2'=> $typeComponent])}}