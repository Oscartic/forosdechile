@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2>{{ __("Foros") }}</h2>

                @forelse($forums as $forum)

                    <div class="card">
                        <h5 class="card-header">
                            <a href="/forums/{{ $forum->id }}">{{ $forum->name }}</a>
                        </h5>

                        <div class="card-body">
                            {{ $forum->description }}
                        </div>
                    </div>

                @empty

                    <div class="alert alert-danger">
                        {{ __("No hay ningun foro en este momento") }}
                    </div>

                @endforelse
                @if($forums->count())
                    {{ $forums->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection
