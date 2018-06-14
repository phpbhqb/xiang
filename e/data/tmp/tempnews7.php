<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="http://test.com/xiang/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://test.com/xiang/skin/default/js/tabs.js"></script>
</head>
<body class="showpage">
<header id="header">
  <div class="header-container">
    <div class="header-banner">
      <div class="container">
        <div class="inner">
        </div>
      </div>
    </div>
    <nav class="header-nav" style="margin-top: 0px;">
      <div class="bottomnav">
        <div class="inner">
          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="wrapper">
            <div class="container">
              <div class="row box-middle-header ApRow has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->       
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 bottom-middle-header ApColumn ">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->
                  <a href="http://test.com/xiang/" title="AquaMilano"><img class="logo img-fluid" src="http://test.com/xiang/skin/xiang/images/acquamilano-logo-1509641331.jpg" alt="AquaMilano" style="margin-top:0px;"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="header-top">
      <div class="inner">
        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
        <div class="row box-bottom-header ApRow has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;">
          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 group-menu ApColumn ">
            <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
            <div id="memgamenu-form_1499440717" class="ApMegamenu">
              <nav data-megamenu-id="1499440717" class="leo-megamenu cavas_menu navbar navbar-default disable-canvas " role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggler hidden-lg-up" data-toggle="collapse" data-target=".megamenu-off-canvas-1499440717">
                <span class="sr-only">navigazione Toggle</span>
            ☰
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="leo-top-menu collapse navbar-toggleable-md megamenu-off-canvas megamenu-off-canvas-1499440717" id="menu_main">
                <ul class="nav navbar-nav megamenu horizontal">
                  <li class="nav-item parent"><a href="http://test.com/xiang/" target="_self" class="nav-link has-category"><span class="menu-title">Home</span></a></li>
                  <li class="nav-item parent"><a href="http://test.com/xiang/html/introduction.html" target="_self" class="nav-link has-category"><span class="menu-title">introduction</span></a></li>
				  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,classid",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                  <li class="nav-item parent dropdown"><a class="nav-link dropdown-toggle has-category" href="<?=sys_ReturnBqClassname($bqr,9)?>" target="_self"><span class="menu-title"><?=$bqr['classname']?></span></a><b class="caret"></b>
                  <div class="dropdown-menu level1">
                    <div class="dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
                          <div class="inner">
                            <ul>
							<?php $classSql="select classid,classname from {$dbtbpre}enewsclass where bclassid={$bqr['classid']} and showclass=0 order by myorder,classid";
							$classQuery=$empire->query($classSql);
							while($classRes=$empire->fetch($classQuery)){
							
							?>
                              <li class="nav-item "><a class="nav-link" href="<?=sys_ReturnBqClassname($classRes,9)?>" target="_self"><span class="menu-title"><?=$classRes['classname']?></span></a></li>
							  
							  <?php } ?>
                            
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </li>
				  <?php
}
}
?>
                  
                  <li class="nav-item parent"><a href="http://test.com/xiang/html/contact.html" target="_self" class="nav-link has-category"><span class="menu-title">contact</span></a></li>
                </ul>
              </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>您当前的位置：<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
						<tr>
							<td colspan="2" bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>商品基本信息</strong></td>
						</tr>
						<tr>
							<td width="30%" align="center" class="titlepic"><a href="<?=$ecms_gr[productpic]?>" title="预览大图" target="_blank"><img height="128" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" width="128" border="0" /></a></td>
							<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
								<tr>
									<td style="font-size: 14px;"><strong>商品名称：<?=$ecms_gr[title]?></strong></td>
								</tr>
								<tr>
									<td>市场价：<span class="tprice">￥[!--tprice--]</span>&nbsp;优惠价：<span class="price">￥[!--price--]</span>&nbsp; 
										点数: [!--buyfen--]</td>
								</tr>
								<tr>
									<td>商品编号:[!--productno--]</td>
								</tr>
								<tr>
									<td>商品品牌:[!--pbrand--]</td>
								</tr>
								<tr>
									<td>计量单位:[!--unit--]</td>
								</tr>
								<tr>
									<td>商品重量:[!--weight--]</td>
								</tr>
								<tr>
									<td>[<a href="#ecms" onclick="window.open('http://test.com/xiang/e/ShopSys/doaction.php?enews=AddBuycar&amp;classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>','','width=680,height=500,scrollbars=yes,resizable=yes');">加入购物车</a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href="http://test.com/xiang/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">放入收藏夹</a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href="http://test.com/xiang/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">查看评论</a>]</td>
								</tr>
							</table></td>
						</tr>
						<tr>
							<td colspan="2" bgcolor="#F4F9FD">&nbsp;&nbsp;<strong>商品介绍</strong></td>
						</tr>
						<tr>
							<td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="8">
									<tr>
										<td id="text"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></td>
									</tr>
							</table></td>
						</tr>
					</table></td>
				</tr>
			</table>
			[!--temp.pl--]</td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>商品推荐</strong></td>
				</tr>
			</table>
				<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
					<tr>
						<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?> </td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>最后更新</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='http://test.com/xiang/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
					<tr>
						<td><strong>热门点击</strong></td>
					</tr>
				</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
					<tr>
						<td><ul>
              <script src='http://test.com/xiang/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
					</tr>
			</table></td>
	</tr>
</table>
<footer id="footer" class="footer-container">
<div class="footer-top">
  <div class="inner">
  </div>
</div>
<div class="footer-center">
  
</div>
<div class="footer-bottom">
  <div class="inner">
    <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
    <div class="wrapper">
      <div class="container">
        <div class="row box-footer-bottom ApRow has-bg bg-boxed" data-bg=" repeat" style="background: repeat;">
          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn ">
            <div class="block copyright ApHtml">
              <div class="block_content">
                <div>
                  Copyright © 2018 - Tutti i diritti riservati. Powered by <a href="https://www.carnova.it/">Carnova</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
<div id="back-top" style="display: none;">
  <a href="#" class="fa fa-angle-up"></a>
</div> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>