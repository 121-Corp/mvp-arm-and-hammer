@extends('layouts.app')
@section('title')
<title>{{ config('app.name') ?? "Home" }}</title>
@endsection

@section('sidebar')
    @parent
@endsection
@section('content')

@endsection
