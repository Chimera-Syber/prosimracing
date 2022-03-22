@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Баннеры</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Баннеры</li>
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
                            <h3 class="card-title">Список баннеров</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Картинка</th>
                                    <th>Название и подзаголовок</th>
                                    <th>Ссылка</th>
                                    <th>Место размещения</th>
                                    <th>Управление</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                                    <tr>
                                        <td>{{ $banner->id }}</td>
                                        <td><img src="{{ $banner->getImage() }}" alt="" style="width: 400px;"></td>
                                        <td>{{ $banner->title }}<br>{{ $banner->subtitle }}</td>
                                        <td><a href="{{ $banner->url }}">{{ $banner->url }}</a></td>
                                        <td>
                                            @foreach($places as $id => $place)
                                                @if($id == $banner->place) 
                                                    {{ $place }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('admin.banner.delete', $banner->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                                <a href="{{ route('admin.banner.create') }}" class="btn bg-gradient-primary mt-2">Добавить</a>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $banners->links() }}
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
