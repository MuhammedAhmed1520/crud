@extends('admin.layouts.layout')
@section('title')

    Edit Slider

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
                        <h3 class="box-title">Edit Slider</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('edit.slider',['slider_id'=>$slider->id])}}" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{$slider->title}}">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input name="desc" type="text" class="form-control" id="desc" placeholder="Description"value="{{$slider->desc}}">
                            </div>
                            <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" id="img" name="photo">
                            <img src="{{Request::root()}}/{{$slider->photo}}" alt="{{$slider->title}}" width="50px" height="50px">
                            </div>
                            <div class="form-group">
                                <label for="other">Other</label>
                                <input name="other" type="text" class="form-control" id="other" placeholder="Other"value="{{$slider->other}}">
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
