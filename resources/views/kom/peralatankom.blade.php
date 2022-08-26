    @extends('layouts.app')

@section('content')
    <style>
        .modal-body {
            background-color: #000000;
            background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
        }

        .table,
        caption {
            color: white;
        }

        #container {
            height: 400px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            margin: 1rem;
        }

        #datatable {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
        }

        #datatable caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        #datatable th {
            font-weight: 600;
            padding: 0.5em;
        }

        #datatable td,
        #datatable th,
        #datatable caption {
            padding: 0.5em;
            border: 1px solid #000;
        }

        #datatable thead tr,
        #datatable tr {
            background: #ebebeb;
        }

        button {
            min-width: 100px;
        }

    </style>
       <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">{{ __('STATUS PERALATAN KOMUNIKASI') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="modal-body">

                            <table class="table table-bordered border-red">
                                {{-- <caption>Updated: Feb 2022</caption> --}}
                                <thead>
                                    <tr class="text-center align-middle">
                                        <th rowspan="2">Siri</th>
                                        <th rowspan="2">Markas</th>
                                        <th colspan="2">Status</th>
                                        <th rowspan="2">Jumlah</th>
                                    </tr>
                                    <tr class="text-center align-middle">
                                        <th>Baik</th>
                                        <th>Rosak</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center align-middle">
                                    <tr>
                                        <td>1</td>
                                        <td button style="text-align: left; width:100%" type="button" class="btn btn-primary">
                                            <strong>Pemerintahan Armada Barat</strong></button></td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td button style="text-align: left; width:100%" type="button" class="btn btn-primary">
                                            <strong>Pemerintahan Armada Timur</strong></button></td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td button style="text-align: left; width:100%" type="button" class="btn btn-primary">
                                            <strong>Markas Wilayah Laut 1</strong></button></td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td button style="text-align: left; width:100%" type="button" class="btn btn-primary">
                                            <strong>Markas Wilayah Laut 2</strong></button></td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a href="index"><button>
                            <i class="icon/back.png"></i>
                            back
                        </button>
                        {{-- <a href="index"><button class="btn btn-outline-black border-12">
                            <h5>back</h4>
                        </button> --}}
    @endsection
