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
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Создание медиа-контейнера</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.carousel.store') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <!-- Text input -->
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Введите название" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Url input -->
                                <div class="form-group">
                                    <label>Ссылка</label>
                                    <input type="text" name="url" id="url" class="form-control" placeholder="Вставьте ссылку" value="{{ old('url') }}">
                                    @error('url')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Icon input -->
                                <div class="form-group">
                                    <label for="image">Превью-картинка</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image">
                                            <label class="custom-file-label" for="image">Выбрать файл</label>
                                        </div>
                                    </div>
                                    @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                           </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
    <!-- /.content-wrapper -->
@endsection
