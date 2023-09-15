@extends('User_template.layouts.template')
@section('page_title')
Eflyer-User Profile
@endsection
@section('main-content')
<h1>Welcome {{Auth::user()->name}}</h1>
@endsection
