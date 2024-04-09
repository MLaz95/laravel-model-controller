@extends('layouts/app')

@section('content')
    <main>
        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4">

                @foreach ($movies as $singleMovie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$singleMovie->title}}</h5>
                            <h6 class="card-subtitle text-body-secondary">{{$singleMovie->original_title}}</h6>
                            <div class="d-flex gap-3">
                                <div>Released on: {{$singleMovie->date}}</div>
                                <div>{{$singleMovie->nationality}}</div>
                                <div>{{$singleMovie->vote}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </main>
@endsection
