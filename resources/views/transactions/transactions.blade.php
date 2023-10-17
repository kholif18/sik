@extends('partial.master')

@section('title')
    Transactions
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Transactions
        </a>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="filter" style="padding-right: 20px">
            <button type="button" class="btn btn-success btn-sm add-transaction" data-bs-toggle="modal"
                data-bs-target="#add-transaction">
                <i class="bi bi-plus"></i> Add Transaction
            </button>
        </div>
        <div class="card-body">
            <h5 class="card-title col-10">Transactions</h5>
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Date</th>
                        <th rowspan="2">Category</th>
                        <th rowspan="2">Information</th>
                        <th colspan="2">Type</th>
                        <th rowspan="2">Option</th>
                    </tr>
                    <tr class="text-center">
                        <th>Income</th>
                        <th>expenditure</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">1</th>
                        <td class="text-center">12-08-2023</td>
                        <td class="text-center">Transportation</td>
                        <td class="text-center">Beli bensin</td>
                        <td class="text-center">-</td>
                        <td class="text-center">Rp 200.000</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center">2</th>
                        <td class="text-center">29-08-2023</td>
                        <td class="text-center">Penjualan</td>
                        <td class="text-center">Laba Penjualan</td>
                        <td class="text-center">Rp 500.000</td>
                        <td class="text-center">-</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <th class="text-center">3</th>
                        <td class="text-center">02-09-2023</td>
                        <td class="text-center">Tagihan BPJS</td>
                        <td class="text-center">Bayar BPJS</td>
                        <td class="text-center">-</td>
                        <td class="text-center">Rp 70.000</td>
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
    @include('transactions.modal-transaction')
@endsection
