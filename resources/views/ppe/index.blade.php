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
                <div class="card-header text-center">{{ __('STATUS PERALATAN PEPERANGAN ELEKTRONIK') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="row text-center">
                            <div class="col">
                                <a href="ppetldm"><button class="btn btn-outline-primary my-2 w-100">
                                        PPE TLDM
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdlekiu"><button class="btn btn-outline-primary my-2 w-100">
                                        KD LEKIU
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdjebat"><button class="btn btn-outline-primary my-2 w-100">
                                          KD JEBAT
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdkedah"><button class="btn btn-outline-primary my-2 w-100">
                                        KD KEDAH
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdpahang"><button class="btn btn-outline-primary my-2 w-100">
                                        KD PAHANG
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdperak"><button class="btn btn-outline-primary my-2 w-100">
                                        KD PERAK
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdterengganu"><button class="btn btn-outline-primary my-2 w-100">
                                        KD TERENGGANU
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdkelantan"><button class="btn btn-outline-primary my-2 w-100">
                                        KD KELANTAN
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdselangor"><button class="btn btn-outline-primary my-2 w-100">
                                        KD SELANGOR
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdlekir"><button class="btn btn-outline-primary my-2 w-100">
                                        KD LEKIR
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdkasturi"><button class="btn btn-outline-primary my-2 w-100">
                                        KD KASTURI
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdmahawangsa"><button class="btn btn-outline-primary my-2 w-100">
                                        KD MAHAWANGASA
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdsriinderasakti"><button class="btn btn-outline-primary my-2 w-100">
                                        KD SRI INDERA SAKTI
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdkeris"><button class="btn btn-outline-primary my-2 w-100">
                                        KD KERIS
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdsundang"><button class="btn btn-outline-primary my-2 w-100">
                                        KD SUNDANG
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdtar"><button class="btn btn-outline-primary my-2 w-100">
                                        KD TAR
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdtrz"><button class="btn btn-outline-primary my-2 w-100">
                                        KD TRZ
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdbadik"><button class="btn btn-outline-primary my-2 w-100">
                                        KD BADIK
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="kdrencong"><button class="btn btn-outline-primary my-2 w-100">
                                        KD RENCONG
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="skuadron501"><button class="btn btn-outline-primary my-2 w-100">
                                        Skuadron 501
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="skuadron502"><button class="btn btn-outline-primary my-2 w-100">
                                        Skuadron 502
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
