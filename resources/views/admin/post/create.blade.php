@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Публикации</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Публикации</li>
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
                            <h3 class="card-title">Создание публикации</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <!-- Text input -->
                                <div class="form-group">
                                    <label>Название публикации</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Введите название публикации" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Text textarea -->
                                <div class="form-group">
                                    <label>Описание публикации</label>
                                    <textarea type="text" name="description" id="description" class="form-control" placeholder="Введите описание публикации">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Category select area -->
                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control select2" id="category_id" name="category_id" data-placeholder="Выберите категорию">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Game select area -->
                                <div class="form-group">
                                    <label>Игра</label>
                                    <select class="select2"  multiple="multiple" name="game_ids[]" data-placeholder="Выберите игру" style="width: 100%;">
                                        @foreach($games as $game)
                                            <option {{ is_array(old('game_ids')) && in_array($game->id, old('game_ids')) ? 'selected' : '' }} value="{{ $game->id }}">{{ $game->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('game_ids')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                 <!-- Content textarea -->
                                 <div class="form-group">
                                    <label for="content">Текст публикации</label>
                                    <div id="contentEditorJs" style="display: block; min-height: 450px;"></div>
                                    <input type="hidden" name="content" id="content" class="form-control" value="{{ old('content') }}">
                                    @error('content')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Icon input -->
                                <div class="form-group">
                                    <label for="icon">Превью-картинка</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_image" id="preview_image">
                                            <label class="custom-file-label" for="preview_image">Выбрать файл</label>
                                        </div>
                                    </div>
                                    @error('preview_image')
                                            <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- SEO Keywords input -->
                                <div class="form-group">
                                    <label>SEO Keywords</label>
                                    <input type="text" name="seo_keywords" id="seo_keywords" class="form-control" placeholder="Введите SEO Keywords" value="{{ old('seo_keywords') }}">
                                    @error('seo_keywords')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- SEO Description input -->
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input type="text" name="seo_description" id="seo_description" class="form-control" placeholder="Введите SEO описание" value="{{ old('seo_description') }}">
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
