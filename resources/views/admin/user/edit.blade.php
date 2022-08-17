@extends('layouts.app')
@section('title', '')

@section('content')
<div class="container">
    <h1>利用者編集</h1>
    <form action="{{ action('Admin\UserController@update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <label class="col-md-2">氏名</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">年齢</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="age" value="{{ old('age') }}">
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">既往歴</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="medical_history" value="{{ old('medical_history') }}">
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">要介護度</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="care_revel" value="{{ old('care_revel') }}">
            </div>
        </div>
        <button class="btn btn-primary">更新</button>
        <a class="btn btn-outline-primary" href="{{ action('Admin\UserController@index') }}">戻る</a>
    </form>
</div>

    @endsection
