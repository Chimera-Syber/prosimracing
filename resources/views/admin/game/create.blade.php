@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Игры</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Игры</li>
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
                            <h3 class="card-title">Создание игры</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.game.store') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <!-- Text input -->
                                <div class="form-group">
                                    <label>Название игры</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Введите название игры">
                                    @error('title')
                                        <div class="text-danger">Это поле необходимо для заполнения</div>
                                    @enderror
                                </div>
                                <!-- Icon input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">Иконка</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="icon" id="icon">
                                            <label class="custom-file-label" for="icon">Выбрать файл</label>
                                            @error('title')
                                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Text input -->
                                <div class="form-group">
                                    <label>SEO Keywords</label>
                                    <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Введите SEO Keywords">
                                </div>
                                <!-- Text input -->
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input type="text" name="seo_description" id="seo_description" class="form-control" placeholder="Введите SEO описание">
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
