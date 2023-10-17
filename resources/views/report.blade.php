@extends('partial.master')

@section('title')
    Report
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Report
        </a>
    </li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title col-10">Report Filter</h5>
        <form class="row g-3">
            <div class="col-4">
                <label for="fromDate" class="form-label">From Date</label>
                <input type="date" class="form-control" id="fromDate">
            </div>
            <div class="col-4">
                <label for="intilDate" class="form-label">Until Date</label>
                <input type="date" class="form-control" id="intilDate">
            </div>
            <div class="col-4">
                <label for="type" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">All Categories</option>
                    <option value="2">Transportation</option>
                    <option value="3">Sallary</option>
                </select>
            </div>
            <div class="col-sm-10">
                <button type="button" class="btn btn-success btn-sm">Apply</button>
            </div>
        </form>
    </div>
</div>
@endsection