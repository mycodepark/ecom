<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">
                <i class="app-menu__icon fa fa-bar-chart"></i>
                <span class="app-menu__label">Siparişler</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
                <i class="app-menu__icon fa fa-shopping-bag"></i>
                <span class="app-menu__label">Ürünler</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.brands.index' ? 'active' : '' }}" href="{{ route('admin.brands.index') }}">
                <i class="app-menu__icon fa fa-briefcase"></i>
                <span class="app-menu__label">Markalar</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Kategoriler</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.attributes.index' ? 'active' : '' }}" href="{{ route('admin.attributes.index') }}">
                <i class="app-menu__icon fa fa-th"></i>
                <span class="app-menu__label">Özellikler</span>
            </a>
        </li>


        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.carousels.index' ? 'active' : '' }}" href="{{ route('admin.carousels.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Slaytlar</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.about.index' ? 'active' : '' }}" href="{{ route('admin.about.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Hakkımızda</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.outlets.index' ? 'active' : '' }}" href="{{ route('admin.outlets.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Mağazalarımız</span>
            </a>
        </li>


        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Ayarlar</span>
            </a>
        </li>
    </ul>
</aside>
