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
            <li class="nav-item menu-open">
                <a href="{{ route('admin.category.index') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Категории
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Список категорий</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Создать категорию</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./index3.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v3</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
