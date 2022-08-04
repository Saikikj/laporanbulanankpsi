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
                <div class="card-header text-center">{{ __('WILAYAH BARAT') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Status Semasa Barat Modal --}}
                        <div class="modal fade" id="statussemasabarat" tabindex="-1" role="dialog"
                            aria-labelledby="statussemasabaratlabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title text-white" id="statussemasabaratlabel">STATUS SEMASA WILAYAH BARAT</h5>
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
.tg .tg-e9uh{background-color:#D8D8D8;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-10jc{color:#F00;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-ukly{background-color:#D9D9D9;font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-ic03{background-color:#D8D8D8;font-weight:bold;text-align:center;vertical-align:bottom}
.tg .tg-ktyi{background-color:#FFF;text-align:left;vertical-align:top}
.tg .tg-nrix{text-align:center;vertical-align:middle}
.tg .tg-olpo{color:#00B050;text-align:center;vertical-align:middle}
.tg .tg-u2rs{background-color:#FF0;font-weight:bold;text-align:right;vertical-align:top}
.tg .tg-r9yx{background-color:#FF0;font-weight:bold;text-align:center;vertical-align:bottom}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-ukly" rowspan="4">Siri</th>
    <th class="tg-ukly" rowspan="4">Markas</th>
    <th class="tg-t1kr" colspan="4">Desktop</th>
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
    <th class="tg-ic03" colspan="2">Usia (Tahun)</th>
    <th class="tg-e9uh" rowspan="2">Jumlah</th>
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
    <td class="tg-ktyi"> Markas Tentera Laut</td>
    <td class="tg-nrix">168</td>
    <td class="tg-olpo">55</td>
    <td class="tg-10jc">468</td>
    <td class="tg-nrix">523</td>
    <td class="tg-nrix">593</td>
    <td class="tg-r1ab">19</td>
    <td class="tg-10jc">30</td>
    <td class="tg-nrix">49</td>
  </tr>
  <tr>
    <td class="tg-baqh">2</td>
    <td class="tg-ktyi"> Markas Pemerintahan&nbsp;&nbsp;&nbsp;Armada Barat</td>
    <td class="tg-nrix">41</td>
    <td class="tg-olpo">53</td>
    <td class="tg-10jc">137</td>
    <td class="tg-nrix">190</td>
    <td class="tg-nrix">307</td>
    <td class="tg-r1ab">3</td>
    <td class="tg-10jc">27</td>
    <td class="tg-nrix">30</td>
  </tr>
  <tr>
    <td class="tg-baqh">3</td>
    <td class="tg-ktyi"> Markas Wilayah Laut 1</td>
    <td class="tg-nrix">41</td>
    <td class="tg-olpo">74</td>
    <td class="tg-10jc">16</td>
    <td class="tg-nrix">90</td>
    <td class="tg-nrix">228</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">26</td>
    <td class="tg-nrix">26</td>
  </tr>
  <tr>
    <td class="tg-baqh">4</td>
    <td class="tg-ktyi"> Pusat Hidrografi Nasional</td>
    <td class="tg-nrix">22</td>
    <td class="tg-olpo">4</td>
    <td class="tg-10jc">63</td>
    <td class="tg-nrix">67</td>
    <td class="tg-nrix">130</td>
    <td class="tg-r1ab">3</td>
    <td class="tg-10jc">1</td>
    <td class="tg-nrix">4</td>
  </tr>
  <tr>
    <td class="tg-baqh">5</td>
    <td class="tg-ktyi"> Markas Pemerintahan&nbsp;&nbsp;&nbsp;Pendidikan dan Latihan TLDM</td>
    <td class="tg-nrix">410</td>
    <td class="tg-olpo">40</td>
    <td class="tg-10jc">773</td>
    <td class="tg-nrix">813</td>
    <td class="tg-nrix">479</td>
    <td class="tg-r1ab">3</td>
    <td class="tg-10jc">39</td>
    <td class="tg-nrix">42</td>
  </tr>
  <tr>
    <td class="tg-baqh">6</td>
    <td class="tg-ktyi"> Markas Pangkalan Lumut</td>
    <td class="tg-nrix">42</td>
    <td class="tg-olpo">24</td>
    <td class="tg-10jc">164</td>
    <td class="tg-nrix">188</td>
    <td class="tg-nrix">233</td>
    <td class="tg-r1ab">5</td>
    <td class="tg-10jc">11</td>
    <td class="tg-nrix">16</td>
  </tr>
  <tr>
    <td class="tg-baqh">7</td>
    <td class="tg-ktyi"> Markas Udara TLDM</td>
    <td class="tg-nrix">62</td>
    <td class="tg-olpo">5</td>
    <td class="tg-10jc">56</td>
    <td class="tg-nrix">61</td>
    <td class="tg-nrix">121</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">1</td>
    <td class="tg-nrix">1</td>
  </tr>
  <tr>
    <td class="tg-baqh">8</td>
    <td class="tg-ktyi"> Markas Logistik Barat</td>
    <td class="tg-nrix">78</td>
    <td class="tg-olpo">40</td>
    <td class="tg-10jc">381</td>
    <td class="tg-nrix">421</td>
    <td class="tg-nrix">440</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">26</td>
    <td class="tg-nrix">26</td>
  </tr>
  <tr>
    <td class="tg-baqh">9</td>
    <td class="tg-ktyi"> Markas Selam dan&nbsp;&nbsp;&nbsp;Peperangan Periuk Api</td>
    <td class="tg-nrix">11</td>
    <td class="tg-olpo">5</td>
    <td class="tg-10jc">47</td>
    <td class="tg-nrix">52</td>
    <td class="tg-nrix">62</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">6</td>
    <td class="tg-nrix">6</td>
  </tr>
  <tr>
    <td class="tg-baqh">10</td>
    <td class="tg-ktyi"> Markas Pemerintahan&nbsp;&nbsp;&nbsp;Pasukan Khas Laut</td>
    <td class="tg-nrix">20</td>
    <td class="tg-olpo">0</td>
    <td class="tg-10jc">47</td>
    <td class="tg-nrix">47</td>
    <td class="tg-nrix">103</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">4</td>
    <td class="tg-nrix">4</td>
  </tr>
  <tr>
    <td class="tg-nrix">11</td>
    <td class="tg-ktyi"> Markas Wilayah Laut 3</td>
    <td class="tg-nrix">27</td>
    <td class="tg-olpo">7</td>
    <td class="tg-10jc">102</td>
    <td class="tg-nrix">109</td>
    <td class="tg-nrix">139</td>
    <td class="tg-r1ab">3</td>
    <td class="tg-10jc">20</td>
    <td class="tg-nrix">23</td>
  </tr>
  <tr>
    <td class="tg-baqh">12</td>
    <td class="tg-ktyi"> Markas Pemerintahan&nbsp;&nbsp;&nbsp;Pasukan Simpanan TLDM</td>
    <td class="tg-nrix">12</td>
    <td class="tg-olpo">0</td>
    <td class="tg-10jc">18</td>
    <td class="tg-nrix">18</td>
    <td class="tg-nrix">55</td>
    <td class="tg-r1ab">0</td>
    <td class="tg-10jc">0</td>
    <td class="tg-nrix">0</td>
  </tr>
  <tr>
    <td class="tg-baqh">13</td>
    <td class="tg-ktyi"> Armada TLDM &amp;&nbsp;&nbsp;&nbsp;Pangkalan Hadapan</td>
    <td class="tg-nrix">0</td>
    <td class="tg-olpo">0</td>
    <td class="tg-10jc">0</td>
    <td class="tg-nrix">0</td>
    <td class="tg-nrix">308</td>
    <td class="tg-r1ab">11</td>
    <td class="tg-10jc">218</td>
    <td class="tg-nrix">229</td>
  </tr>
  <tr>
    <td class="tg-u2rs" colspan="2">Jumlah</td>
    <td class="tg-r9yx">934</td>
    <td class="tg-r9yx">307</td>
    <td class="tg-r9yx">2272</td>
    <td class="tg-r9yx">2,579</td>
    <td class="tg-r9yx">3,198</td>
    <td class="tg-r9yx">47</td>
    <td class="tg-r9yx">409</td>
    <td class="tg-r9yx">456</td>
  </tr>
</tbody>
</table>
                            
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-md-4 offset-md-4">
                                <button type="button" class="btn btn-outline-primary my-2" data-toggle="modal"
                                    data-target="#statussemasabarat">
                                    STATUS SEMASA
                                </button>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col">
                                <a href="wilayahbarat/mktl"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Tentera Laut
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mpabarat"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Armada Barat
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mwl1"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Wilayah Laut 1
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/phn"><button class="btn btn-outline-primary my-2 w-100">
                                        Pusat Hidrografi Nasional 
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mppl"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Pendidikan dan Latihan TLDM
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mkpl"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pangkalan Lumut
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mutldm"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Udara TLDM
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mklb"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Logistik Barat
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mksppa"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Selam dan Peperangan Periuk Api
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mkpaskal"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Pasukan Khas Laut
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mwl3"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Wilayah Laut 3 
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="wilayahbarat/mksimp"><button class="btn btn-outline-primary my-2 w-100">
                                        Markas Pemerintahan Pasukan Simpanan TLDM
                                    </button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/si/armadapoh"><button class="btn btn-outline-primary my-2 w-100">
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
