@extends('admin.admin_master') <!-- folder admin > admin_master.blade.php -->
@section('admin')

<div class="page-content">
<div class="container-fluid">
<div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <center>
                                    <br>
                                    <img class="rounded-circle avatar-lg" src="{{(!empty($adminData->profile_image)) ? url('upload/admin_image/'.$adminData->profile_image) : url('upload/no_image.jpg')}}" alt="Card image cap">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title">Imię: {{$adminData->name}}</h4>
                                        <hr>
                                        <h4 class="card-title">E-mail: {{$adminData->email}}</h4>
                                        <hr>
                                        <a href="{{route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light" style="background-color: #008037; border-color: #008037">Edytuj</a>
                                    </div>
                                </div>
                            </div>
                        </div>

</div>
</div>

@endsection('admin')


