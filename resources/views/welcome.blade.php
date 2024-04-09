@extends('layouts/app')

@section('content')
    <main>
        <div class="container">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-5">

                @foreach ($movies as $singleMovie)
                <div class="col">
                    <div class="card my_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{$singleMovie->title}}</h5>
                                <div class="score bg-success rounded-circle text-center flex-shrink-0">{{$singleMovie->vote}}</div>
                            </div>
                            <h6 class="card-subtitle text-body-secondary">{{$singleMovie->original_title}}</h6>
                            <div class="text-body-secondary">
                                <div>Released on: {{$singleMovie->date}}</div>
                                <div class="text-capitalize">{{$singleMovie->nationality}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </main>
@endsection
