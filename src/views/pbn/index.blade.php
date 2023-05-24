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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        PBN table page
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('pbn.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Add New
                                </a>
                            </div>
                        </div>
            
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Domain</th>
                                        <th>Server</th>
                                        <th>IP</th>
                                        <th>Customer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->domain }}</td>
                                        <td>{{ $blog->server }}</td>
                                        <td>{{ $blog->ip }}</td>
                                        <td>{{ $blog->customer }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection