@extends('layouts.app')

@section('content')
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    {{-- <title>Bootstrap Table with Add and Delete Row Feature</title> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

    <style>
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }

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

        .table-wrapper {
            width: 700px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
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
    <!-- --------------------------show and hide script --------------------------- -->
    <script>
        $(function() {
            $("#peralatan_select").change(function() {
                if ($("#peralatan").is(":selected")) {
                    $("#peralatan_form").show();
                    // $("#peralatan_form").hide();
                } else {
                    $("#peralatan_form").hide();
                    // $("#peralatan_form").show();
                }
            }).trigger('change');
        });

        $(function() {
            $("#peralatan_select").change(function() {
                if ($("#rekod").is(":selected")) {
                    $("#rekod_form").show();
                    // $("#rekod_form").hide();
                } else {
                    $("#rekod_form").hide();
                    // $("#rekod_form").show();
                }
            }).trigger('change');
        });
    </script>

    <!-- -----------------------------------------------------END OF CSS AND SCRIPT SECTIONS---------------------------------------------- -->
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">{{ __('CENTRIXS') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h3>Kemaskini Peralatan CENTRIXS</h3>
                                </div>
                            </div>
                        </div>


                        <!-- INPUT -->
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div>&nbsp</div>
                                {{-- peralatan form --}}
                                <div id="peralatan_form" style="display:none;">
                                    <form action="/kom/centrixs/peralatan" method="POST" id="userformcreate">
                                        @csrf
                                        <select name="peralatan_select" id="peralatan_select">
                                            <option id="peralatan" value="peralatan">Peralatan Centrixs</option>
                                            <option id="rekod" value="rekod">Rekod Penggunaan</option>
                                        </select>
                                        <div class="form-group row">
                                            <label for="markas"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Markas') }}</label>

                                            <div class="col-md-6">
                                                <input id="markas" type="text"
                                                    class="form-control @error('markas') is-invalid @enderror"
                                                    name="markas" value="{{ old('markas') }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fitted"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Fitted') }}</label>

                                            <div class="col-md-6">
                                                <input id="fitted" type="text"
                                                    class="form-control @error('fitted') is-invalid @enderror"
                                                    name="fitted" value="{{ old('fitted') }}" placeholder="Jumlah Fitted"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="flywaykit"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Flyway Kit') }}</label>

                                            <div class="col-md-6">
                                                <input id="flywaykit" type="text"
                                                    class="form-control @error('flywaykit') is-invalid @enderror"
                                                    name="flywaykit" value="{{ old('flywaykit') }}"
                                                    placeholder="Jumlah Rosak" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="status"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                            <div class="col-md-6">
                                                <input id="status" type="text"
                                                    class="form-control @error('status') is-invalid @enderror"
                                                    name="status" value="{{ old('status') }}">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="catatan"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Catatan') }}</label>

                                            <div class="col-md-6">
                                                <input id="catatan" type="text"
                                                    class="form-control @error('catatan') is-invalid @enderror"
                                                    name="catatan" value="{{ old('catatan') }}">

                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" style="width:auto" class="btn btn-primary">
                                                    {{ __('Tambah') }}</button>
                                                <button type="reset" style="width:auto" class="btn btn-primary">
                                                    {{ __('Set Semula') }}</button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                            {{-- rekod form --}}
                            <div id="rekod_form" style="display:none;">
                                <form action="/kom/centrixs/rekodpenggunaan" method="POST" id="userformcreate">
                                    @csrf
                                    <select name="peralatan_select" id="peralatan_select">
                                        <option id="peralatan" value="peralatan">Peralatan Centrixs</option>
                                        <option id="rekod" value="rekod">Rekod Penggunaan</option>
                                    </select>
                                    <div class="form-group row">
                                        <label for="bulan"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Bulan') }}</label>

                                        <div class="col-md-6">
                                            <input id="bulan" type="text"
                                                class="form-control @error('bulan') is-invalid @enderror" name="bulan"
                                                value="{{ old('bulan') }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penggunaan"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Penggunaan') }}</label>
                                        <div class="col-md-6">
                                            <input id="penggunaan" type="text"
                                                class="form-control @error('penggunaan') is-invalid @enderror"
                                                name="penggunaan" value="{{ old('penggunaan') }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mula"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Mula') }}</label>

                                        <div class="col-md-6">
                                            <input id="mula" type="text"
                                                class="form-control @error('mula') is-invalid @enderror" name="mula"
                                                value="{{ old('mula') }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tamat"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Tamat') }}</label>

                                        <div class="col-md-6">
                                            <input id="tamat" type="text"
                                                class="form-control @error('tamat') is-invalid @enderror" name="tamat"
                                                value="{{ old('tamat') }}" required>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="catatan"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Catatan') }}</label>

                                        <div class="col-md-6">
                                            <input id="catatan" type="text"
                                                class="form-control @error('catatan') is-invalid @enderror" name="catatan"
                                                value="{{ old('catatan') }}">

                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" style="width:auto" class="btn btn-primary">
                                                {{ __('Tambah') }}</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <a href="/kom/centrixs/"><button type="button" class="btn btn-default">Back</button>
                                <a href="/p4/index"><button type="button" class="btn btn-default">Home</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
