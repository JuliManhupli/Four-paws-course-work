@extends('app')
@section('title')
    Контакти
@endsection
@section('content')

<div class="container">
    <section class="navigation">
        <div><a href="{{route('home')}}">Головна</a></div>
        <div>/</div>
        <div><a href="#">Контакти</a></div>
    </section>
</div>

<div class="container">
    <div class="contacts">
        <h1>Контакти</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="contacts_text">
                    <h3>
                        Ми завжди ради бачити <br>вас у нашому притулку!
                    </h3>
                    <div class="contacts_info">
                        <img src="pictures/contacts/phone.png">
                        <blockquote>+38-050-146-7881</blockquote>
                    </div>
                    <div class="contacts_info">
                        <img src="pictures/contacts/location.png">
                        <blockquote>Херсон<br>Вулиця 49 Херсонської<br>Гвардійської дивізії, будинок 2</blockquote>
                    </div>
                    <div class="contacts_info contacts_info_mobile">
                        <div class="facebook">
                            <a href="https://www.instagram.com/4lapu_herson/">
                                <img src="pictures/footer/Facebook.svg" alt="Facebook">
                            </a>
                        </div>
                        <a href="https://www.instagram.com/4lapu_herson/">
                            <div>
                                <img src="pictures/footer/Instagram.svg" alt="Instagram">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="map">
                    <img src="pictures/location.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
