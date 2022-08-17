@extends('layouts.app')
@section('title', '')

@section('content')
<form action="{{ action('Admin\StaffController@add') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h2>ケアマネ作成画面</h2>
    <div class="form-group row">

        <div class="container">
            <label class="col-md-2">氏名</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>

        </div>
        <div class="container">
            <label class="col-md-2">性別</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
            </div>
            
        </div>
    </div>
    <button class="btn btn-primary">登録</button>
    <a class="btn btn-outline-primary" href="{{ action('Admin\StaffController@index') }}">戻る</a>

</form>

@endsection