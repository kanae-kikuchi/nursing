@extends('layouts.app')
@section('title', '')

@section('content')
<div class="container">
    <h2>利用者一覧</h2>
    <a class="btn btn-primary" href="{{ action('Admin\UserController@create') }}">新規作成</a>
    
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>氏名</th>
                            <th>年齢</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{ action('Admin\UserController@edit') }}">編集</a></td>
                            <td>東京　太郎</td>
                            <td>75</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="{{ action('Admin\UserController@edit') }}">編集</a></td>
                            <td>横浜　和子</td>
                            <td>81</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection