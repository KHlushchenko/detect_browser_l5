<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    {!!  Minify::stylesheet(array(
            '/packages/vis/detect_browser/css/normalize.css',
            '/packages/vis/detect_browser/css/detect_browser.css',
         ), array('defer' => true))
    !!}

</head>

<body>
    <div class="old-body">
        <div class="old-content">
            <h2>К сожалению, наш сайт не поддерживает устаревшие версии браузеров</h2>
            <p>Предлагаем загрузить новые, это займет несколько минут</p>
            <div class="browsers-container">
                @foreach($browsers as $browser)
                    @if(!$browser['download_link']) @continue @endif
                    <div class="browser">
                        <img src="{{aseet($browser['icon'])}}" alt="" class="browser-img">
                        <span class="browser-name">{{$browser['full_name']}}</span>
                        <a href="{{$browser['download_link']}}" class="browser-download"><span>скачать</span></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>