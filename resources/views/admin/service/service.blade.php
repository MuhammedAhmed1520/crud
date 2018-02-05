@extends('admin.layouts.layout')
@section('title')

    Service

@endsection

@section('content')
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>All Services</h2>
            </div>
            <div class="col-md-6">

                <a href="{{route('add.service')}}" class="btn btn-success pull-right">Add New</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Photo</th>
                        <th scope="col">desc</th>
                        <th scope="col">Cat-Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{$service->name}}</td>
                            <td><a href="{{$service->photo}}" target="_blank"><img src="{{$service->photo}}" style="width: 40px;height: 40px;" class="img-circle img-thumbnail img-responsive"/></a></td>
                            <td>{{$service->desc}}</td>
                            <td>{{\App\Slider::find($service->cat_id)->title}}</td>
                            <td>
                                <a href="{{route('service.edit',['service_id'=>$service->id])}}">Edit</a>|
                                <a href="{{route('service.delete',['service_id'=>$service->id])}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
