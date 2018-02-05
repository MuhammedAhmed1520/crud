@extends('admin.layouts.layout')
@section('title')

    Add new Slider

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
                        <h3 class="box-title">Add New Slider</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('add.new.slider')}}" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input name="desc" type="text" class="form-control" id="desc" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" id="img" name="photo">
                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="desc">Photo</label>--}}
                                {{--<input name="photo" type="text" class="form-control" id="desc" placeholder="Description">--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="other">Other</label>
                                <input name="other" type="text" class="form-control" id="other" placeholder="Other">
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
