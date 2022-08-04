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
                            <div class="col-lg-15">
                                <p>1.	Markas Tentera Laut melalui Bahagian KPSI (N6) sedang membangunkan sebuah pangkalan data (database) lengkap bagi peralatan asas ICT yang merangkumi komputer meja (PC), komputer riba (laptop) dan mesin pencetak (printer) milik markas/unit TLDM.</p>
<p>
2.	Sehubungan itu, semua Pentadbir Sistem TLDMNet (PST) dan Pegawai Komputer Unit (PKU) atau wakil bermandat dari markas/unit TLDM hendaklah melengkapkan penyata peralatan asas ICT di worksheet (PC, Laptop dan Printer).
</p><p>
3.	PST setiap Markas adalah bertanggungjawab untuk memastikan semua unit bawah naungan melengkapkan maklumat ini.
</p><p>
4.	Hanya peralatan asas ICT yang diperolehi daripada markas, sumbangan dan hadiah sahaja perlu disenaraikan. Manakala peralatan ICT yang diperolehi secara sewaan tidak perlu dimasukkan di dalam penyata database ini.
</p><p>
5.	Bagi memudahkan PST, PKU dan wakil bermandat, Bahagian ini telah mewujudkan format worksheet bagi setiap peralatan asas ICT yang perlu diisikan. Contoh pengisian bagi setiap peralatan asas ICT turut disediakan. 
</p><p>
6.	PST, PKU dan wakil bermandat adalah diingatkan agar tidak menambah atau mengubah format yang disediakan ini.
</p><p>
7.	Penyata Peralatan Asas ICT TLDM yang telah lengkap diisi hendaklah dimajukan melalui e-mel ke mktl-asetict@navy.mil.my  sebelum 15 Jul 21.
</p><p>
Sebarang permasalahan atau keraguan sila berhubung dengan pegawai dan anggota berikut:
</p><p>
a.    Lt Kdr Mohamad Hazril bin Fadzil TLDM 
       PS 2 Pembangunan
       019-431 5709
       </p><p>
b.    Lt Mohamad Nur Nazmi bin Zulkifly TLDM
       PS 3 Pembangunan
       013-588 3820
       </p><p>
c.    P/PW II TNL Mazuan bin Hj Daud
       Penyelia Pembangunan
       019-911 9904 
       </p><p>
d.    BM TNL Faraliza bte Ishak
       Bintara Pengurusan
       018-208 7311
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
