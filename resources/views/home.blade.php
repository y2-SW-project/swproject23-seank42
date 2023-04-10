@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a href="{{ route('newreleases.create') }}" class="btn btn-primary">Create</a>
    @forelse ($stations as $Petrol)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('stations.show', $Petrol) }}"> <strong> Title </strong> {{ $Petrol->title }}</a>
                    </h2>
                    <p class="mt-2">

                        {{$Petrol->price}}

                    </p>

                </div>
            @empty
            <p>No stations</p>
            @endforelse
            {{$stations->links()}}

    </div>
</div>
@endsection
