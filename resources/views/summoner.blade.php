@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>{{$summoner->name}}</h1>
                <p>Level {{$summoner->summonerLevel}}</p>
                <button type="button" class="btn btn-primary">Update</button>
                @foreach ($champions as $champ)
                    <p>{{$champ->name}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
