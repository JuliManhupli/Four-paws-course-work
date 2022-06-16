@extends('app')
@section('title')
    Дякуємо!
@endsection
@section('content')
    <div class="container">
        <div class="feedback">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <img src="pictures/feedback-cat.jpg" alt="Belle">
                </div>
                <div class="col-lg-8 col-12">
                    <div class="feedback_text">
                        <h2>Дякуємо, {{ $name }}! <br>Скоро ми зв'яжемося з вами.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
