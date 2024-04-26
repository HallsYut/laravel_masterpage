@extends('master')

@section('title')
    Child
@endsection

@section('head')
    <style>
        .ch-content{
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <h1 class="ch-content">ข้อมูลจากหน้า Child Page</h1>
@endsection
@include('script')