<x-agromaster-layout :meta="$meta">

    @isset($banner)
        <x-assets.banner title="{{$banner['title']}}" image="{{$banner['image'] ?? ''}}"></x-assets.banner>
    @endisset







</x-agromaster-layout>
