@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="{{route('employee.create')}}" class="btn btn-info">Add new employee</a>
            <div class="row">
                <div class="card-body">

                <table class="table table-bordered table-stiped fs-1 text-black">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRSTNAME</th>
                            <th>LAST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>AGE</th>
                            <th>ADDRESS</th>
                            <th>ZIP</th>
                        </tr>


                    </thead>

                    <tbody>
                      @foreach ($employees as $item)

                      <tr>
                            <th>{{$item->id}}</th>
                            <th>{{$item->fname}}</th>
                            <th>{{$item->lname}}</th>
                            <th>{{$item->midname}}</th>
                            <th>{{$item->age}}</th>
                            <th>{{$item->address}}</th>
                            <th>{{$item->zip}}</th>

                            <td>
                                
                                <span class="badge bg-success"><a href="{{ route('employee.edit', $item->id) }}" class="btn btn-success">Edit</a>

                                </span>
                                <span class="badge bg-danger"><a href="{{ route('employee.destroy', $item->id) }}" class="btn btn-danger">Delete</a></span>
                            </td>

                            <td>
                            </td>
                        </tr>

                      @endforeach
                    </tbody>




                </table>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection