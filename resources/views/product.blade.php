<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="coffee, coffee-shop, coffee-site">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="site about coffee">
    <title>Coffee Shop</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
</head>
<body>
<a href="{{ route('index') }}" class="back-link">
    <span class="back-icon">&larr;</span>
    Вернуться назад
</a>
<div class="brands" id="brands">
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
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(96130221, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96130221" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
