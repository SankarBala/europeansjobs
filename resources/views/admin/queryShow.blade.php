@extends('admin.layouts.app')

@section('title', 'Countries')

@section('pageTitle', 'Countries')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Query</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=""></a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div>
        <div class="main-content-inner">
            <br />
            <table>
                <tr><td>Name</td><td>{{ $query->name }} </td></tr>
                <tr><td>Email</td><td>{{ $query->email }}</td></tr>
                <tr><td>Phone</td><td>{{ $query->phone }}</td></tr>
                <tr><td>Country</td><td>{{$countries->find($query->country)->name ?? "" }}</td></tr>
                <tr><td>Message</td><td>{{ $query->message }}</td></tr>
            </table>


        </div>

    </div>
@endsection
