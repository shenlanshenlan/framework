<?php
/* Smarty version 3.1.32, created on 2018-09-01 09:03:53
  from '/home/k/https/www/framework/mvc/view/Manage/layout-home/menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8a55f9a33917_91754029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39c699b385ddf99680f4c311988572ff0346b92' => 
    array (
      0 => '/home/k/https/www/framework/mvc/view/Manage/layout-home/menu.html',
      1 => 1535785905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a55f9a33917_91754029 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.c1{
  color:red;

}

</style>
<!--主目录 -->
<div id='k-menu ' >    
        <nav class="navbar navbar-expand-lg navbar-light border02 " style="font-size:15px; background-color: #247e8c;">
                <a class="navbar-brand" href="/Manage">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle "   href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        图片管理 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Manage/Slide">幻灯片</a>
                      </div>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        工程案例
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Manage/Case/CaseList">家装案例</a>
                        <a class="dropdown-item" href="/Manage/Case/EditList">VR</a>
                      </div>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         团队
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " style="color:rgb(0, 0, 0)" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        系统管理 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Manage/System/Log">日志</a>
                        <a class="dropdown-item" href="/Manage/System/CleanLog">日志清理</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Manage/System/CleanCache">缓存清理</a>
                      </div>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " style="color:rgb(0, 0, 0)" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         权限
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Manage/Admin/Admin">管理员列表</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Manage/Admin/AdminEdit">创建管理员</a>
                      </div>
                      
                  </ul>
                </div>
              </nav>
     </div>
<?php }
}