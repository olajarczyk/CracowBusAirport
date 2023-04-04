@extends('admin.admin_master') <!-- folder admin > admin_master.blade.php -->
@section('admin')

<div class="page-content">
<div class="container-fluid">
<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edycja hasła</h4><br><br>

                                            @if(count($errors))
                                                @foreach ($errors->all() as $error)
                                                 <p class="alert alert-danger alert-dismissible fade show">{{$error}}</p>   
                                                @endforeach
                                            @endif


                                        <form method="post" action="{{route('update.password')}}">
                                            @csrf

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Stare hasło</label>
                                            <div class="col-sm-10">
                                                <input name="oldpassword" class="form-control" type="password" id="oldpassword">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nowe hasło</label>
                                            <div class="col-sm-10">
                                                <input name="newpassword" class="form-control" type="password" id="newpassword">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Potwierdź nowe hasło</label>
                                            <div class="col-sm-10">
                                                <input name="confirmpassword" class="form-control" type="password" id="confirmpassword">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" style="background-color: #008037; border-color: #008037" value="Zmień hasło">
                              </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
</div>
</div>

@endsection('admin')


