@extends('admin.layouts.layout')
@section('title')

    Edit Service

@endsection

@section('content')
    <br>
    <br>
    <br>
    <br>
    <section class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Service</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('edit.service',['service_id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{$service->name}}">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input name="desc" type="text" class="form-control" id="desc" placeholder="Description"value="{{$service->desc}}">
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label for="img">Image</label>--}}
                            {{--<input type="file" id="img" name="image">--}}

                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" id="img" name="photo">
                                <img class="img-circle img-thumbnail" src="{{Request::root()}}/{{$service->photo}}" alt="{{$service->title}}" width="50px" height="50px">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" style="width: 100%;" name="cat_id">
                                    @foreach($sliders as $slider)
                                        @if($slider->id == $service->cat_id)
                                            <option  selected  value="{{$slider->id}}">{{$slider->title}}</option>
                                        @else
                                            <option value="{{$slider->id}}">{{$slider->title}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
