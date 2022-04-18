@extends('layouts.bgcss')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @include('layouts.dataperibadimenuadmin', compact('notentera'))

                <div class="my-3">
                    <div class="card">
                        <div class="card-header" style="background:url(/images/bg3.jpeg) no-repeat; color: white;">
                            <strong>{{ __('Kemaskini Akademik') }}</strong>
                            <i onclick="history.back()" class="bi bi-x-circle-fill float-right"
                                style="color:#a9a9a9; cursor:pointer"></i>
                        </div>

                        <div class="card-body">
                            <form method="POST"
                                action="/kadperibadi/{{ $notentera }}/akademik/{{ $data->Tran_Akademik }}">
                                @csrf
                                @method('put')

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Peringkat') }}</label>

                                    <div class="col-md-6">
                                        <select for="Peringkat" name="Peringkat" class="form-control">
                                            <option value="{{ $data->Peringkat }}">
                                                {{ $data->Peringkat }}</option>

                                            @foreach ($akademik as $akademiks)
                                                <?php
                                                echo "<option value='" . $akademiks->Jenis_Akademik . "'>" . $akademiks->Jenis_Akademik . '</option>';
                                                ?>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Jurusan"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                                    <div class="col-md-6">
                                        <input id="Jurusan" type="text"
                                            class="form-control @error('Jurusan') is-invalid @enderror" name="Jurusan"
                                            value="{{ $data->Jurusan }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Universiti"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Universiti') }}</label>

                                    <div class="col-md-6">
                                        <input id="Universiti" type="text"
                                            class="form-control @error('Universiti') is-invalid @enderror" name="Universiti"
                                            value="{{ $data->Universiti }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Tarikh_Mula"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Mula') }}</label>

                                    <div class="col-md-6">
                                        <input type="date" name="Tarikh_Mula" class="form-control"
                                            value="{{ $data->Tarikh_Mula ? \Carbon\Carbon::createFromDate($data->Tarikh_Mula)->format('Y-m-d') : null }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Tarikh_Tamat"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Tamat') }}</label>

                                    <div class="col-md-6">
                                        <input type="date" name="Tarikh_Tamat" class="form-control"
                                            value="{{ $data->Tarikh_Tamat ? \Carbon\Carbon::createFromDate($data->Tarikh_Tamat)->format('Y-m-d') : null }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="CGPA"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Keputusan/CGPA') }}</label>

                                    <div class="col-md-6">
                                        <input id="CGPA" type="text"
                                            class="form-control @error('CGPA') is-invalid @enderror" name="CGPA"
                                            value="{{ $data->CGPA }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Kedudukan"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Kedudukan') }}</label>

                                    <div class="col-md-6">
                                        <input id="Kedudukan" type="text"
                                            class="form-control @error('Kedudukan') is-invalid @enderror" name="Kedudukan"
                                            value="{{ $data->Kedudukan }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Tajaan"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Tajaan') }}</label>

                                    <div class="col-md-6">
                                        <select id="Tajaan" name="Tajaan"
                                            class="form-control @error('Tajaan') is-invalid @enderror">
                                            <option value="{{ $data->Tajaan }}">{{ $data->Tajaan }}</option>
                                            <option value="Separuh Masa - Sendiri">Separuh Masa - Sendiri</option>
                                            <option value="Sepenuh Masa - Sendiri">Sepenuh Masa - Sendiri</option>
                                            <option value="Separuh Masa - JPA">Separuh Masa - JPA</option>
                                            <option value="Sepenuh Masa - JPA">Sepenuh Masa - JPA</option>
                                            <option value="Separuh Masa - TLDM<">Separuh Masa - TLDM</option>
                                            <option value="Sepenuh Masa - TLDM">Sepenuh Masa - TLDM</option>
                                            <option value="Sepenuh Masa - Luar Negara">Sepenuh Masa - Luar Negara</option>
                                            <option value="Lain-Lain">Lain-Lain</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Catatan"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Catatan') }}</label>

                                    <div class="col-md-6">
                                        <input id="Catatan" type="text"
                                            class="form-control @error('Catatan') is-invalid @enderror" name="Catatan"
                                            value="{{ $data->Catatan }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" style="width:100px">
                                            {{ __('Kemaskini') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
