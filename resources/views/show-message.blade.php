@extends('admin-dashboard')

@section('show-term')

    <div class="row   ">
        <div class="center-block2 col-md-12">
            <div class="widget  ">
                <div class="widget-header padding-1px">

                </div>

                <div class="widget-content padding-button-auto">
                    @if(isset($searchError))
                        <p class="align-center">{{$searchError}}</p>
                    @endif

                    <fieldset>

                        @if(isset($message))
                            <div class="row information">
                                <div class=" align-right  padding-5px">
                                    <i class="icon-user icon"></i>
                                    <label class="control-label align-right" for="title">نام و نام خانوادگی: </label>
                                    <span>{{$message->firstName." ".$message->lastName}}</span>
                                </div>
                                <div class=" align-right  padding-5px">
                                    <i class="icon-user icon"></i>
                                    <label class="control-label align-right" for="title">ایمیل : </label>
                                    <span>{{$message->email}}</span>
                                </div>
                                <div class=" align-right  padding-5px">
                                    <i class="icon-user icon"></i>
                                    <label class="control-label align-right" for="title">موضوع : </label>
                                    <span>{{$message->subject}}</span>
                                </div>
                                <div class=" align-right padding-5px border-default">
                                    <i class="icon-user icon"></i>
                                    <label class="control-label align-right" for="title">پیغام : </label>

                                    <div class="">
                                        <div class=" margin-left0"> <span class="arrow"></span>
                                            <div class="text">

                                                <p class="padding-50px justify">{{$message->message}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="padding-top12px">
                                    <a  class="btn btn-sm btn-danger" href="/delete/message/{{$message->id}}">حذف پیام</a>
                                </div>




                            </div>

                    </fieldset>


                        @endif





                </div>

            </div>
        </div>

    </div>

@stop