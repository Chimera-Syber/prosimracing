@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">События</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">События</li>
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
                            <h3 class="card-title">Редактирование события</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.event.store') }}" method="POST">
                               @csrf
                               <!-- text input -->
                                <div class="form-group">
                                    <label>Название события</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Введите название события" value="{{ $event->title }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Название лиги</label>
                                    <input type="text" name="league" id="league" class="form-control" placeholder="Введите название лиги" value="{{ $event->league }}">
                                    @error('league')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                 <!-- Date and time -->
                                <div class="form-group">
                                    <label>Дата и время:</label>
                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                        <input type="text" name="start_date" id="start_date" class="form-control datetimepicker-input" data-target="#reservationdatetime" value="{{ $event->start_date }}"/>
                                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('start_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Game Select -->
                                <div class="form-group">
                                    <label>Игра</label>
                                    <select class="form-control select2bs4" name="game_id" id="game_id" style="width: 100%;">
                                        @foreach($games as $k => $v)
                                            <option value="{{ $k }}" @if($k == $event->game_id) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                    @error('game_id')
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
