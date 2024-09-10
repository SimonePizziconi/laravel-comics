<header>
    <nav>
        <a href="#">
            <img src="/img/dc-logo.png" alt="Logo">
        </a>

        <ul>
            @foreach ($header_menu as $item)
                <li>
                    <a class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}"
                        href="{{ route($item['name']) }}">{{ $item['text'] }}</a>
                </li>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
