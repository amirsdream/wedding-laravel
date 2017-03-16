@extends('admin-dashboard')

@section('upload')

    <div class="row align-center  ">
        <div class="center-block2 col-md-6">
            <div class="widget  ">
                <div class="widget-header padding-1px">
                    <h3 class="align-center margin-auto"> سفارشات ویژه </h3>
                </div>
                <div class="widget-content padding-button-auto">
                    <form method="post" action="/add/order" enctype="multipart/form-data">
                        <fieldset>

                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label class="control-label align-right" for="title">عنوان اول: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input required class="form-control parsley-validated" name="titleOne" id="title" type="text" value="@if(isset($aboute)) {{$aboute->titleOne}} @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label class="control-label align-right" for="title">عنوان دوم: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input required class="form-control parsley-validated" name="titleTwo" id="title" type="text" value="@if(isset($aboute)) {{$aboute->titleTwo}} @endif">
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label class="control-label align-right" for="description">توضیحات :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea required="توضیحات را کامل کنید" class="form-control" name="body" rows="3" id="description" value="">@if(isset($aboute)) {{$aboute->body}} @endif</textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label required="فایل خود را آپلود کنید" class="control-label align-right" for="description" >آپلود فایل :</label>
                                </div>
                                <div class="col-md-9 ">

                                    <div class="form-group ">
                                        <div class="input-group display-block">
                              <span class="btn btn-primary col-md-12">
                                        <i class="icon-plus "></i>
                                        <span>Add file...</span>
                                        <input type="file" name="image" required >
                                    </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <span>
                    @if(isset($messageMimetype))
                                {{$messageMimetype}}
                            @endif
                            @if(isset($state))
                                {{$state}}
                            @endif
                </span>
                        <div class="form-actions ">
                            <div class=" ">
                                <input class="btn btn-success btn-lg" type="submit" value="ارسال">
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>



                </div>

            </div>
        </div>

    </div>
@stop