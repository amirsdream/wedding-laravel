@extends("base");

@section("login")



<div class="row">
    <div class="col-lg-12 page-content center-block">
        <div class="widget">
            <div class="widget-header">
                <div class="login-header">
                <i class="login-icon"></i>
                <h3 class="without-margin-right">ورود کاربران</h3>
                </div>
            </div>
            <div class="widget-content">
                <div id="wizard">
                    <div id="rootwizard">
                        @if(isset($message))
                            {{$message}}
                        @endif
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <form method="POST" action="/admin/login" class="form-horizontal form-condensed">
                                    <fieldset>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label for="username" class="col-md-2 label-style">ایمیل: </label>
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <input class="form-control" placeholder="" name="email"  type="text">
                                                    <span class="help-block">
                                                        @if(isset($emailMessage))
                                                            {{$emailMessage}}
                                                        @endif
                                                    </span> </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Email -->
                                            <label for="email"  class="col-md-2 label-style">رمز عبور:</label>
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <input class="form-control" placeholder="" name="password"  type="password">
                                                    <span class="help-block">
                                                        @if(isset($passwordMessage))
                                                            {{$passwordMessage}}
                                                        @endif
                                                    </span> </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="align-center">
                                        <input type="submit" class="btn btn-s-md btn-success btn-success " value="ورود" >

                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop