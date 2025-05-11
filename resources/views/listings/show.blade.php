<x-layout>

<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card>
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{$listing->logo? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">Senior Laravel Developer</h3>
        <div class="text-xl font-bold mb-4">{{$listing -> company}}</div>
        <x-listing-tags :tagsCsv="$listing->tags" />

        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot mr-4"></i>{{$listing -> location}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div class="mb-20">
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg space-y-6">
                {{$listing -> description}}

                <a
                    href="mailto:{{$listing -> email}}"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >

                <a
                    href="{{$listing -> website}}"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</x-card>

<x-card class="mt-4 mb-20 p-2 flex justify-between">
    <a href="/listings/{{$listing->id}}/edit" 
        class="text-white p-2 rounded-lg border-lg border-red-500 bg-gray-700">
        <i class="fa-solid fa-pencil"></i>
        <span class="ml-2">Edit</span>
    </a>

    <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="text-white p-2 rounded-lg border-lg border-red-500 bg-red-500">
            <i class="fa-solid fa-trash"></i>
            <span class="ml-1">Delete</span>
        </button>
    </form>
</x-card>
</div>
</x-layout>