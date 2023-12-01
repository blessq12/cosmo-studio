@php
    $links = [
        (object)['name' => 'Дашборд', 'route' => 'crm.index'],
        (object)['name' => 'Баннеры', 'route' => 'crm.banners.index'],
        (object)['name' => 'Студии', 'route' => 'crm.studios.index'],
        (object)['name' => 'Готовые работы', 'route' => 'crm.galleries.index'],
        (object)['name' => 'Выйти', 'route' => 'user.user-logout'],
    ]
    
@endphp

<div class="sidebar">
    
    <h3 class="mb-4">Навигация</h3>
    <ul class="p-0 m-0 list-unstyled">
        @foreach ($links as $link)
            <li 
                class="
                    {{ $link->route == Request::route()->getName() ? 'active' : '' }}
                    {{ Request::segment(2) == explode('.', $link->route)[1] ? 'active' : '' }}
                "
            >
                <a href="{{ route($link->route) }}" class="{{ $link->route == 'user.user-logout' ? 'text-danger' : ''}}">
                    {{ $link->name }}
                    {!! $link->route == 'user.user-logout' ? '<i class="fa fa-sign-out px-2"></i>' : '' !!}
                </a>
            </li>
        @endforeach
    </ul>
</div>