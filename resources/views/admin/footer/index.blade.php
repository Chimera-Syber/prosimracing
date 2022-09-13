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
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Главная</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Заголовок</th>
                                        <th>Порядок</th>
                                        <th>Управление</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($footers as $footer)
                                    <tr>
                                        @if($footer->place == Footer::PLACE_ONE)
                                        <td>{{ $footer->title }}</td>
                                        <td>{{ $footer->orders }}</td>
                                        <td>
                                            <a href="{{ route('admin.footer.edit', ['footer' => $footer->id]) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('admin.footer.delete', $footer->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        @endif
                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="{{ route('admin.footer.create', ['place' => Footer::PLACE_ONE]) }}" class="btn btn-primary">Добавить</a>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Материалы</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Заголовок</th>
                                        <th>Порядок</th>
                                        <th>Управление</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($footers as $footer)
                                    <tr>
                                        @if($footer->place == Footer::PLACE_TWO)
                                            <td>{{ $footer->title }}</td>
                                            <td>{{ $footer->orders }}</td>
                                            <td>
                                                <a href="{{ route('admin.footer.edit', ['footer' => $footer->id]) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('admin.footer.delete', $footer->id) }}" method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        @endif
                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="{{ route('admin.footer.create', ['place' => Footer::PLACE_TWO]) }}" class="btn btn-primary">Добавить</a>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Игры</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Заголовок</th>
                                        <th>Порядок</th>
                                        <th>Управление</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($footers as $footer)
                                    <tr>
                                        @if($footer->place == Footer::PLACE_THREE)
                                        <td>{{ $footer->title }}</td>
                                        <td>{{ $footer->orders }}</td>
                                        <td>
                                            <a href="{{ route('admin.footer.edit', ['footer' => $footer->id]) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('admin.footer.delete', $footer->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        @endif
                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="{{ route('admin.footer.create', ['place' => Footer::PLACE_THREE]) }}" class="btn btn-primary">Добавить</a>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Календарь</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Заголовок</th>
                                        <th>Порядок</th>
                                        <th>Управление</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($footers as $footer)
                                    <tr>
                                        @if($footer->place == Footer::PLACE_FOUR)
                                            <td>{{ $footer->title }}</td>
                                            <td>{{ $footer->orders }}</td>
                                            <td>
                                                <a href="{{ route('admin.footer.edit', ['footer' => $footer->id]) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('admin.footer.delete', $footer->id) }}" method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        @endif
                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="{{ route('admin.footer.create', ['place' => Footer::PLACE_FOUR]) }}" class="btn btn-primary">Добавить</a>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Социальные сети</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Заголовок</th>
                                        <th>Порядок</th>
                                        <th>Управление</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($footers as $footer)
                                    <tr>
                                        @if($footer->place == Footer::PLACE_FIVE)
                                        <td>{{ $footer->title }}</td>
                                        <td>{{ $footer->orders }}</td>
                                        <td>
                                            <a href="{{ route('admin.footer.edit', ['footer' => $footer->id]) }}" class="btn bg-gradient-success btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('admin.footer.delete', $footer->id) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        @endif
                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="{{ route('admin.footer.create', ['place' => Footer::PLACE_FIVE]) }}" class="btn btn-primary">Добавить</a>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
    <!-- /.content-wrapper -->
@endsection
