@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
/* .table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
} */
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
/* table.table {
    table-layout: fixed;
} */
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
.btn-default {
  font-size: 13px;
  color: rgba(22, 21, 25, 0.75);
  letter-spacing: 1px;
  line-height: 15px;
  border: 2px solid rgba(20, 18, 26, 0.75);
  border-radius: 40px;
  background: transparent;
  transition: all 0.3s ease 0s;
}

</style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    {{-- <div class="card-header text-center">{{ __('PERALATAN CENTRIXS') }}</div> --}}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2>Peralatan <b>Centrixs</b></h2></div>
                                
                            </div>
                        </div>

                        <table class="table table-bordered">
                <thead style="text-align: center">
                    <tr>
                        <th colspan="6">Status Peralatan</th>
                    </tr>
                    <tr>
                        <th rowspan="2">Markas</th>
                        <th colspan="2">Jenis Peralatan</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Catatan</th>
                        <th rowspan="2">Tindakan</th>
                    </tr>
                    <tr>
                        <th>Fitted</th>
                        <th>Flyway Kit</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    @foreach ($dataperalatan as $data)
                    <tr>
                        <td>{{ $data->markas }}</td>
                        <td>{{ $data->fitted }}</td>
                        <td>{{ $data->flywaykit }}</td>
                        <td>{{ $data->status}}</td>
                        <td>{{ $data->catatan }}</td>
                        <td>
                            <a href="/kom/centrixs/delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                            <a href="/kom/centrixs/edit/{{ $data->id }}" class="btn btn-danger">Edit</a>
                        </td>
                        {{-- <td><a href="/kom/centrixs/{{ $data->id }}"><i class="material-icons">&#xE254;</i></a>
                            <form method="post" action="/kom/centrixs/{{ $data->id }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="delete"
                                    onclick="return confirm('Anda pasti mahu padam rekod ini?')"><i class="material-icons">&#xE872;</i></button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead style="text-align: center" >
                    <tr>
                        <th colspan="6">Rekod Penggunaan</th>
                    </tr>
                    <tr>
                        <th rowspan="2">Bulan</th>
                        <th rowspan="2">Penggunaan <br>Latihan/Eksesais/Operasi</th>
                        <th colspan="2">Tarikh</th>
                        <th rowspan="2">Catatan</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Mula</th>
                        <th>Tamat</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    @foreach ($datarekod as $data)
                    <tr>
                        <td>{{ $data->bulan }}</td>
                        <td>{{ $data->penggunaan }}</td>
                        <td>{{ $data->mula}}</td>
                        <td>{{ $data->tamat }}</td>
                        <td>{{ $data->catatan }}</td>
                        <td>
                            <a href="/kom/centrixs/deleteRekod/{{ $data->id }}" class="btn btn-danger">Delete</a>
                            <a href="/kom/centrixs/editRekod/{{ $data->id }}" class="btn btn-danger">Edit</a>
                        </td>
                        {{-- <td><a href="/kom/centrixs/{{ $data->id }}"><i class="material-icons">&#xE254;</i></a>
                            <form method="post" action="/kom/centrixs/{{ $data->id }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="delete"
                                    onclick="return confirm('Anda pasti mahu padam rekod ini?')"><i class="material-icons">&#xE872;</i></button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="/kom/centrixs/addnew"><button type="button" class="btn btn-default" style="float:right;">Tambah Peralatan</button>
            <a href="/kom/index"><button type="button" class="btn btn-default">back</button>
                {{-- <a href="#" class="previous round">&#8249;</a> --}}

    @endsection
