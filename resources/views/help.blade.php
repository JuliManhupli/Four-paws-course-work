@extends('app')
@section('title')
    Допомога притулку
@endsection
@section('content')

    <div class="container">
        <div class="navigation">
            <div><a href="{{route('home')}}">Головна</a></div>
            <div>/</div>
            <div><a href="#">Як допомогти</a></div>
        </div>
    </div>

    <div class="container">
        <div class="help_block">
            <h1>Допомога притулку</h1>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <img src="pictures/help/1.jpg" alt="Heard">
                </div>

                <div class="col-lg-8 col-12">
                    <div class="help_text">
                        <h2>Фінансова допомога</h2>
                        <blockquote>Ми будемо вдячні за будь-яку фінансову допомогу. Таким чином, ми можемо врятувати життя
                            та надати належний догляд тваринам.</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="background2">
            <div class="container">
                <div class="help_block">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="help_text another_color">
                                <h2>Допомога волонтерів</h2>
                                <blockquote>Ви можете у будь-яку мить доєднатися до доброї справи, а саме завітати до нашого
                                    притулку і допомогти з доглядом за тваринами.</blockquote>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <img src="pictures/help/2.png" alt="Heard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="help_block">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <img src="pictures/help/3.jpg" alt="Heard">
                </div>

                <div class="col-lg-8 col-12">
                    <div class="help_text">
                        <h2>Тимчасова перетримка</h2>
                        <blockquote>Якщо Ви маєте бажання, тоді можете тимчасово взяти тваринку під опіку. Навіть одна добра
                            справа здатна змінити світ на краще.</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
