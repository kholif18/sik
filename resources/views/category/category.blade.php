@extends('partial.master')

@section('title')
    Category
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Category
        </a>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="filter" style="padding-right: 20px">
            <button type="button" class="btn btn-success btn-sm add-category" data-bs-toggle="modal"
                data-bs-target="#add-category">
                <i class="bi bi-plus"></i> Add Category
            </button>
        </div>
        <div class="card-body">
            <h5 class="card-title col-10">Category</h5>
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%;" scope="col">No</th>
                        <th style="width: 85%;" scope="col">Cateory</th>
                        <th style="width: 10%; text-align: center;" scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Designer</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Developer</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Finance</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>HR</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Dynamic Division Officer</td>
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

    @includeIf('category.modal-category')
@endsection
