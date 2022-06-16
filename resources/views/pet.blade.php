@extends('app')
@section('title')
    {{$pet->name}}
@endsection
@section('content')
<div class="container">
    <div class="navigation">
        <div><a href="{{route('home')}}">Головна</a></div>
        <div>/</div>
        <div><a href="{{route('pets')}}">Пошук улюбленця</a></div>
        <div>/</div>
        <div><a href="#">{{$pet->name}}</a></div>
    </div>
</div>

<div class="container">
    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div class="container">
    <div class="all_description_pet">
        <div class="row">

            <div class="col-lg-6">
                <div class="pet_photo">
                    <img src="/pictures/pets/{{$pet->img}}.png">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="description_pet">
                    <h1>{{$pet->name}}</h1>
                    <div class="short_description_pet">
                        <blockquote>{{$pet->breed}}</blockquote>
                        <img src="/pictures/Ellipse.svg">

                        <blockquote>{{$pet->sex->name}}</blockquote>
                        <img src="/pictures/Ellipse.svg">

                        <blockquote>{{$pet->age}}</blockquote>
                        <img src="/pictures/Ellipse.svg">
                    </div>

                    <div class="description_pet_text">
                        <blockquote>
                            {!! $pet->description !!}
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 col-12">
                <button onclick="show('block')">Прихистити тварину</button>

            </div>

        </div>
    </div>
</div>

<div onclick="show('none')" id="gray" class="gray_background"></div>

@include('form')
@endsection
