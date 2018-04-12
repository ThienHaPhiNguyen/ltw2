<?php
$url_host =  $_SERVER['HTTP_HOST'];
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
                        <li>
                            <a href="#">HOME</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle">BLOG<b class="caret"></b></a>
                            <ul class="dropdown-menu" style="display: none;">
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Subnav Level 1</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        Subnav Level 1
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <!-- SUB MENU -->
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li><a href="#">subnav lavel 2</a></li>
                                        <li><a href="#">subnav lavel 2</a></li>
                                    </ul>
                                    <!--END SUB MENU -->
                                </li>
                                <li>
                                    <a href="#">Subnav Level 1</a>
                                </li>
                                <li>
                                    <a href="#">Subnav Level 1</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle">COLOURS<b class="caret"></b></a>
                            <ul class="dropdown-menu" style="display: none;">
                                <li>
                                    <a href="#"> Blue</a>
                                </li>
                                <li>
                                    <a href="#"> Green</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--end Total MENU -->
                </div>
            </div>
        </div>
  