@extends('admin.layouts.layout')
@section('title')

    Slider

@endsection

@section('content')
    <br>
    <br>
    <br>

    <div class="container">
       <div class="row">
           <div class="col-md-6">
               <h2>All Sliders</h2>
           </div>
           <div class="col-md-6">

                    <a href="{{route('add.slider')}}" class="btn btn-success pull-right">Add New</a>
           </div>
       </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Photo</th>
                        <th scope="col">desc</th>
                        <th scope="col">other</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{$slider->title}}</td>
                            <td><a href="{{$slider->photo}}" target="_blank"><img src="{{$slider->photo}}" style="width: 40px;height: 40px;" class="img-circle img-thumbnail img-responsive"/></a></td>
                            <td>{{$slider->desc}}</td>
                            <td>{{$slider->other}}</td>
                            <td>
                                <a href="{{route('slider.edit',['slider_id'=>$slider->id])}}">Edit</a>|
                                <a href="{{route('slider.delete',['slider_id'=>$slider->id])}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
