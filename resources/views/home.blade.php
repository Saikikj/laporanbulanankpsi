@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row text-center">
                            <div class="col-lg-4">
                                <a href="si/index"><button class="btn btn-outline-white border-0">
                                    <img src="icon/computer.png" width="200px" height="200px">
                                    <h5>PERALATAN SI</h4>
                                </button>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="kom/index"><button class="btn btn-outline-white border-0">
                                    <img src="icon/satellite.png" width="200px" height="200px">
                                    <h5>PERALATAN KOM</h5>
                                </button>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="p4/index"><button class="btn btn-outline-white border-0">
                                    <h5>PERALATAN P4</h5>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
