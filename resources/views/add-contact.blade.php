@extends('admin-dashboard')

@section('add-terms')

    <div class="row align-center  ">
        <div class="center-block2 col-md-6">
            <div class="widget  ">
                <div class="widget-header padding-1px">
                    <h3 class="align-center margin-auto"> تماس با ما </h3>
                </div>

                <div class="widget-content padding-button-auto">
                    <form method="post" action="/add/contact"
                            enctype="multipart/form-data">
                        <fieldset>
                            @if(isset($termError))
                                {{$termError}}
                            @endif

                            <div class="control-group">
                                <div class="col-md-3 align-right padding-rl-auto">
                                    <label class="control-label align-right" for="title">ساعت کاری :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">

                                        <input value="@if(isset($contact)){{$contact->dateOfWork}}@endif" required  class="form-control parsley-validated" name="dateOfWork" id="title" type="text">

                                    </div>
                                    <span>
                        @if(isset($nameError))
                                            {{$nameError}}
                                        @endif
                        </span>
                                </div>

                            </div>
                            <div class="control-group">
                                <div class="col-md-3 align-right padding-rl-auto">
                                    <label class="control-label align-right" for="title">آدرس :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">

                                        <input value="@if(isset($contact)){{$contact->address}}@endif" required="عنوان پست را کامل کنید" class="form-control parsley-validated" name="address" id="title" type="text">


                                    </div>

                                </div>

                            </div>
                            <div class="control-group">
                                <div class="col-md-3 align-right padding-rl-auto">
                                    <label class="control-label align-right" for="title"> ایمیل : </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">

                                        <input value="@if(isset($contact)){{$contact->email}}@endif" required class="form-control parsley-validated" name="email" id="title" type="text">

                                    </div>


                                </div>

                            </div>

                            <div class="control-group">
                                <div class="col-md-3 align-right padding-rl-auto">
                                    <label class="control-label align-right" for="title"> تلفن: </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">

                                        <input value="@if(isset($contact)){{$contact->phone}}@endif" required="" class="form-control parsley-validated" name="phone" id="title" type="text">

                                    </div>

                                </div>

                            </div>





                        </fieldset>

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