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
                    <div class="card-header text-center">{{ __('KOM') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Dashboard KPI Modal --}}
                        <div class="modal fade" id="dashboardkpi" tabindex="-1" role="dialog"
                            aria-labelledby="dashboardkpilabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="dashboardkpilabel">Dashboard KPI</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered border-red">
                                            <caption>Updated: Feb 2022</caption>
                                            <thead>
                                                <tr class="text-center align-middle">
                                                    <th rowspan="2">Bil</th>
                                                    <th rowspan="2">Elemen KPI</th>
                                                    <th rowspan="2">Isi Kandungan / Perincian</th>
                                                    <th rowspan="2">Penerangan KPI (%)</th>
                                                    <th rowspan="2">Jumlah Peratusan (%)</th>
                                                    <th rowspan="2">Pegangan</th>
                                                    <th colspan="2">Status</th>
                                                    <th rowspan="2">Peratusan</th>
                                                    <th rowspan="2">Pecahan KPI</th>
                                                    <th rowspan="2">KPI</th>
                                                    <th rowspan="2">Catatan</th>
                                                </tr>
                                                <tr>
                                                    <th>Baik</th>
                                                    <th>Rosak</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center align-middle">
                                                <tr>
                                                    <td rowspan="5">1</td>
                                                    <td rowspan="5">Sistem</td>
                                                    <td style="text-align: left">P4 (NC2 Terminal)</td>
                                                    <td>25</td>
                                                    <td rowspan="5">100</td>
                                                    <td>17</td>
                                                    <td>17</td>
                                                    <td>0</td>
                                                    <td>100.00</td>
                                                    <td>25.00</td>
                                                    <td rowspan="5">100.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">C4iTacX</td>
                                                    <td>25</td>
                                                    <td>51</td>
                                                    <td>51</td>
                                                    <td>0</td>
                                                    <td>100.00</td>
                                                    <td>25.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Network Centric Operation (NCO)</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>4</td>
                                                    <td>0</td>
                                                    <td>100.00</td>
                                                    <td>5.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Emel Rasmi TLDM</td>
                                                    <td>35</td>
                                                    <td>4</td>
                                                    <td>4</td>
                                                    <td>0</td>
                                                    <td>100.00</td>
                                                    <td>35.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Sistem ICT TLDM</td>
                                                    <td>10</td>
                                                    <td>17</td>
                                                    <td>17</td>
                                                    <td>0</td>
                                                    <td>100.00</td>
                                                    <td>10.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4">2</td>
                                                    <td rowspan="4">Peralatan</td>
                                                    <td style="text-align: left">Komunikasi Satelit</td>
                                                    <td>45</td>
                                                    <td rowspan="4">100</td>
                                                    <td>87</td>
                                                    <td>83</td>
                                                    <td>4</td>
                                                    <td>95.40</td>
                                                    <td>42.93</td>
                                                    <td rowspan="4">90.53</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Pengoperasian Radio</td>
                                                    <td>35</td>
                                                    <td>1015</td>
                                                    <td>851</td>
                                                    <td>163</td>
                                                    <td>83.34</td>
                                                    <td>29,34</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Pengoperasian GIRN</td>
                                                    <td>15</td>
                                                    <td>846</td>
                                                    <td>835</td>
                                                    <td>11</td>
                                                    <td>98.70</td>
                                                    <td>14.80</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Pengoperasian Telefon</td>
                                                    <td>5</td>
                                                    <td>3993</td>
                                                    <td>2753</td>
                                                    <td>1240</td>
                                                    <td>68.95</td>
                                                    <td>3.45</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- CENTRIXS --}}
                        <div class="modal fade" id="centrixs" tabindex="-1" role="dialog"
                            aria-labelledby="centrixslabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="centrixslabel">CENTRIXS</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <figure class="highcharts-figure">
                                            <div id="container"></div>
                                            <table id="datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Markas</th>
                                                        <th>Jan</th>
                                                        <th>Feb</th>
                                                        <th>Mac</th>
                                                        <th>Apr</th>
                                                        <th>Mei</th>
                                                        <th>Jun</th>
                                                        <th>Jul</th>
                                                        <th>Ogos</th>
                                                        <th>Sept</th>
                                                        <th>Okt</th>
                                                        <th>Nov</th>
                                                        <th>Dis</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Markas Pemerintahan Armada Barat</th>
                                                        <td>4</td>
                                                        <td>5</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Markas Pemerintahan Armada Timur</th>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Markas Pemerintahan Kapal Selam</th>
                                                        <td>3</td>
                                                        <td>2</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 offset-md-4">
                                <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                    data-target="#dashboardkpi">
                                    DASHBOARD KPI
                                </button>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-3">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        RMPNET
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        TRC5200
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        P4 NC2 TERMINAL
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        C4ITACKX PANGKALAN
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        C4ITACKX KAPAL
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        NCO
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        EMEL RASMI TLDM
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        SISTEM ICT TLDM
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        TERMINAL X-BAND
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        SIMKAD FBB
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        DEMS
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        RADIO KAPAL
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        RADIO PANGKALAN
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        KESELURUHAN JENIS RADIO
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        PENGOPERASIAN GIRN
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        ATT
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        GIRN UNIT
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        TERMINAL FBB
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        PENGOPERASIAN TELEFON
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        IBU SAWAT TELEFON
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        KAT2100 SK700
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-outline-primary my-2 w-100" data-toggle="modal"
                                    data-target="#centrixs">
                                    CENTRIXS
                                </button>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        LATIHAN
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href=""><button class="btn btn-outline-primary my-2 w-100">
                                        KOMUNIKASI SATELIT
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        Highcharts.chart('container', {
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'GRAF PENGGUNAAN PERALATAN CENTRIXS'
            },
            xAxis: {
                allowDecimals: false,
                title: {
                    text: 'BULAN'
                }
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'KEKERAPAN PENGGUNAAN'
                }
            },
            plotOptions: {
                column: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    </script>
@endsection
