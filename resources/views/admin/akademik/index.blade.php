@extends('layouts.bgcss')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @include('layouts.dataperibadimenuadmin', compact('notentera'))
            <br>
            @include('layouts.message')

            <div class="my-3">
                <div class="card">
                    <div class="card-header" style="background:url(/images/bg3.jpeg) no-repeat; color: white;">
                        <strong>{{ __('Akademik') }}</strong>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-condensed table-header rounded-table">
                            <thead class="table-secondary">
                                <tr class="text-center">
                                    <th class="align-middle" rowspan="2">Siri</th>
                                    <th class="align-middle" rowspan="2">Peringkat</th>
                                    <th class="align-middle" rowspan="2">Jurusan</th>
                                    <th class=" align-middle" rowspan="2">Universiti</th>
                                    <th class="text-center" colspan="2">Tarikh </th>
                                    <th class=" align-middle" rowspan="2">Tempoh </th>
                                    <th class=" align-middle" rowspan="2">CGPA</th>
                                    <th class=" align-middle" rowspan="2">Kedudukan</th>
                                    <th class=" align-middle" rowspan="2">Tajaan</th>
                                    <th class="text-center align-middle" rowspan="2">Catatan</th>

                                    @if (in_array($peranan, array(1, 2, 3, 10, 20, 30)))
                                        <th class="text-center align-middle" rowspan="2">Tindakan</th>
                                    @endif

                                </tr>

                                <tr>
                                    <th class="text-center">Mula</th>
                                    <th class="text-center">Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- This is for display data --}}
                                @foreach ($akademik as $key => $data)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $data->Peringkat ?? '' }}</td>
                                        <td>{{ $data->Jurusan ?? '' }}</td>
                                        <td>{{ $data->Universiti ?? '' }}</td>
                                        <td class="text-center">
                                            <?php
                                            setlocale(LC_ALL, 'ms');

                                            $hari = date('j', strtotime($data->Tarikh_Mula));

                                            $bulan = date('n', strtotime($data->Tarikh_Mula));

                                            $tahun = date('Y', strtotime($data->Tarikh_Mula));
                                            ?>

                                            @if ($data->Tarikh_Mula == null)
                                                {{ '' }}
                                            @else
                                                @if ($bulan == 8)
                                                    {{ strftime('%e %B %Y', mktime(0, 0, 0, $bulan, $hari, $tahun)) ?? '' }}
                                                @else
                                                    {{ strftime('%e %b %Y', mktime(0, 0, 0, $bulan, $hari, $tahun)) ?? '' }}
                                                @endif
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <?php
                                            setlocale(LC_ALL, 'ms');

                                            $hari = date('j', strtotime($data->Tarikh_Tamat));

                                            $bulan = date('n', strtotime($data->Tarikh_Tamat));

                                            $tahun = date('Y', strtotime($data->Tarikh_Tamat));
                                            ?>

                                            @if ($data->Tarikh_Tamat == null)
                                                {{ '' }}
                                            @else
                                                @if ($bulan == 8)
                                                    {{ strftime('%e %B %Y', mktime(0, 0, 0, $bulan, $hari, $tahun)) ?? '' }}
                                                @else
                                                    {{ strftime('%e %b %Y', mktime(0, 0, 0, $bulan, $hari, $tahun)) ?? '' }}
                                                @endif
                                            @endif

                                        </td>
                                        <td style="width:5rem;" class="text-center">
                                            <?php
                                            $mula = $data->Tarikh_Mula;
                                            $tamat = $data->Tarikh_Akhir;

                                            $d1 = new DateTime($mula);
                                            $d2 = new DateTime($tamat);
                                            $interval = $d2->diff($d1);

                                            if ($interval->format('%y') == '0') {
                                                if ($interval->format('%m') == '0') {
                                                    if ($interval->format('%d') == '0') {
                                                        echo '';
                                                    } else {
                                                        echo $interval->format('%d Hari') ?? '';
                                                    }
                                                } elseif ($interval->format('%d') == '0') {
                                                    echo $interval->format('%m Bulan') ?? '';
                                                } else {
                                                    echo $interval->format('%m Bulan %d Hari') ?? '';
                                                }
                                            } elseif ($interval->format('%m') == '0') {
                                                if ($interval->format('%d') == '0') {
                                                    echo $interval->format('%y Tahun') ?? '';
                                                } else {
                                                    echo $interval->format('%y Tahun %d Hari') ?? '';
                                                }
                                            } elseif ($interval->format('%d') == '0') {
                                                echo $interval->format('%y Tahun %m Bulan') ?? '';
                                            } else {
                                                echo $interval->format('%y Tahun %m Bulan %d Hari') ?? '';
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">{{ round($data->CGPA, 2) ?? '' }}</td>
                                        <td class="text-center">{{ $data->Kedudukan ?? '' }}</td>
                                        <td>{{ $data->Tajaan ?? '' }}</td>
                                        <td>{{ $data->Catatan ?? '' }}</td>

                                        @if (in_array($peranan, array(1, 2, 3, 10, 20, 30)))
                                            <td class="text-center">
                                                <div class="d-flex flex-row justify-content-center">
                                                    <a href="/kadperibadi/{{$notentera}}/akademik/{{ $data->Tran_Akademik }}/edit"
                                                        class="btn btn-warning" style="width:auto"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <form method="post" action="/kadperibadi/{{$notentera}}/akademik/{{ $data->Tran_Akademik }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Anda pasti mahu padam rekod ini?')"><i
                                                                class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @if (in_array($peranan, array(1, 2, 3, 10, 20, 30)))
                            <a href="/kadperibadi/{{$notentera}}/akademik/create" style="width:100px" class="btn btn-primary">Tambah</a>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
