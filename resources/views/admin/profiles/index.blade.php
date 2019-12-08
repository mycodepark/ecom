@extends('admin.app')

@section('title') {{ $pageTitle }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ $pageTitle }} : {{ $profile->name }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    @foreach ($errors->all() as $error)
        <p class="text-danger">{{ $error }}</p>
    @endforeach 
    <div class="row user">
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">Genel Bilgiler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#avatar" data-toggle="tab">Resim Gücelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Şifre Güncele</a></li>
                    <li class="nav-item"><a class="nav-link" href="#new_admin" data-toggle="tab">Yeni Kullanıcı Ekle</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    @include('admin.profiles.includes.general')
                </div>
                <div class="tab-pane fade" id="avatar">
                    @include('admin.profiles.includes.avatar')
                </div>
                <div class="tab-pane fade" id="change_password">
                    @include('admin.profiles.includes.changepassword')
                </div>
                <div class="tab-pane fade" id="new_admin">
                    @include('admin.profiles.includes.newuser')
                </div>

            </div>
        </div>
    </div>
@endsection
