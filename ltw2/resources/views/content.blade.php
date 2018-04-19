
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       
    </head>
    <body>
        <div class="mod-custom-27">				
            <div class="container">				
                <div class="row">				
                    <div class="poetry">Danh sách sinh viên</div>				
                    <div class="sensei-message info">				
                        Lớp Lập trình web 2				
                    </div>				
                    <div class="media">				
                        <!-- Sile 1-->	
                        @foreach($data as $item)
                        <div class="circ-wrapper course_detail pull-left">				
                            <h3>{!! $item->student_id !!}</h3>				
                        </div>				
                        <div class="media-body">				
                            <h4 class="media-heading">				
                                <a href="#">{!! $item->student_name !!}</a>				
                            </h4>				
                            <p>				
                                {!! $item->student_info !!}				
                            </p>				
                            <ul class="data-lessons">				
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>    {!! $item->student_email !!}</li>				
                                <li><i class="fa fa-phone" aria-hidden="true"></i>   {!! $item->student_phone !!}</li>				
                            </ul>				
                        </div>							
                        @endforeach				
                    </div>				
                </div>				
            </div>				
        </div>				
    </body>
</html>