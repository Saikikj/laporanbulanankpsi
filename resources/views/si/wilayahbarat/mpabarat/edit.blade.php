@extends('layouts.app')

@section('content')

{{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
{{-- <title>Bootstrap Table with Add and Delete Row Feature</title> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

<style>

body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
/*

.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}

table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}

 */

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

/* ------------creating a dropdown menu for UNIT choices------------- */

.dropbtn {
  background-color: #2f72de;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: #000000;
  /* border-radius: 15px; */
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
  right: 0;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


/* Dropdown Button 2 */
.dropbtn2 {
  background-color: #2f72de;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: #000000;
  /* border-radius: 15px; */
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown2 {
    float: right;
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown2-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown2-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown2-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
  }

  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn2')) {
      var dropdowns = document.getElementsByClassName("dropdown2-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>

<!-- remember to check script again  -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="bil" id="bil"></td>' + //will fill from db count when add new RECORD PERALATAN
                '<td style="text-align: left"><input type="text" class="form-control" name="model" id="model"></td>' +
                '<td><input type="text" class="form-control" name="nosiri" id="nosiri"></td>' +
                '<td><input type="text" class="form-control" name="issi" id="issi"></td>' +
                '<td><input type="text" class="form-control" name="tarikhterima" id="tarikhterima"></td>' +
                '<td><input type="text" class="form-control" name="status" id="status"></td>' +
                '<td><input type="text" class="form-control" name="lokasi" id="lokasi"></td>' +
                '<td><input type="text" class="form-control" name="catatan" id="catatan"></td>' +
                '<td><input type="text" class="form-control" name="operasi" id="opreasi"></td>' +
                '<td><input type="text" class="form-control" name="lokasisemasa" id="lokasisemasa"></td>' +
                '<td>' + actions + '</td>' +
            '</tr>';
            $("table").append(row);
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function(){
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    empty = true;
                } else{
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tr").find(".error").first().focus();
            if(!empty){
                input.each(function(){
                    $(this).parent("td").html($(this).val());
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").removeAttr("disabled");
            }
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });

    });
</script>
<script>//dropdown Menu
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
            }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                    }
                else {
                    a[i].style.display = "none";
                }
            }
        } </script>


<!-- -----------------------------------------------------END OF CSS AND SCRIPT SECTIONS---------------------------------------------- -->
       <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">{{ __('MARKAS PEMERINTAHAN ARMADA BARAT') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h3>Kemaskini Peralatan Markas Pemerintahan Armada Barat</h3></div>
                                <!-- <div class="col-sm-4">
                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                </div> -->
                            </div>
                        </div>
                            <!-- INPUT -->
                            <form action="/si/wilayahbarat/mpabarat/update/{{$data->id}}" method="POST" id="userformcreate">
                                @csrf
                        <div class="container-fluid">
                            <div class="row justify-content-center"></div>
                                <div class="form-group row">
                                        <label for="unit"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Unit') }}</label>
                                        <div class="col-md-6">

                                    <select class="form-control @error('unit') is-invalid @enderror" name="unit"
                                        >
                                        <option value="{{ $data->unit }}" selected hidden>{{ $data->unit }}</option>
                                        {{-- <option value="" disabled selected>Sila Pilih Unit</option> --}}
                                        <option value="MPA BARAT">MPA BARAT</option>
                                        <option value="PUSTAKMAR">PUSTAKMAR</option>
                                        <option value="PPE TLDM">PPE TLDM</option>
                                        <option value="SKTLDM LUMUT">SKTLDM LUMUT</option>
                                        <option value="SKTLDM PARIT">SKTLDM PARIT</option>
                                        <option value="SKTLDM SETIAWAN">SKTLDM SETIAWAN</option>
                                        <option value="KP TLDM">KP TLDM</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group row">
                                        <label for="jenisperalatan"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Jenis Peralatan') }}</label>
                                        <div class="col-md-6">

                                            <select class="form-control @error('jenisperalatan') is-invalid @enderror"
                                                name="jenisperalatan">
                                                <option value="{{ $data->jenisperalatan }}" selected hidden>{{ $data->jenisperalatan }}</option>
                                                {{-- <option value="" disabled selected>Sila Pilih Jenis Peralatan --}}
                                                </option>
                                                <option value="Komputer Meja">Komputer Meja</option>
                                                <option value="Komputer Riba">Komputer Riba</option>
                                                <option value="Pengimbas">Pengimbas</option>
                                                <option value="Pencetak">Pencetak</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div id="">
                                        <div class="form-group row">
                                            <label for="penempatan"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Penempatan') }}</label>

                                            <div class="col-md-6">
                                                <input id="penempatan" type="text"
                                                    class="form-control @error('penempatan') is-invalid @enderror"
                                                    name="penempatan" value="{{ $data->penempatan }}"
                                                    placeholder="Peralatan ditempatkan di mana?" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jenama"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Jenama') }}</label>

                                            <div class="col-md-6">
                                                <input id="jenama" type="text"
                                                    class="form-control @error('jenama') is-invalid @enderror"
                                                    name="jenama" value="{{ $data->jenama }}"
                                                    placeholder="jenama Peralatan" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="cpu"
                                                class="col-md-4 col-form-label text-md-right">{{ __('CPU') }}</label>

                                            <div class="col-md-6">
                                                <input id="cpu" type="text"
                                                    class="form-control @error('cpu') is-invalid @enderror"
                                                    name="cpu" value="{{ $data->cpu }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="monitor"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Monitor') }}</label>

                                            <div class="col-md-6">
                                                <input id="monitor" type="text"
                                                    class="form-control @error('monitor') is-invalid @enderror"
                                                    name="monitor" value="{{ $data->monitor }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tahun"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Tahun') }}</label>

                                            <div class="col-md-6">
                                                <input id="tahun" type="number" class="form-control @error('tahun') is-invalid @enderror"
                                                name="tahun" value="{{$data->tahun}}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nopendaftaranasetkewpa"
                                                class="col-md-4 col-form-label text-md-right">{{ __('No. Pendaftaran Aset (KEWPA)') }}</label>

                                            <div class="col-md-6">
                                                <input id="nopendaftaranasetkewpa" type="text"
                                                    class="form-control @error('nopendaftaranasetkewpa') is-invalid @enderror"
                                                    name="nopendaftaranasetkewpa" value="{{ $data->nopendaftaranasetkewpa }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="status"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                            <div class="col-md-6">
                                                <select class="form-control @error('status') is-invalid @enderror"
                                                    name="status" >
                                                    <option value="{{ $data->status }}" selected hidden>{{ $data->status }}</option>
                                                    {{-- <option value="" disabled selected>Sila Pilih status</option> --}}
                                                    <option value="Baik">Baik</option>
                                                    <option value="Rosak">Rosak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cadangan"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Cadangan') }}</label>

                                            <div class="col-md-6">
                                                <select class="form-control @error('cadangan') is-invalid @enderror"
                                                    name="cadangan" >
                                                    <option value="{{ $data->cadangan }}" selected hidden>{{ $data->cadangan }}</option>
                                                    {{-- <option value="" disabled selected>Sila Pilih Cadangan --}}
                                                    </option>
                                                    <option value="Guna">Guna</option>
                                                    <option value="Lupus">Lupus</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="catatan"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Catatan') }}</label>

                                            <div class="col-md-6">
                                                <input id="catatan" type="text"
                                                    class="form-control @error('catatan') is-invalid @enderror"
                                                    name="catatan" value="{{ $data->catatan }}">

                                                <!-- <input type="radio" style="width:auto" class="btn btn-primary">
                                            {{ __('GUNA') }}</button>
                                            <input type="radio" style="width:auto" class="btn btn-primary">
                                            {{ __('LUPUS') }}</button> -->


                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" style="width:auto" class="btn btn-primary">
                                                    {{ __('Kemaskini') }}</button>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        <a href="/si/wilayahbarat/mpabarat/"><button type="button" class="btn btn-default">Back</button>
                        <a href="/si/index"><button type="button" class="btn btn-default">Home</button></a>
                    </div>
                </div>
            </div>
        </div>
       </div>






    @endsection
