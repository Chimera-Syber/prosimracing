@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Корзина</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Корзина</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                            <i class="fas fa-book-open"></i>
                            Список удаленных категорий</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Название</th>
                                    <th>Slug</th>
                                    <th>SEO Keywords</th>
                                    <th>SEO Description</th>
                                    <th>Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->keywords }}</td>
                                        <td>{{ $category->seo_description }}</td>
                                        <td>
                                            <form action="{{ route('admin.trash.category.restore', ['category' => $category->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm float-left mr-1" onclick="return confirm('Подтвердите восстановление')"><i class="fas fa-trash-restore"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-gamepad"></i>
                            Список удаленных игр</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Название</th>
                                    <th>Slug</th>
                                    <th>Иконка</th>
                                    <th>SEO Keywords</th>
                                    <th>SEO Description</th>
                                    <th>Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($games as $game)
                                    <tr>
                                        <td>{{ $game->id }}</td>
                                        <td>{{ $game->title }}</td>
                                        <td>{{ $game->slug }}</td>
                                        <td><img src="{{ $game->getImage() }}" alt="" style="width: 22px;"></td>
                                        <td>{{ $game->keywords }}</td>
                                        <td>{{ $game->seo_description }}</td>
                                        <td>
                                            <form action="{{ route('admin.trash.game.restore', ['game' => $game->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm float-left mr-1" onclick="return confirm('Подтвердите восстановление')"><i class="fas fa-trash-restore"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-lightblue">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-align-justify"></i>
                            Список удаленных медиа-контейнеров</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Название</th>
                                    <th>URL</th>
                                    <th>Картинка</th>
                                    <th>Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carousel as $slide)
                                    <tr>
                                        <td>{{ $slide->id }}</td>
                                        <td>{{ $slide->title }}</td>
                                        <td>{{ $slide->url }}</td>
                                        <td><img src="{{ $slide->getImage() }}" alt="" style="width: 300px;"></td>
                                        <td>
                                            <form action="{{ route('admin.trash.carousel.restore', ['slide' => $slide->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm float-left mr-1" onclick="return confirm('Подтвердите восстановление')"><i class="fas fa-trash-restore"></i></button>
                                            </form>
                                            <form action="{{ route('admin.trash.carousel.destroy', $slide->id) }}" method="post" class="float-left">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите полное удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title"><i class="far fa-calendar-check"></i>
                            Список удаленных событий</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Название</th>
                                    <th>Лига</th>
                                    <th>Дата и время начала</th>
                                    <th>Игра</th>
                                    <th>Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->league }}</td>
                                        <td>{{ $event->dateAsCarbon->translatedFormat('j F Y H:m') }} MSK</td>
                                        <td><img src="{{ $event->game->getImage() }}"> {{ $event->game->title }}</td>
                                        <td>
                                            <form action="{{ route('admin.trash.event.restore', ['event' => $event->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm float-left mr-1" onclick="return confirm('Подтвердите восстановление')"><i class="fas fa-trash-restore"></i></button>
                                            </form>
                                            <form action="{{ route('admin.trash.event.destroy', $event->id) }}" method="post" class="float-left">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите полное удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
    <!-- /.content-wrapper -->
@endsection
