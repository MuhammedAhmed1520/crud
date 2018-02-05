@extends('admin.layouts.layout')
@section('title')

Setting
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
                        <h3 class="box-title">Settings</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('setting.update')}}" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{$setting->name}}">
                            </div>
                            <div class="form-group">
                                <label for="fb-link">FB-Link</label>
                                <input name="fb-link" type="url" class="form-control" id="fb-link" placeholder="FB-Link" value="{{$setting->fb_link}}">
                            </div>
                            <div class="form-group">
                                <label for="google-link">Google-Link</label>
                                <input name="google-link" type="url" class="form-control" id="google-link" placeholder="Google-Link" value="{{$setting->google_link}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" value="{{$setting->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" id="address" placeholder="Address" value="{{$setting->address}}">
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
