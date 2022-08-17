@extends('layouts.app')
@section('title', '')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="row">
                <table class="table">
                    <td><a href="{{ action('Admin\UserController@edit') }}">編集</a></td>

                    <thead>
                        
                        <tr>
                            <th></th>
                            <th>氏名</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{ action('Admin\StaffController@edit') }}">編集</a></td>
                            <td>東京　太郎</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="{{ action('Admin\StaffController@edit') }}">編集</a></td>
                            <td>横浜　和子</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection