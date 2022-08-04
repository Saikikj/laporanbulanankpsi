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

/* creating a dropdown menu for UNIT choices */

.dropbtn {
  background-color: #2f72de;
  color: white;
  padding: 15px;
  font-size: 15px;
  border: none;
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



</style>

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
                // '<td><input type="text" class="form-control" name="bil" id="bil"></td>' + //will fill from db count when add new RECORD PERALATAN
                // '<td style="text-align: left"><input type="text" class="form-control" name="model" id="model"></td>' + 
                '<td><input type="number" class="form-control" name="Tahun" id="Tahun"></td>' +
                '<td><input type="number" class="form-control" name="PejabatPTL" id="PejabatPTL"></td>' +
                '<td><input type="number" class="form-control" name="PejabatTPTL" id="PejabatTPTL"></td>' +
                '<td><input type="number" class="form-control" name="Undang-Undang" id="Undang-Undang"></td>' +
                '<td><input type="number" class="form-control" name="BSM" id="BSM"></td>' +
                '<td><input type="number" class="form-control" name="Tadbir" id="Tadbir"></td>' +
                '<td><input type="number" class="form-control" name="Protela KL" id="Protela KL"></td>' +
                '<td><input type="number" class="form-control" name="KDSG" id="KDSG"></td>' +
                '<td><input type="number" class="form-control" name="RISLA" id="RISLA"></td>' +
                '<td><input type="number" class="form-control" name="BOS" id="BOS"></td>' +
                '<td><input type="number" class="form-control" name="RMN SPC" id="RMN SPC"></td>' +
                '<td><input type="number" class="form-control" name="MAT" id="MAT"></td>' +
                '<td><input type="number" class="form-control" name="JUTRA" id="JUTRA"></td>' +
                '<td><input type="number" class="form-control" name="PP" id="PP"></td>' +
                '<td><input type="number" class="form-control" name="KPSI" id="KPSI"></td>' +
                '<td><input type="number" class="form-control" name="BIJ" id="BIJ"></td>' +
                '<td>' + actions + '</td>' +
                
            '</tr>';
            $("table").append(row);		
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // // Add row on add button click
        // $(document).on("click", ".add", function(){
        //     var empty = false;
        //     var input = $(this).parents("tr").find('input[type="text"]');
        //     input.each(function(){
        //         if(!$(this).val()){
        //             $(this).addClass("error");
        //             empty = true;
        //         } else{
        //             $(this).removeClass("error");
        //         }
        //     });
        //     $(this).parents("tr").find(".error").first().focus();
        //     if(!empty){
        //         input.each(function(){
        //             $(this).parent("td").html($(this).val());
        //         });			
        //         $(this).parents("tr").find(".add, .edit").toggle();
        //         $(".add-new").removeAttr("disabled");
        //     }		
        // });
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
       <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">{{ __('MARKAS WILAYAH LAUT 3') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h3>Peralatan P4 Markas Wilayah Laut 3</h3></div>
                                <!-- <h5>Pilih Unit untuk Kemaskini</h5> -->
                                <div class="col-sm-4">
                                    <a href="addnew"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                                </div>
                            </div>
                        </div>  
                        <table class="table table-bordered">
                            <thead style="text-align: center" >
                            
                             
                                                     
                            </thead>

                            
                            
                        </table>
                                                
                        <a href="/p4/mawilla3"><button type="button" class="btn btn-default">Back</button>
                        <a href="/p4/index"><button type="button" class="btn btn-default">Home</button>
                        <!-- <a href="/si/peralatanmktl/kemaskiniperalatanmktl"><button type="button" class="btn btn-default" style="float:right;">Kemaskini Peralatan</button> -->
                        
                        

                        </a>
                    </div>
                </div>
            </div>
        </div>
       </div>




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
                       
    @endsection