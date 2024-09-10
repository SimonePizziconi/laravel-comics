@php
    $header_menu = config('header_menu');
@endphp

<header>
    <nav>
        <a href="#">
            <img src="/img/dc-logo.png" alt="Logo">
        </a>

        <ul>
            @foreach ($header_menu as $item)
                <li>
                    <a href="#">{{ $item['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
