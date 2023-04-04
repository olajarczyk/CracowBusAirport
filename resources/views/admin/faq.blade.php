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
<h4 class="card-title">FAQ</h4>
<form action="{{ url('admin/faq') }}" method="POST">
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
<th>Pytanie</th>
<th>Odpowiedź</th>
<th>Kategoria</th>
</tr>
<tr>  
<td><input type="text" name="FAQ[0][questions]" placeholder="Wpisz pytanie" class="form-control" /></td>  
<td><input type="text" name="FAQ[0][answears]" placeholder="Wpisz odpowiedź" class="form-control" /></td> 
<td><input type="text" name="FAQ[0][category]" placeholder="Wpisz kategorię" class="form-control" /></td> 
<td><button type="button" name="add" id="add-btn" class="btn btn-success">Dodaj wiersz</button></td>  
</tr> 
</table> 
<button type="submit" class="btn btn-success">Zapisz</button>
</form>
<script type="text/javascript">
var i = 0;
$("#add-btn").click(function(){
++i;
$("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+i+'][questions]" placeholder="Wpisz pytanie" class="form-control" /></td><td><input type="text" name="moreFields['+i+'][answears]" placeholder="Wpisz odpowiedź" class="form-control" /></td><td><input type="text" name="moreFields['+i+'][category]" placeholder="Wpisz kategorię" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Usuń</button></td></tr>');
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
<h4 class="card-title">FAQ</h4>
<table class="table table-bordered">  
<tr>
<th>Pytanie</th>
<th>Odpowiedź</th>
<th>Kategoria</th>
</tr>
<tr>  
@foreach ($faq as $faq)
<td>{{ $faq->questions }}</td>
<td>{{ $faq->answears }}</td>
<td>{{ $faq->category }}</td>
</tr> 
@endforeach
</table> 
</div>
</div>
</div>
</div>
<script src="{{ asset('backend/assets/js/editable-table.js')}}"></script>
@endsection('admin')


