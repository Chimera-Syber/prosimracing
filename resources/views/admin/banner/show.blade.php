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
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Настройки отображения баннеров на сайте</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.banner.updateshow') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <!-- Place input -->
                                <div class="form-group">
                                    <label>Выбор баннера между секциями</label>
                                    <select name="toggle" id="toggle" class="form-control">
                                        @foreach($banners as $banner)
                                            @if($banner->place == Banner::SITE_PLACE_BETWEEN_SECTION )
                                                <option value="{{ $banner->id }}">{{ $banner->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('place')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Сохранить</button>
                           </form>
                           <form action="{{ route('admin.banner.updateshow') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <!-- Place input -->
                                <div class="form-group">
                                    <label>Выбор баннера в сайдбаре</label>
                                    <select name="toggle" id="toggle" class="form-control">
                                        @foreach($banners as $banner)
                                            @if($banner->place == Banner::SITE_PLACE_SIDEBAR )
                                                <option value="{{ $banner->id }}">{{ $banner->title }}</option>
                                            @endif
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
