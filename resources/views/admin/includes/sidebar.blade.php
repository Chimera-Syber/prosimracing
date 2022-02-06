<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.main.index') }}" class="brand-link">
      <span class="brand-text font-weight-light">ProSimRacing</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            IMG
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <!-- Categories -->
            <li class="nav-item {{ Request::is('*categories*') ? 'menu-open' : '' }}">
                <a href="{{ route('admin.category.index') }}" class="nav-link {{ Request::is('*categories*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>
                    Категории
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" class="nav-link {{ Request::is('*categories') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Список категорий</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category.create') }}" class="nav-link {{ Request::is('*categories/create') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Создать категорию</p>
                        </a>
                    </li>
                </ul>
            </li><!-- /.nav-item -->
            <!-- Games -->
            <li class="nav-item {{ Request::is('*games*') ? 'menu-open' : '' }}">
                <a href="{{ route('admin.game.index') }}" class="nav-link {{ Request::is('*games*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-gamepad"></i>
                    <p>
                    Игры
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.game.index') }}" class="nav-link {{ Request::is('*games') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Список игр</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.game.create') }}" class="nav-link {{ Request::is('*games/create') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Создать игру</p>
                        </a>
                    </li>
                </ul>
            </li><!-- /.nav-item -->
            <li class="nav-item {{ Request::is('*carousel*') ? 'menu-open' : '' }}">
                <a href="{{ route('admin.carousel.index') }}" class="nav-link {{ Request::is('*carousel*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-align-justify"></i>
                    <p>
                    Слайдер
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.carousel.index') }}" class="nav-link {{ Request::is('*carousel') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Медиа-контейнеры</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.carousel.create') }}" class="nav-link {{ Request::is('*carousel/create') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Создать медиа-контейнер</p>
                        </a>
                    </li>
                </ul>
            </li><!-- /.nav-item -->
            <li class="nav-item {{ Request::is('*events*') ? 'menu-open' : '' }}">
                <a href="{{ route('admin.event.index') }}" class="nav-link {{ Request::is('*events*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-align-justify"></i>
                    <p>
                    События
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.event.index') }}" class="nav-link {{ Request::is('*events') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Предстоящие гонки</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.event.create') }}" class="nav-link {{ Request::is('*events/create') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Создать событие</p>
                        </a>
                    </li>
                </ul>
            </li><!-- /.nav-item -->
            <li class="nav-item">
                <a href="{{ route('admin.trash.index') }}" class="nav-link bg-gradient-danger text-white">
                    <i class="fas fa-recycle nav-icon"></i>
                    <p>
                    Корзина
                    </p>
                </a>
            </li><!-- /.nav-item -->
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
