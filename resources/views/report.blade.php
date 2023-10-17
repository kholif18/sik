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
                    <label for="category" class="form-label">Category</label>
                    <select id="category" class="form-select" aria-label="Default select example">
                        <option value="1">All Categories</option>
                        <option value="2">Transportation</option>
                        <option value="3">Sallary</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-block btn-primary">Apply</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title col-10">Report Data</h5>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 120px">From Date</td>
                        <td style="width: 20px">:</td>
                        <td style="width: 300px">22-08-2023</td>
                    </tr>
                    <tr>
                        <td>Until Date</td>
                        <td>:</td>
                        <td>22-08-2023</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>:</td>
                        <td>All Category</td>
                    </tr>
                </tbody>
            </table>
            <br>
            {{-- <button type="button" class="btn btn-sm btn-outline-primary" onclick="exportToPDF()"><i
                    class="bi bi-file-pdf"></i> Save as pdf</button>
            <button type="button" class="btn btn-sm btn-outline-primary" onclick="exportToCSV()"><i
                    class="bi bi-file-text"></i> Save as csv</button> --}}
            <button type="button" class="btn btn-sm btn-outline-primary" onclick="printDataTable()"><i
                    class="bi bi-printer"></i> Print</button>
            <!-- Default Table -->
            <table class="table" id="report-table">
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
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#report-table').DataTable();
        } );

        function printDataTable() {
        var table = $('#report-table').DataTable();
        table.button('.buttons-print').trigger();
    }
    </script>    
@endpush
