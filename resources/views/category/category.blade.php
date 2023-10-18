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
                        <th style="width: 7%;" scope="col">No</th>
                        <th style="width: 77%;" scope="col">Category</th>
                        <th style="width: 15%; text-align: center;" scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $category->name }}</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>

    @includeIf('category.modal-category')
@endsection
