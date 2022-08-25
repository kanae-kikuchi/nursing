@extends('layouts.app')
@section('title', '')

@section('content')

<div class="container">
    <h1>ケア記録作成画面</h1>
    <div class="form-group row">
        <label class="col-md-2">ケアの項目</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2">開始日時</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="start_at" value="{{ old('start_at') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2">終了日時</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="end_at" value="{{ old('end_at') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2">内容</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="content" value="{{ old('content') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2">担当したケアマネ</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="staff_id" value="{{ old('staff_id') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2">利用者</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
        </div>
    </div>
    <button class="btn btn-primary">登録</button>
    <a class="btn btn-outline-primary" href="{{ action('Admin\ReportController@index') }}">戻る</a>
    </form>
</div>
@endsection