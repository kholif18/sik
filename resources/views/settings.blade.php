@extends('partial.master')

@section('title')
    Settings
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Settings
        </a>
    </li>
@endsection

@section('content')
@endsection