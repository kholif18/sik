@extends('partial.master')

@section('title')
    Add Category
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href="{{ route('category') }}">
            Category
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Add Category
        </a>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title col-10">Add Category</h5>
            <div class="row">
                <div class="col-5">
                    <form action="">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Category</label>
                            <div class="col-sm-8">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Category" required>
                            </div>
                        </div>
                        <button id="reset-form" type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-paper-plane"></i>
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection