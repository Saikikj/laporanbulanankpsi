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

    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">{{ __('STATUS PERALATAN ICT') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        

                        
                        <div class="row text-center">
                            <div class="col">
                                <a href="wilayahbarat"><button class="btn btn-outline-primary my-2 w-100">
                                        WILAYAH BARAT
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahtimur"><button class="btn btn-outline-primary my-2 w-100">
                                        WILAYAH TIMUR
                                    </button>
                                </a>
                            </div>
                        <div class="row text-center">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-4">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
