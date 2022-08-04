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
                <div class="card-header text-center">{{ __('STATUS PERALATAN P4') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="row text-center">
                            <div class="col">
                                <a href="mawilla1"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Wilayah Laut 1
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mawilla2"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Wilayah Laut 2
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mawilla3"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Wilayah Laut 3  
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mksimpanan"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Simpanan
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mkpl"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pangkalan Lumut
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mktl"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Tentera Laut
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mklb"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Logistik Barat
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mpab"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Armada Barat
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mpat"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Armada Timur
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="mpks"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Kapal Selam
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="phn"><button class="btn btn-outline-primary my-2 w-100">
                                        Pusat Hidrografi Nasional
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
                <a href="/home"><button type="button" class="btn btn-default">Back</button>
                {{-- <a href="#" class="previous round">&#8249;</a> --}}
            </div>
        </div>
        
    </div>
    
@endsection
