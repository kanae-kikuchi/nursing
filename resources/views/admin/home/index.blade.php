@extends('layouts.app')
@section('title', '')

@section('content')
<div class="container">
    <h2>トップページ</h2>
    <div class="row">
        @csrf
        <div class="form-group row">
            <button class="btn btn-primary">ケア記録作成画面</button>
        </div>
        <div class="form-group row">
            <button class="btn btn-primary">ケアマネ作成画面</button>
        </div>
        <div class="form-group row">
            <button class="btn btn-primary">利用者作成画面</button>
        </div>
    </div>
</div>

@endsection