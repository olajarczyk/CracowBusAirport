@extends('admin.admin_master') <!-- folder admin > admin_master.blade.php -->
@section('admin')

<div class="page-content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
@if (Session::has('success'))
<div class="alert alert-success text-center">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
<p>{{ Session::get('success') }}</p>
</div>
@endif
<div class="card">
<div class="card-body"> 
<h4 class="card-title">Przystanki</h4>
<form action="{{ url('admin/cennik/stops') }}" method="POST">
@csrf
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<table class="table table-bordered" id="dynamicAddRemove">  
<tr>
<th>Przystanek</th>
<th>Cena</th>
</tr>
<tr>  
<td><input type="text" name="moreFields[0][stops]" placeholder="Wpisz przystanek" class="form-control" /></td>  
<td><input type="text" name="moreFields[0][price]" placeholder="Wpisz cenę" class="form-control" /></td> 
<td><button type="button" name="add" id="add-btn" class="btn btn-success">Dodaj wiersz</button></td>  
</tr> 
</table> 
<button type="submit" class="btn btn-success">Zapisz</button>
</form>
<script type="text/javascript">
var i = 0;
$("#add-btn").click(function(){
++i;
$("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+i+'][stops]" placeholder="Wpisz przystanek" class="form-control" /></td><tr><td><input type="text" name="moreFields['+i+'][price]" placeholder="Wpisz cenę" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Usuń</button></td></tr>');
});
$(document).on('click', '.remove-tr', function(){  
$(this).parents('tr').remove();
});  
</script>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="card">
<div class="card-body"> 
<h4 class="card-title">Dzielnice</h4>
<form action="{{ url('admin/cennik') }}" method="POST">
@csrf
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<table class="table table-bordered" id="dynamicAddRemoveDistrict">  
<tr>
<th>Dzielnica</th>
<th>Cena</th>
</tr>
<tr>  
<td><input type="text" name="Fields[0][districts]" placeholder="Wpisz dzielnicę" class="form-control" /></td>  
<td><input type="text" name="Fields[0][price]" placeholder="Wpisz cenę" class="form-control" /></td> 
<td><button type="button" name="add" id="add-btn-district" class="btn btn-success">Dodaj wiersz</button></td>  
</tr> 
</table> 
<button type="submit" class="btn btn-success">Zapisz</button>
</form>
<script type="text/javascript">
var i = 0;
$("#add-btn-district").click(function(){
++i;
$("#dynamicAddRemoveDistrict").append('<tr><td><input type="text" name="Fields['+i+'][districts]" placeholder="Wpisz dzielnicę" class="form-control" /></td><tr><td><input type="text" name="Fields['+i+'][price]" placeholder="Wpisz cenę" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Usuń</button></td></tr>');
});
$(document).on('click', '.remove-tr', function(){  
$(this).parents('tr').remove();
});  
</script>
</div>
</div>
</div>
</div>

<!-- Display DATA -->

<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body"> 
<h4 class="card-title">Przystanki</h4>
<table class="table table-bordered">  
<tr>
<th>Przystanek</th>
<th>Cena</th>
</tr>
<tr>  
@foreach ($stops as $stop)
<td>{{ $stop->stops }}</td>
<td>{{ $stop->price }}</td>
</tr> 
@endforeach
</table> 
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body"> 
<h4 class="card-title">Dzielnice</h4>                            
<table class="table table-bordered">  
<tr>
<th>Dzielnica</th>
<th>Cena</th>
</tr>
<tr>  
@foreach ($districts as $item)
<td>{{ $item->districts }}</td>
<td>{{ $item->price }}</td>
</tr> 
@endforeach
</table> 

</div>
</div>
</div>
</div>
<script src="{{ asset('backend/assets/js/editable-table.js')}}"></script>
@endsection('admin')


