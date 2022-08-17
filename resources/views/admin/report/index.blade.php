@extends('layouts.app')
@section('title', '')

@section('content')

<div class="container">
    <h2>レポートトップ</h2>
    <a class="btn btn-primary" href="{{ action('Admin\ReportController@create') }}">新規作成</a>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>日付</th>
                            <th></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

    @endsection