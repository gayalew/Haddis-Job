<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-x-4 md:space-y-0 mx-4 mb-10">

@if(count($listings) == 0)
    <p>No Listings available </p>
@endif

@foreach($listings as $listing)
 <x-listing-card :listing="$listing"/>
@endforeach
</div>

<div class="mt-6 mb-16 p-4">
    {{$listings->links()}}
</div>

</x-layout>