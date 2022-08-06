@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Медиа-контейнеры</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Медиа-контейнеры</li>
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
                            <h3 class="card-title">Список медиа-контейнеров</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Название и ссылка</th>
                                    <th>Картинка</th>
                                    <th>Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carousel as $slide)
                                    <tr @if ($loop->iteration > 4) style="background-color: #ccc;" @endif>
                                        <td>{{ $slide->id }}</td>
                                        <td>{{ $slide->title }}<br>
                                            <a href="{{ $slide->url }}">{{ $slide->url }}</a>
                                        </td>
                                        <td><img src="{{ $slide->getImage() }}" alt="" style="width: 400px;"></td>
                                        <td>
                                            <a href="{{ route('admin.carousel.edit', $slide->id) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('admin.carousel.delete', $slide->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                                <a href="{{ route('admin.carousel.create') }}" class="btn bg-gradient-primary mt-2">Добавить</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
    <!-- /.content-wrapper -->
@endsection
