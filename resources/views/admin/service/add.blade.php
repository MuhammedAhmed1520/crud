@extends('admin.layouts.layout')
@section('title')

    Add new Service

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
                        <h3 class="box-title">Add New Service</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('add.new.service')}}" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input name="name" type="text" class="form-control" id="title" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input name="desc" type="text" class="form-control" id="desc" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" id="img" name="photo">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" style="width: 100%;" name="cat_id">
                                    @foreach($sliders as $slider)
                                        <option value="{{$slider->id}}">{{$slider->title}}</option>
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
