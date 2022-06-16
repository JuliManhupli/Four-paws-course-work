@extends('app')
@section('title')
    Пошук улюбленця
@endsection
@section('content')

<div class="container">
    <div class="project">
        <h1>Про проєкт</h1>
        <div class="description">
            <blockquote>
                <b>Чотири лапи</b> – це громадська організація, яка існує завдяки небайдужим людям.<br>
                Ми рятуємо тварин у місті Херсоні, котрі потребують нашої допомоги.<br>
                Наша мета - зменшити кількість безпритульних тварин і зробити їх життя щасливішим.<br>
            </blockquote>
        </div>
    </div>
</div>



<div class="banner">
    <div class="background">
        <div class="container">
            <!Обери свого улюбленця>
            <h1>Обери свого улюбленця</h1>
            <div class="choose_pet">
                <div class="row">
                    @if($pets)
                        @for($i = 0; $i < 3 ; $i++)
                        <div class="col-lg-4 col-12">
                            <a href="{{route('pet',$pets[$i]->img)}}">
                                <div class="pet">
                                    <img src="pictures/pets/{{$pets[$i]->img}}.png" alt="Pesyk">
                                    <div>
                                        <h2>{{$pets[$i]->name}}</h2>
                                        <blockquote>{{$pets[$i]->age_value}} {{$pets[$i]->age}}, {{$pets[$i]->sex->name}}</blockquote>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                    @endif
                </div>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 col-12">
                        <button onClick=location.href="{{route('pets')}}">Показати більше</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="reasons">
        <h1>Причини взяти тварину з притулку</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="reason">
                    <img src="pictures/reasons/1.svg" alt="Heard in hand">
                    <blockquote>
                        Ви рятуєте маленькі життя
                    </blockquote>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="reason another_color">
                    <img src="pictures/reasons/2.svg" alt="Cat">
                    <blockquote>
                        Ви подаєте приклад іншим
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="reason another_color med">
                    <img src="pictures/reasons/3.svg" alt="Medicine chest">
                    <blockquote>
                        Усі тварини проходять<br>медичне обстеження
                    </blockquote>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="reason heard">
                    <img src="pictures/reasons/4.svg" alt="Heard">
                    <blockquote>
                        Тварини покращують<br>емоційний стан
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="swiper">
    <h1>Відгуки</h1>
    <div class="swiper-wrapper">
        @foreach($reviews as $review)
        <div class="swiper-slide">
            <div class="review_text">
                <img src="pictures/reviews/{{$review->img}}.png" alt="{{$review->img}}">
                <div class="text">
                    <h2>{{$review->name}}</h2>
                    <blockquote>
                        {{$review->description}}
                    </blockquote>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="swiper-button-prev">
        <img src="pictures/reviews/arrow1.svg" alt="Arrow left">
    </div>
    <div class="swiper-button-next">
        <img src="pictures/reviews/arrow2.svg" alt="Arrow right">
    </div>
    </div>

</div>


<div class="container">
    <div class="another_help">
        <h1>Як ще допомогти?</h1>

        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="path_help">
                    <img src="pictures/another_help/1.svg" alt="Heard">
                    <blockquote>
                        Пожертви
                    </blockquote>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="path_help another_color">
                    <img src="pictures/another_help/2.svg" alt="Heard">
                    <blockquote>
                        Допомога волонтерів
                    </blockquote>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="path_help">
                    <img src="pictures/another_help/3.svg" alt="Heard">
                    <blockquote>
                        Тимчасова перетримка
                    </blockquote>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 col-12">
                <button onClick=location.href="{{route('help')}}">Дізнатися більше</button>
            </div>
        </div>
    </div>
</div>
@endsection
