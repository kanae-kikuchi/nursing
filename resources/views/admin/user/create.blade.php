@extends('layouts.app')
@section('title', '')

@section('content')
<div class="container">
    <h1>利用者作成画面</h1>
    <form action="{{ action('Admin\UserController@add') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label class="col-md-2">氏名</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">パスワード</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="password" value="{{ old('password') }}">
            </div>
        </div>
        <!-- <div class="form-group row">
            <label class="col-md-2">生年月日</label>
            <div class="col-md-10">
                <input type="date" class="form-control" name="birthday_at" value="{{ old('birthday_at') }}">
            </div>
        </div> -->
        <div class="form-group row">
            <label class="col-md-2">既往歴</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="medical_history" value="{{ old('medical_history') }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">要介護度</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="care_level" value="{{ old('care_level') }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">認知症の有無</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="is_dementia" value="{{ old('is_dementia') }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">薬</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="medicine" value="{{ old('medicine') }}">
            </div>
        </div>
        <button class="btn btn-primary">登録</button>
        <a class="btn btn-outline-primary" href="{{ action('Admin\UserController@index') }}">戻る</a>


    </form>
</div>
@endsection