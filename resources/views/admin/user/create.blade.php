@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">На главную</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
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
                            <h3 class="card-title">Создание пользователя</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <!-- Name input -->
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Введите имя пользователя" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Email input -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Password input -->
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="password" id="password" class="form-control" placeholder="Введите пароль пользователя" value="{{ old('password') }}" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Password confirm input -->
                                <div class="form-group">
                                    <label for="password-confirm">Подтвердите пароль</label>
                                    <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    @error('password-confirm')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- About user -->
                                <div class="form-group">
                                    <label for="about_user">О себе</label>
                                    <textarea name="about_user" id="about_user" class="form-control" placeholder="О пользователе"></textarea>
                                    @error('about_user')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- User Avatar -->
                                <div class="form-group">
                                    <label for="user_avatar">Аватар пользователя</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="user_avatar" id="user_avatar">
                                            <label for="user_avatar" class="custom-file-label">Выбрать картинку</label>
                                        </div>
                                    </div>
                                    @error('user_avatar')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Role input -->
                                <div class="form-group">
                                    <label>Выберите роль</label>
                                    <select name="role" id="role" class="form-control">
                                        @foreach($roles as $id => $role)
                                            <option value="{{ $id }}" {{ $id == old('role') ? ' selected' : '' }}>{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
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
