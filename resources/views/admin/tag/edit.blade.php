@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Теги</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Теги</li>
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
                            <h3 class="card-title">Редактирование тега</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('PATCH')
                               <!-- Text input -->
                                <div class="form-group">
                                    <label>Название тега</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $tag->title }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Text input -->
                                <div class="form-group">
                                    <label>Описание тега</label>
                                    <textarea type="text" name="description" id="description" class="form-control">{{ $tag->description }}</textarea>
                                    @error('decription')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                 <!-- text input disable -->
                                 <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ $tag->slug }}" disabled>
                                </div>
                                <!-- Text input -->
                                <div class="form-group">
                                    <label>SEO Keywords</label>
                                    <textarea type="text" name="seo_keywords" id="seo_keywords" class="form-control">{{ $tag->seo_keywords }}</textarea>
                                    @error('seo_keywords')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Text input -->
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <textarea type="text" name="seo_description" id="seo_description" class="form-control">{{ $tag->seo_description }}</textarea>
                                    @error('seo_description')
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
