<?php
/* Smarty version 3.1.32, created on 2018-08-28 12:37:04
  from '/home/https/www/framework/mvc/view/Manage/layout/menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8541f0ab4d64_83077128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d951b73517656971e1df7ca862f4967ffe6d096' => 
    array (
      0 => '/home/https/www/framework/mvc/view/Manage/layout/menu.html',
      1 => 1535419344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8541f0ab4d64_83077128 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--主目录 -->
<div id='k-menu ' >    
        <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #436267;">
                <a class="navbar-brand" href="/Manage">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        图片管理 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Manage/Index/Slide">幻灯片</a>
                      </div>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle  btn btn-info  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        工程案例
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">案例</a>
                      </div>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle    " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         团队
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>


                      
                  </ul>
                </div>
              </nav>
     </div>




<?php }
}