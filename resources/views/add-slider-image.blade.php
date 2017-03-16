@extends('admin-dashboard')

@section('upload')

    <div class="row align-center  ">
        <div class="center-block2 col-md-6">
            <div class="widget  ">
                <div class="widget-header padding-1px">
                    <h3 class="align-center margin-auto"> اسلایدر جدید </h3>
                </div>
                <div class="widget-content padding-button-auto">
                    <form method="post" action="/add/slider" enctype="multipart/form-data">
                        <fieldset>



                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label class="control-label align-right" for="title">عنوان 1 : </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input value="@if(isset($slider)){{$slider->titleOne}}@endif" required="عنوان پست را کامل کنید" class="form-control parsley-validated" name="titleOne"  type="text">
                                    </div>
                                </div>
                                <span>
                        @if(isset($nameError))
                                        {{$nameError}}
                                    @endif
                        </span>
                            </div>
                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label class="control-label align-right" for="title">عنوان2: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input value="@if(isset($slider)){{$slider->titleTwo}}@endif" required="عنوان پست را کامل کنید" class="form-control parsley-validated" name="titleTwo"  type="text">
                                    </div>
                                </div>
                                <span>
                        @if(isset($nameError))
                                        {{$nameError}}
                                    @endif
                        </span>
                            </div>
                            <div class="control-group">
                                <div class="col-md-3 align-right">
                                    <label required="فایل خود را آپلود کنید" class="control-label align-right" for="description">آپلود فایل :</label>
                                </div>
                                <div class="col-md-9 ">

                                    <div class="form-group ">
                                        <div class="input-group display-block">
                              <span class="btn btn-primary col-md-12">
                                        <i class="icon-plus "></i>
                                        <span>Add file...</span>
                                        <input required type="file" name="image" >
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
                            @if(isset($success))
                                {{$success}}
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