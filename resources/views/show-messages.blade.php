@extends('admin-dashboard')

@section('show-term')

    <div class="row">
        <div class="col-lg-12 float-auto margin-auto">
            <div class="widget">
                <div class="widget-header">
                    <h3 class="align-center display-block margin-right-auto">پیام ها</h3>

                </div>
                <div class="widget-content">
                    <div class="body">

                        <table class="table table-striped table-images">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام و نام خانوادگی:</th>
                                <th>ایمیل</th>
                                <th>متن</th>
                                <th>ویرایش</th>

                            </tr>
                            </thead>


                            <tbody>
                            @if(isset($messages))
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$message->firstName." ".$message->lastName}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{substr($message->message,0,100)."..."}}</td>
                                        <td ><a href="/show/message/{{$message->id}}" class="btn btn-sm btn-primary">نمایش</a>
                                            <a class="btn btn-sm btn-warning" href="/delete/message/{{$message->id}}">حذف</a>
                                        </td>


                                    </tr>
                                @endforeach
                            @endif





                            </tbody>
                        </table>

                        <div class="clearfix ">

                        </div>
                        <div class="row align-center ">
                            @if(isset($messages))

                            {!! $messages->render() !!}
                                @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop