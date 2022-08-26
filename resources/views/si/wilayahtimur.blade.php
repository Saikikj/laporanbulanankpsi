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
                <div class="card-header text-center">{{ __('WILAYAH TIMUR') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        {{-- Status Semasa Timur Modal --}}
                        <div class="modal fade" id="statussemasatimur" tabindex="-1" role="dialog"
                            aria-labelledby="statussemasatimurlabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="statussemasatimurlabel">STATUS SEMASA WILAYAH TIMUR</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-r1ab{color:#00B050;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-t1kr{background-color:#D9D9D9;font-style:italic;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-10jc{color:#F00;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-c8of{background-color:#D8D8D8;font-weight:bold;text-align:left;vertical-align:bottom}
.tg .tg-ukly{background-color:#D9D9D9;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-ic03{background-color:#D8D8D8;font-weight:bold;text-align:center;vertical-align:bottom}
.tg .tg-xqah{background-color:#D8D8D8;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-ktyi{background-color:#FFF;text-align:left;vertical-align:top}
.tg .tg-nrix{text-align:center;vertical-align:middle}
.tg .tg-u2rs{background-color:#FF0;font-weight:bold;text-align:right;vertical-align:top}
.tg .tg-6o9b{background-color:#FF0;font-weight:bold;text-align:center;vertical-align:middle}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-ukly" rowspan="4">Siri</th>
    <th class="tg-ukly" rowspan="4">Markas</th>
    <th class="tg-ukly" colspan="4">Desktop</th>
    <th class="tg-t1kr" colspan="4">Notebook</th>
  </tr>
  <tr>
    <th class="tg-ukly" rowspan="3">Kelayakan</th>
    <th class="tg-ukly" colspan="3">Sedia Ada</th>
    <th class="tg-ukly" rowspan="3">Kelayakan</th>
    <th class="tg-ukly" colspan="3">Sedia Ada</th>
  </tr>
  <tr>
    <th class="tg-ic03" colspan="2">Usia (Tahun)</th>
    <th class="tg-ukly" rowspan="2">Jumlah</th>
    <th class="tg-c8of" colspan="2">Usia (Tahun)</th>
    <th class="tg-xqah" rowspan="2">Jumlah</th>
  </tr>
  <tr>
    <th class="tg-ukly">&lt; 5</th>
    <th class="tg-ukly">&gt; 5</th>
    <th class="tg-ukly">&lt; 5</th>
    <th class="tg-ukly">&gt; 5</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-baqh">1</td>
    <td class="tg-ktyi"> Markas Pemerintahan&nbsp;&nbsp;&nbsp;Armada Timur</td>
    <td class="tg-nrix">93</td>
    <td class="tg-r1ab">35</td>
    <td class="tg-10jc">75</td>
    <td class="tg-nrix">110</td>
    <td class="tg-nrix">417</td>
    <td class="tg-r1ab">17</td>
    <td class="tg-10jc">6</td>
    <td class="tg-nrix">23</td>
  </tr>
  <tr>
    <td class="tg-baqh">2</td>
    <td class="tg-ktyi"> Markas Wilayah Laut 2</td>
    <td class="tg-nrix">36</td>
    <td class="tg-r1ab">6</td>
    <td class="tg-10jc">109</td>
    <td class="tg-nrix">115</td>
    <td class="tg-nrix">209</td>
    <td class="tg-r1ab">2</td>
    <td class="tg-10jc">8</td>
    <td class="tg-nrix">10</td>
  </tr>
  <tr>
    <td class="tg-baqh">3</td>
    <td class="tg-ktyi"> Markas Logistik Timur</td>
    <td class="tg-nrix">28</td>
    <td class="tg-r1ab">23</td>
    <td class="tg-10jc">54</td>
    <td class="tg-nrix">77</td>
    <td class="tg-nrix">161</td>
    <td class="tg-r1ab">5</td>
    <td class="tg-10jc">6</td>
    <td class="tg-nrix">11</td>
  </tr>
  <tr>
    <td class="tg-baqh">4</td>
    <td class="tg-ktyi"> Markas Pemerintahan Kapal&nbsp;&nbsp;&nbsp;Selam</td>
    <td class="tg-nrix">22</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">105</td>
    <td class="tg-nrix">105</td>
    <td class="tg-nrix">172</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">9</td>
    <td class="tg-nrix">9</td>
  </tr>
  <tr>
    <td class="tg-baqh">5</td>
    <td class="tg-ktyi"> Markas Pangkalan Kota&nbsp;&nbsp;&nbsp;Kinabalu</td>
    <td class="tg-nrix">17</td>
    <td class="tg-r1ab">15</td>
    <td class="tg-10jc">67</td>
    <td class="tg-nrix">82</td>
    <td class="tg-nrix">89</td>
    <td class="tg-r1ab">2</td>
    <td class="tg-10jc">5</td>
    <td class="tg-nrix">7</td>
  </tr>
  <tr>
    <td class="tg-baqh">6</td>
    <td class="tg-ktyi"> Armada TLDM &amp;&nbsp;&nbsp;&nbsp;Pangkalan Hadapan</td>
    <td class="tg-nrix">0</td>
    <td class="tg-r1ab">3</td>
    <td class="tg-10jc">20</td>
    <td class="tg-nrix">23</td>
    <td class="tg-nrix">347</td>
    <td class="tg-r1ab">21</td>
    <td class="tg-10jc">85</td>
    <td class="tg-nrix">106</td>
  </tr>
  <tr>
    <td class="tg-u2rs" colspan="2">Jumlah</td>
    <td class="tg-6o9b">196</td>
    <td class="tg-6o9b">82</td>
    <td class="tg-6o9b">430</td>
    <td class="tg-6o9b">512</td>
    <td class="tg-6o9b">1,395</td>
    <td class="tg-6o9b">47</td>
    <td class="tg-6o9b">119</td>
    <td class="tg-6o9b">166</td>
  </tr>
</tbody>
</table>


                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 offset-md-4">
                                <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                    data-target="#statussemasatimur">
                                    STATUS SEMASA
                                </button>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <a href="wilayahtimur/mpatimur"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Armada Timur
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahtimur/mwl2"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Wilayah Laut 2
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahtimur/mklt"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Logistik Timur
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahtimur/mpks"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Kapal Selam
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahtimur/mpkk"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pangkalan Kota Kinabalu
                                    </button>
                                </a>
                            </div>

                            <div class="col">
                                <a href="/si/armadapoh/armadapoh"><button class="btn btn-outline-primary my-2 w-100">
                                        Armada TLDM dan Pangkalan Hadapan
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
                <a href="/si/index"><button type="button" class="btn btn-default">Back</button>
                {{-- <a href="#" class="previous round">&#8249;</a> --}}
            </div>
        </div>

    </div>

@endsection
