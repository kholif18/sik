@extends('partial.master')

@section('title')
    User
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            User
        </a>
    </li>
@endsection

@section('content')
<div class="card">
    <div class="filter" style="padding-right: 20px">
        <button type="button" class="btn btn-success btn-sm add-user" data-bs-toggle="modal"
            data-bs-target="#add-user">
            <i class="bi bi-plus"></i> Add User
        </button>
    </div>
    <div class="card-body">
        <h5 class="card-title col-10">User</h5>
        <!-- Default Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">Level</th>
                    <th style="text-align: center;" scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ravaa Studio</td>
                    <td>ravaastd</td>
                    <td>ravaastudio@gmail.com</td>
                    <td>Admin</td>
                    <td style="text-align: center;">
                        <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rahmad Nur</td>
                    <td>rahmad</td>
                    <td>rahmadnur.kholifatur@gmail.com</td>
                    <td>Kepala</td>
                    <td style="text-align: center;">
                        <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>

@includeIf('user.modal-user')
@endsection