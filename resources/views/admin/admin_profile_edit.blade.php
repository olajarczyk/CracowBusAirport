@extends('admin.admin_master') <!-- folder admin > admin_master.blade.php -->
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">
<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edycja profilu</h4>
                                        <form method="post" action="{{route('store.profile')}}" enctype="multipart/form-data">
                                            @csrf

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Imię</label>
                                            <div class="col-sm-10">
                                                <input name="name" class="form-control" type="text" value="{{$editData->name}}"  id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input name="email" class="form-control" type="text" value="{{$editData->email}}"  id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Ikonka</label>
                                            <div class="col-sm-10">
                                                <input name="profile_image" class="form-control" type="file"  id="image">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                            <img id="showImage" class="rounded avatar-lg" src="{{(!empty($editData->profile_image)) ? url('upload/admin_image/'.$editData->profile_image) : url('upload/no_image.jpg')}}" alt="Card image cap">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" style="background-color: #008037; border-color: #008037" value="Zapisz zmiany">
                              </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
</div>
</div>

<script src="{{ asset('backend/assets/js/image_load.js')}}"></script>
@endsection('admin')


