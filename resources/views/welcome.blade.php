@extends('layouts.app')

@section('comixCard')
<div class="bg-dark py-5">
<div class="container">

        <div class="row rows-col-6 ">
            @foreach($comixs as $comix)
            <div class="col my-3" v-for="poster in single">
                <img src="{{$comix['thumb']}}" alt="">
                <p class="text-light mt-2 text-uppercase text-center">{{$comix['title']}}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-primary text-uppercase px-5">load more</button>
        </div>
    </div>
</div>
@endsection


@section('generalCard')
<div class="generalCard py-5">
        <div class="container">
            <div class="row rows-col-5 justify-content-center align-items-center">
                @foreach($cards as $card)
                <div class="col" v-for="card in cards">
                    <img src="{{Vite::asset($card['img'])}}" alt="">
                    <span class="text-uppercase text-light px-2">{{$card['description']}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
