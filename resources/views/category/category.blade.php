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
            data-bs-target="#modal-category">
                <i class="bi bi-plus"></i> Add Category
            </button>
            <a href="{{ route('create-category') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Add Category</a>
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
                                {{-- <a href="{{ route('category-edit', ['category' => $category->id]) }}"class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> --}}
                                <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{ $category->id }}"></i></button>
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

@push('scripts')
    <script>
        // function addCategory() {
        //     $('#modal-category').modal('show');
        //     $('#modal-category .modal-title').text('Add Category')
        // }
        $(document).ready(function() {
            $(document).ready(function() {
                $(document).on('click', '.add-category', function(event) {
                    event.preventDefault();
                    $('#modal-category').modal('show');
                });
            });
        //     // Handle ketika user meng-klik tombol "Add Category"
        //     $(document).on('click', '.add-category', function(event) {
        //         event.preventDefault();

        //         // Set url action to add
        //         const httpUrl = $(this).attr('data-url');
        //         $(document).find('#form-category').attr('action', httpUrl);
        //         $(document).find('#form-category').attr('method', 'post');
        //         $('#add-category .modal-title').text('Add category');

        //         // Reset form input from previous
        //         $(document).find('#form-category input[name="name"]').val('');

        //         // Show modal form
        //         $('#add-category').modal('show');
        //     });
        });
    </script>
@endpush
