<?php
/* Smarty version 3.1.32, created on 2018-08-25 09:14:15
  from '/home/ki/https/www/framework/mvc/view/Index/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b811de765ee09_24713709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3bb724e73a7a7843790a2db011e285ed74094e8' => 
    array (
      0 => '/home/ki/https/www/framework/mvc/view/Index/index.html',
      1 => 1535188453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b811de765ee09_24713709 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
		.k-item{   
			float: left;
			width:350px;
			margin:5px;
			font-size:14px;

			z-index:2;
		}
		#k-template{
		}
		.k-title{
			color:rgb(63, 63, 63);
			font-size:20px;
			padding:3px;
			margin: 30px;
			text-align: center;
			font-weight: 900;
		}
        .info{
			  width:350px;
			  height:250px;
			  background-color: rgba(0, 0, 0, 0.523); 
			  position:absolute;
			  z-index: 3;
			  text-align: center;
			  cursor: pointer;
			  display:none;
		}
		.info>span{
			 position: absolute;
			 display:block;
			 z-index:1;
			 color:white;
			 top:46%;left:46%;
		}

		</style>
	

		<div id = "k-jiazhaung">
		   <div class='k-title'>
			家装案例
		   </div>    
		   <div class="k-item">
			   <div class="info"  > <span >详情 </span></div>
			   <image src = "/sites/Index/2.jpg" width=350px height=250px;></image>
		   </div>
		   <div class="k-item">
			   <div class="info"  > <span  >查看详情</span></div>
			   <image src = "/sites/Index/3.jpg" width=350px height=250px;></image>
		   </div>
		   <div class="k-item">
			   <div class="info"  > <span  >简介</span></div>
			   <image src = "/sites/Index/4.jpg" width=350px height=250px;></image>
		   </div>
		   <div class="k-item">
			   <div class="info"  > <span  >简介</span></div>
			   <image src = "/sites/Index/5.jpg" width=350px height=250px;></image>
		   </div>
		   <div class="k-item">
			   <div class="info"  > <span  >简介</span></div>
			   <image src = "/sites/Index/6.jpg" width=350px height=250px;></image>
		   </div>
		   <div class="k-item">
			   <div class="info"  > <span  >简介</span></div>
			   <image src = "/sites/Index/7.jpg" width=350px height=250px;></image>
		   </div>
		
		</div>
		
		
		
		
		<div style="clear:both"></div>
		
		<div id = "k-gongzhuang">
		   <div class='k-title'>
			 工装案例 
		   </div>    
		   <span>简介</span>
		   <div class="k-item">
		   </div>
		
		</div>
		</div>
		
		<div style="clear:both"></div>
		
		
		<?php echo '<script'; ?>
>
		$('.k-item').mousemove(function(event){
				event = event ? event : window.event;
				var obj = event.srcElement ? event.srcElement : event.target; 
				var $obj = $(obj);
				$obj = $obj.parent();
				$obj = $obj.children('.info');
				   $obj.fadeIn('fast');
				});
		$('.info').mouseleave(function(event){
				event = event ? event : window.event;
				var obj = event.srcElement ? event.srcElement : event.target; 
				var $obj = $(obj);
				$obj = $obj.parent();
				$obj = $obj.children('.info');
				    $obj.fadeOut('fast'); 
		});

		<?php echo '</script'; ?>
>
<?php }
}