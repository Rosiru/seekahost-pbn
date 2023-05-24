@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('PBN Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
     <!-- Main content -->
     <div class="content">
        @include('includes.message')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ route('pbn.store') }}" method="POST">
                        @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Create PBN</h3>
                        </div>
            
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" name="domain"
                                       class="form-control"
                                       placeholder="{{ __('Domain') }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="server"
                                       class="form-control"
                                       placeholder="{{ __('Server') }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="ip"
                                       class="form-control"
                                       placeholder="{{ __('IP Address') }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="customer"
                                       class="form-control"
                                       placeholder="{{ __('Customer') }}" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </form>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection