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

 <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="penggunaan" id="penggunaan"></td>' + //auto no when add
                '<td><input type="text" class="form-control" name="mula" id="mula"></td>' +
                '<td><input type="text" class="form-control" name="tamat" id="tamat"></td>' +
                '<td><input type="text" class="form-control" name="tamat" id="tamat"></td>' +
                '<td><input type="text" class="form-control" name="tamat" id="tamat"></td>' +
                '<td><input type="text" class="form-control" name="tamat" id="tamat"></td>' +
                '<td><input type="text" class="form-control" name="tamat" id="tamat"></td>' +
                '<td>' + actions + '</td>' +
            '</tr>';
            $("table").append(row);
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function(){
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    empty = true;
                } else{
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tr").find(".error").first().focus();
            if(!empty){
                input.each(function(){
                    $(this).parent("td").html($(this).val());
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").removeAttr("disabled");
            }
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });
    });
</script>
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
                                <div class="col-sm-8"><h2>Fleet Broadband <b>(FBB)</b></h2></div>
                                <div class="col-sm-4">
                                    {{-- <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button> --}}
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered">
                <thead style="text-align: center">
                    <tr>
                        <th colspan="8">Status Peralatan Terminal</th>
                    </tr>
                    <tr>
                        <th rowspan="2">Markas/Unit</th>
                        <th rowspan="2">Penempatan</th>
                        <th rowspan="2">Jumlah Pegangan <br> Terminal</th>
                        <th rowspan="2">Status Pengoperasian</th>
                        <th rowspan="2">Catatan</th>
                        <th rowspan="2">Tindakan</th>
                    </tr>
                    {{-- <tr><th rowspan="2">Baik</th>
                    <th rowspan="2">Rosak</th>
                    </tr> --}}
                </thead>
                <tbody style="text-align: center">
                    @foreach ($dataterminal as $data)
                            <tr>
                                <td>{{ $data->markasunit }}</td>
                                <td>{{ $data->penempatan }}</td>
                                <td>{{ $data->jumlahpeganganterminal }}</td>
                                <td>{{ $data->statuspengoperasian}}</td>
                                <td>{{ $data->catatan }}</td>
                        <td>
                            <a href="/kom/fbb/delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                            <a href="/kom/fbb/edit/{{ $data->id }}" class="btn btn-danger">Edit</a>
                        </td>
                                {{-- <td><a href="/kom/fbb/{{ $data->id }}"><i class="material-icons">&#xE254;</i></a>
                                    <form method="post" action="/kom/fbb/{{ $data->id }}">
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

            <table class="table table-bordered">
                <thead style="text-align: center">
                    <tr>
                        <th colspan="20">Status SIM KAD</th>
                    </tr>
                    <tr>
                        <th rowspan="2">ID Rujukan <br>SIM KAD</th>
                        <th rowspan="2">Markas Terminal<br> (FBB) Beroperasi</th>
                        <th rowspan="2">Kuota Data<br> Sebulan</th>
                        <th rowspan="2">No. SIM KAD</th>
                        <th rowspan="2">Pakej Langganan</th>
                        <th rowspan="2">Tarikh Tamat Langganan</th>
                        <th rowspan="2">Baki Quota</th>
                        <th rowspan="2">Catatan </th>
                        <th rowspan="2">Tindakan </th>

                    </tr>
                </thead>
                <tbody style="text-align: center">
                    @foreach ($datasimkad as $data)
                            <tr>
                                <td>{{ $data->markasunit }}</td>
                                <td>{{ $data->idrujukan }}</td>
                                <td>{{ $data->kuotadata }}</td>
                                <td>{{ $data->nosimkad }}</td>
                                <td>{{ $data->pakejlangganan}}</td>
                                <td>{{ $data->tarikhtamatlangganan }}</td>
                                <td>{{ $data->bakiquota }}</td>
                                <td>{{ $data->catatan }}</td>
                        <td>
                            <a href="/kom/fbb/deleteSimkad/{{ $data->id }}" class="btn btn-danger">Delete</a>
                            <a href="/kom/fbb/editSimkad/{{ $data->id }}" class="btn btn-danger">Edit</a>
                        </td>
                                {{-- <td><a href="/kom/fbb/{{ $data->id }}"><i class="material-icons">&#xE254;</i></a>
                                    <form method="post" action="/kom/fbb/{{ $data->id }}">
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
            <a href="/kom/fbb/addnew"><button type="button" class="btn btn-default" style="float:right;">Tambah Peralatan</button>
            <a href="/kom/index"><button type="button" class="btn btn-default">back</button>
                {{-- <a href="#" class="previous round">&#8249;</a> --}}

    @endsection
