@extends('partial.master')

@section('title')
    Profile
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Profile
        </a>
    </li>
@endsection

@section('content')
@endsection