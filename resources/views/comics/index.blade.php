@extends('layouts.app')


@section('content')

<main class="bg-cards">
    <div class="current-button">CURRENT SERIES</div>
    <div class="container-cards">
        <div class="row-fumetti">
            @foreach ($comics as $comic)
                <div class="col-fumetto">
                    <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
                        <div class="contenitore-img">
                            <img class="img-fumetto" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <h3 class="title">{{$comic['title']}}</h3>
                        <a href="" class="btn btn-sm btn-square btn-warning">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-square btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <a href="{{route('comics.create')}}" class="btn btn-sm btn-square btn-success">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </a>
                </div> 
            @endforeach
        </div>
        <button class="load-button">LOAD MORE</button>
    </div>

</main>
@endsection