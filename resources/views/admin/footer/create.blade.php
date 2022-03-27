@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Настройки футера</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Настройки футера</li>
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
                            <h3 class="card-title">Создание ссылки</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.footer.store') }}" method="POST">
                               @csrf
                               <!-- text input -->
                                <div class="form-group">
                                    <label>Название события</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Введите заголовок" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Название лиги</label>
                                    <input type="text" name="url" id="url" class="form-control" placeholder="Введите ссылку" value="{{ old('url') }}">
                                    @error('url')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Game Select -->
                                <div class="form-group">
                                    <label>Место</label>
                                    <select class="form-control" name="place" id="place" style="width: 100%;">
                                        @foreach($places as $k => $v)
                                            <option value="{{ $k }}" {{ $place_id == $k ? 'selected' : '' }}>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                    @error('place')
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
