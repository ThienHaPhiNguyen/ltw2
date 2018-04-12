<?php

use App\Http\Models\Sample;
$obj = new Sample();
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
                    <a class="dropdown-toggle">{!!$item['menu_name']!!}<b class="caret"></b></a>
                    <?php $item = $obj->getChilds($item->childs) ?>
                    <ul class="dropdown-menu" style="display: none;">
                        @foreach($item as $item1)
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                {!!$item1['menu_name']!!}
                               
                            </a>
                            <!-- SUB MENU -->
                            <?php $item1 = $obj->getChilds($item1->childs) ?>
                            <ul class="dropdown-menu hide" style="display: none;">
                                @foreach($item1 as $item2)
                                <li><a href="#">{!!$item2['menu_name']!!}</a></li>
                                @endforeach
                            </ul>
                            <!--END SUB MENU -->
                        </li>

                        @endforeach
                    </ul>
                </li>

                @endforeach
            </ul>
            <!--end Total MENU -->
        </div>
    </div>
</div>