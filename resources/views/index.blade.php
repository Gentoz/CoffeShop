<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="coffee, coffee-shop, coffee-site">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="site about coffee">
    <title>Coffee Shop</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css">
    <link rel="stylesheet" type="text/css" media="print" href="./css/print.css">
    <script src="./js/script.js"></script>
</head>
<body>
<section class="hero">
    <header>
        <nav>
            <a class="logo" href="{{ route('index') }}">
                <span class="dot"></span>
                Coffee <br>
                Shop
                <span class="dot"></span>
            </a>
            <input type="checkbox" id="check">
            <label for="check" class="menu">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-list"
                    viewBox="0 0 16 16"
                >
                    <path
                        fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                    />
                </svg>
            </label>
            <div class="nav-links">
                <a href="https://vk.com/sergokuznecov" target="_blank">Связаться с нами</a>
                <a href="https://24coffe-shop.ru/sitemap.xml" target="_blank">Карта сайта</a>
            </div>
        </nav>
    </header>
    <div class="intro">
        <div>
            <h1>Наш кофе это</h1>
            <h2>Непрекращающаяся история</h2>
        </div>
        <div>
            <button id="getAdvice" onclick="advice()">Получить совет</button>
        </div>
    </div>
    <div class="hero-bg">
        <img src="./images/cup_of_coffee.png" alt="cup of coffee">
    </div>
    <div class="scroll">
        <a href="#brands">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-arrow-down"
                viewBox="0 0 16 16"
            >
                <path
                    fill-rule="evenodd"
                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"
                />
            </svg>
            <span
            ><strong>Пролистнуть вниз</strong> <br>
            <strong>чтобы изучить больше</strong></span
            >
        </a>
    </div>
</section>
<div class="brands" id="brands">
    <img class="bottom-img" src="./images/coffee-beans.png" alt="coffee beans">
    @if(!empty($products))
        @foreach($products as $product)
            <a href="{{ route('product.show', ['product' => $product->id]) }}">
                <div class="brand">
                    <div class="img">
                        <img src="/storage/{{$product->url}}" alt="{{ $product->title }}">
                    </div>
                    <div class="desc">
                        <h2>{{ $product->title }}</h2>
                        <p>Описание: {{ $product->text }}</p>
                        <br>
                        <p>Цена: {{ $product->price }} руб.</p>
                    </div>
                </div>
            </a>
        @endforeach

        {{ $products->links('pagination.default') }}
    @endif
</div>
<footer>
    <a class="logo" href="{{ route('index') }}">
        <span class="dot"></span>
        Coffee <br>
        Shop
        <span class="dot"></span>
    </a>
    <div class="desc">
        <h3><em>Один глоток - Забудешь обо всём</em></h3>
        <p>
            Сайт сделал Кузнецов Сергей группа ПИН-201
        </p>
    </div>
</footer>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(96130221, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/96130221" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
