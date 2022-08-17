@extends('layouts.app')
@section('title', '')

@section('content')

<div class="container">
    <h2>ケアーマネージャー（編集）</h2>
    <form action="{{ action('Admin\StaffController@update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
            <label class="col-md-2">氏名</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
    </div>
    <div class="row">
            <label class="col-md-2">性別</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
            </div>
    </div>

    <button class="btn btn-primary">登録</button>
    <a class="btn btn-outline-primary" href="{{ action('Admin\StaffController@index') }}">戻る</a>
    </form>

</div>

@endsection