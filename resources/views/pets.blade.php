@extends('app')
@section('title')
    Пошук улюбленця
@endsection
@section('content')

    <div class="container">
        <div class="navigation">
            <div><a href="{{route('home')}}">Головна</a></div>
            <div>/</div>
            <div><a href="#">Пошук улюбленця</a></div>
        </div>
    </div>

    <div class="container">
        <div class="menu_search">
            <h1>Пошук улюбленця</h1>
            <form action="{{route('pets')}}" method="GET">
            <div class="menu_search_line">
                <div class="menu_search_line_choice">
                    <div class="menu_search_line_block">
                        <blockquote>Вид</blockquote>
                        <label>
                            <select name="animal_id">
                                <option></option>
                                @foreach($animals as $animal)
                                <option value="{{$animal->id}}" @if(isset($_GET['animal_id'])) @if($_GET['animal_id'] == $animal->id) selected @endif @endif>{{$animal->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="menu_search_line_block">
                        <blockquote>Cтать</blockquote>
                        <label>
                            <select name="sex_id">
                                <option></option>
                                @foreach($sexes as $sex)
                                    <option value="{{$sex->id}}" @if(isset($_GET['sex_id'])) @if($_GET['sex_id'] == $sex->id) selected @endif @endif>{{$sex->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="menu_search_line_block">
                        <blockquote>Вік</blockquote>
                        <label>
                            <select name="age_choice">
                                <option></option>
                                @foreach($age_ranges as $age_range)
                                    <option value="{{$age_range->name}}" @if(isset($_GET['age_choice'])) @if($_GET['age_choice'] == $age_range->name) selected @endif @endif>{{$age_range->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                </div>
                <div>
                    <button type="submit">Пошук</button>
                </div>
            </div>
            </form>
        </div>
    </div>


    <div class="container">
        <div class="pets">
            <div class="row">
                @foreach($pets as $pet)
                <div class="col-lg-4 col-12">
                    <a href="{{route('pet',$pet->img)}}">
                        <div class="pet">
                            <img src="pictures/pets/{{$pet->img}}.png" alt="Pesyk">
                            <div>
                                <h2>{{$pet->name}}</h2>
                                <blockquote>{{$pet->age_value}} {{$pet->age}}, {{$pet->sex->name}}</blockquote>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

    </div>
    </div>
    {{$pets->withQueryString()->links('pagination')}}



@endsection
