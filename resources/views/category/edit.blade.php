@extends('partial.master')

@section('title')
    Edit Category
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
            Edit Category
        </a>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title col-10">Edit Category</h5>
            <div class="row">
                <div class="col-5">
                    <form action="{{ route('category-store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Category</label>
                            <div class="col-sm-8">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Category" value="{{ $category->name }}" required>
                            </div>
                        </div>
                        <a href="{{ route('category') }}" class="btn btn-secondary btn-sm"> Close</a>
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