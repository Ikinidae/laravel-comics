<header>
    <div id="blue_row">

    </div>

    <div id="header">
        <div>
            <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
        </div>

        <nav>
            @foreach ($nav as $item)
                <a href="">{{ $item['navName'] }}</a>
            @endforeach
        </nav>
    </div>
</header>
