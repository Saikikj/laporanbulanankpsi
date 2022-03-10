@extends('layouts.loginlayout')
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-3 text-center">
                            <h2><img src="icon/tldm.svg" width="250px" height="250px"></h2>
                            <br>
                            <strong>
                                <h5 class="text-white-100 mb-5">SISTEM LAPORAN BULANAN KPSI</h5>
                            </strong>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-white-50 text-md-end">{{ __('Nama Pengguna') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}"
                                            oninvalid="this.setCustomValidity('Sila isi ruangan ini')"
                                            oninput="setCustomValidity('')" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-white-50 text-md-end">{{ __('Kata Laluan') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            oninvalid="this.setCustomValidity('Sila isi ruangan ini')"
                                            oninput="setCustomValidity('')" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0 text-center">
                                    <div class="col mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Log Masuk') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
