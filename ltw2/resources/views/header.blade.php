<?php

use App\Http\Models\Sample;

$obj = new Sample();
?>


<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="main-nav">
    <div class="container">
        <button class="btn-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- error menu -->
        <div class="clearfix"></div>
        <div class="navbar">
            <!-- Total MENU -->
            <ul class="nav">
                @foreach($childs as $item)         
                    <li class="dropdown">
                        @if($item->childs->count() != 0)<!--cai nay de phan biet thang nao co con thi co them dau mui ten de nhan biet co the test thu cai nay bang csdl-->
                            <a class="dropdown-toggle">{!!$item['menu_name']!!}<b class="caret"></b></a>     
                            <ul class="dropdown-menu" style="display: none;">
                                @foreach($item->childs as $item1)
                                    <li class="dropdown-submenu">
                                    @if($item1->childs->count() != 0)
                                        <a class="dropdown-toggle" data-toggle="dropdown">
                                            {!!$item1['menu_name']!!}
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                                <!-- SUB MENU -->
                                        
                                        <ul class="dropdown-menu hide" style="display: none;">
                                        @foreach($item1->childs as $item2)
                                            <li><a href="#">{!!$item2['menu_name']!!}</a></li>
                                        @endforeach
                                        </ul>
                                    @else
                                        <a class="dropdown-toggle" data-toggle="dropdown">
                                            {!!$item1['menu_name']!!}
                                        </a>                                              
                                    @endif          <!--END SUB MENU -->
                                    </li>
                                @endforeach                             
                            </ul>
                        @else
                            <a class="dropdown-toggle">{!!$item['menu_name']!!}<b class=""></b></a>
                        @endif                                                            
                    </li>
                @endforeach
            </ul>
            <!--end Total MENU -->
        </div>
    </div>
</div>
