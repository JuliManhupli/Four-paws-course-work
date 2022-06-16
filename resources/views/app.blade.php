<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/pictures/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module"  src="{{ asset('js/reviews.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}" ></script>
    <script type="module" src="{{ asset('js/menu.js') }}"></script>
    <title>@yield ('title')</title>
</head>
<body>
<div class="gray"></div>

@if(Request::is('/'))
    @include('headers.header_landing')
@else()
    @include('headers.header')
@endif

    @yield('content')

<footer>
    <div class="banner">
        <div class="background_footer">
            <div class="container">
                <div class="footer">
                    <div>
                        <blockquote>+38-050-146-7881</blockquote>
                        <blockquote>KhersonHelp@yahoo.com</blockquote>
                        <blockquote>Вулиця 49 Херсонської<br>Гвардійської дивізії, будинок 2</blockquote>
                    </div>

                    <div  class="social_network">
                        <a href="https://www.facebook.com/Kherson.Help.4paws/">
                            <div class="facebook">
                                <img src="/pictures/footer/Facebook.svg" alt="Facebook">
                            </div>
                        </a>
                        <a href="https://www.instagram.com/4lapu_herson/">
                            <div>
                                <img src="/pictures/footer/Instagram.svg" alt="Instagram">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
