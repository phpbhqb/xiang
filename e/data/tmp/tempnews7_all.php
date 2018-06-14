<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en" class="default">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?=$grpagetitle?></title>
<meta name="description" content="<?=$grpagetitle?>">
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/theme.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/typo.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/iview.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/leoblog.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/megamenu.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/leomenusidebar.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/front.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/codfee_1.6.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/jquery-ui.min.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/jquery.ui.theme.min.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/jquery.fancybox.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/blockgrouptop.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/aeuc_front.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/custom.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/owl.theme.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/jquery.fullPage.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/styles.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/headerposition1499439507.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/footerposition1499441735.css" type="text/css" media="all">
<link rel="stylesheet" href="http://test.com/xiang/skin/xiang/css/profile1499450019.css" type="text/css" media="all">

<script type="text/javascript">
    /**
     * List functions will run when document.ready()
     */
    var ap_list_functions = [];
    /**
     * List functions will run when window.load()
     */
    var ap_list_functions_loaded = [];
    /**
     * List functions will run when document.ready() for theme
     */
    var products_list_functions = [];
</script>

<script type="text/javascript">
        var LEO_COOKIE_THEME = "LEO_COOL_STUFF_PANEL_CONFIG";
        var buttonwishlist_title_add = "Lista dei desideri";
        var buttonwishlist_title_remove = "Rimuovi dalla wishlist";
        var enable_product_label = "1";
        var isLogged = false;
        var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Totale","amount":0,"value":"0,00u00a0u20ac"},"total_including_tax":{"type":"total","label":"Totale (tasse incl.)","amount":0,"value":"0,00u00a0u20ac"},"total_excluding_tax":{"type":"total","label":"Totale (tasse escl.)","amount":0,"value":"0,00u00a0u20ac"}},"subtotals":{"products":{"type":"products","label":"Totale parziale","amount":0,"value":"0,00u00a0u20ac"},"discounts":null,"shipping":{"type":"shipping","label":"Spedizione","amount":0,"value":"Gratis"},"tax":{"type":"tax","label":"Iva inclusa","amount":0,"value":"0,00u00a0u20ac"}},"products_count":0,"summary_string":"0 articoli","labels":{"tax_short":"(Tasse incl.)","tax_long":"(Iva inclusa)"},"id_address_delivery":0,"id_address_invoice":0,"is_virtual":false,"vouchers":{"allowed":1,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"Euro","iso_code":"EUR","iso_code_num":"978","sign":"u20ac"},"customer":{"lastname":null,"firstname":null,"email":null,"last_passwd_gen":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"ip_registration_newsletter":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"outstanding_allow_amount":0,"max_payment_days":0,"note":null,"is_guest":0,"id_shop":null,"id_shop_group":null,"id_default_group":3,"date_add":null,"date_upd":null,"reset_password_token":null,"reset_password_validity":null,"id":null,"is_logged":false,"gender":{"type":null,"name":null,"id":null},"risk":{"name":null,"color":null,"percent":null,"id":null},"addresses":[]},"language":{"name":"Italiano (Italian)","iso_code":"it","locale":"it-IT","language_code":"it","is_rtl":"0","date_format_lite":"d/m/Y","date_format_full":"d/m/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"AquaMilano","description":"Negozio creato usando PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-it":true,"lang-rtl":false,"country-IT":true,"currency-EUR":true,"layout-full-width":true,"page-index":true,"tax-display-enabled":true},"admin_notifications":[]},"shop":{"name":"AquaMilano","email":"info@aquamilano.it","registration_number":"","long":false,"lat":false,"logo":"/img/acquamilano-logo-1509641331.jpg","stores_icon":"/img/logo_stores.png","favicon":"/img/favicon.ico","favicon_update_time":"1509810539","address":{"formatted":"AquaMilano<br>Italia","address1":"","address2":"","postcode":"","city":"","state":null,"country":"Italia"},"phone":"","fax":""},"urls":{"base_url":"https://www.aquamilano.it/","current_url":"https://www.aquamilano.it/it/","shop_domain_url":"https://www.aquamilano.it","img_ps_url":"https://www.aquamilano.it/img/","img_cat_url":"https://www.aquamilano.it/img/c/","img_lang_url":"https://www.aquamilano.it/img/l/","img_prod_url":"https://www.aquamilano.it/img/p/","img_manu_url":"https://www.aquamilano.it/img/m/","img_sup_url":"https://www.aquamilano.it/img/su/","img_ship_url":"https://www.aquamilano.it/img/s/","img_store_url":"https://www.aquamilano.it/img/st/","img_col_url":"https://www.aquamilano.it/img/co/","img_url":"https://www.aquamilano.it/themes/leo_cool_stuff/assets/img/","css_url":"https://www.aquamilano.it/themes/leo_cool_stuff/assets/css/","js_url":"https://www.aquamilano.it/themes/leo_cool_stuff/assets/js/","pic_url":"https://www.aquamilano.it/upload/","pages":{"address":"https://www.aquamilano.it/it/indirizzo","addresses":"https://www.aquamilano.it/it/indirizzi","authentication":"https://www.aquamilano.it/it/login","cart":"https://www.aquamilano.it/it/carrello","category":"https://www.aquamilano.it/it/index.php?controller=category","cms":"https://www.aquamilano.it/it/index.php?controller=cms","contact":"https://www.aquamilano.it/it/contattaci","discount":"https://www.aquamilano.it/it/buoni-sconto","guest_tracking":"https://www.aquamilano.it/it/tracciatura-ospite","history":"https://www.aquamilano.it/it/cronologia-ordini","identity":"https://www.aquamilano.it/it/dati-personali","index":"https://www.aquamilano.it/it/","my_account":"https://www.aquamilano.it/it/account","order_confirmation":"https://www.aquamilano.it/it/conferma-ordine","order_detail":"https://www.aquamilano.it/it/index.php?controller=order-detail","order_follow":"https://www.aquamilano.it/it/segui-ordine","order":"https://www.aquamilano.it/it/ordine","order_return":"https://www.aquamilano.it/it/index.php?controller=order-return","order_slip":"https://www.aquamilano.it/it/buono-ordine","pagenotfound":"https://www.aquamilano.it/it/pagina-non-trovata","password":"https://www.aquamilano.it/it/recupero-password","pdf_invoice":"https://www.aquamilano.it/it/index.php?controller=pdf-invoice","pdf_order_return":"https://www.aquamilano.it/it/index.php?controller=pdf-order-return","pdf_order_slip":"https://www.aquamilano.it/it/index.php?controller=pdf-order-slip","prices_drop":"https://www.aquamilano.it/it/offerte","product":"https://www.aquamilano.it/it/index.php?controller=product","search":"https://www.aquamilano.it/it/ricerca","sitemap":"https://www.aquamilano.it/it/Sitemap","stores":"https://www.aquamilano.it/it/negozi","supplier":"https://www.aquamilano.it/it/fornitori","register":"https://www.aquamilano.it/it/login?create_account=1","order_login":"https://www.aquamilano.it/it/ordine?login=1"},"theme_assets":"/themes/leo_cool_stuff/assets/","actions":{"logout":"https://www.aquamilano.it/it/?mylogout="}},"configuration":{"display_taxes_label":true,"low_quantity_threshold":3,"is_b2b":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Sconto"},"voucher_enabled":1,"return_enabled":1,"number_of_days_for_return":14},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https://www.aquamilano.it/it/"}],"count":1},"link":{"protocol_link":"https://","protocol_content":"https://"},"time":1528700317,"static_token":"3e6de3568c6e7768583104b782ef34dc","token":"4f793fb10908a869d7133d9b39958eaa"};
        var wishlist_add = "Il prodotto u00e8 stato aggiunto con successo alla tua lista dei desideri";
        var wishlist_cancel_txt = "Annulla";
        var wishlist_confirm_del_txt = "Delete selected item?";
        var wishlist_del_default_txt = "Impossibile eliminare lista dei desideri di default";
        var wishlist_email_txt = "E-mail";
        var wishlist_loggin_required = "Devi essere registrato per gestire la vostra lista dei desideri";
        var wishlist_ok_txt = "Ok";
        var wishlist_quantity_required = "u00c8 necessario inserire una quantitu00e0";
        var wishlist_remove = "Il prodotto u00e8 stato rimosso con successo dal lista dei desideri";
        var wishlist_reset_txt = "Reimposta";
        var wishlist_send_txt = "Invia";
        var wishlist_send_wishlist_txt = "Invia lista dei desideri";
        var wishlist_url = "https://www.aquamilano.it/it/module/leofeature/mywishlist";
        var wishlist_viewwishlist = "Vedi il tuo lista dei desideri";
      </script>
<script type="text/javascript">
  var choosefile_text = "Scegli file";
  var turnoff_popup_text = "Do not show this popup again";
  var size_item_quickview = 97;
  var style_scroll_quickview = 'vertical';
  var size_item_page = 97;
  var style_scroll_page = 'vertical';
  var size_item_quickview_attr = 97;  
  var style_scroll_quickview_attr = 'vertical';
  var size_item_popup = 167;
  var style_scroll_popup = 'vertical';
</script>
<script type="text/javascript">
  var FancyboxI18nClose = "Vicino";
  var FancyboxI18nNext = "Il prossimo";
  var FancyboxI18nPrev = "Precedente";
  var current_link = "http://www.aquamilano.it/it/";    
  var currentURL = window.location;
  currentURL = String(currentURL);
  currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#w*/, "" );
  current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
  var text_warning_select_txt = "Seleziona una da rimuovere?";
  var text_confirm_remove_txt = "Sei sicuro di voler rimuovere le fila piè di pagina?";
  var close_bt_txt = "Vicino";
  var list_menu = [];
  var list_menu_tmp = {};
  var list_tab = [];
  var isHomeMenu = 0;
</script>
</head>

  <body id="product" class="lang-it country-it currency-eur layout-full-width page-product tax-display-enabled product-id-3 product-aqua-milano-bikini-chrysos product-id-category-2 product-id-manufacturer-0 product-id-supplier-1 product-available-for-order fullwidth keep-header">

    
      
    

    <main id="page">
      
              
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
      
        
<aside id="notifications">
  <div class="container">
    
    
    
      </div>
</aside>
      
      <section id="wrapper">
      	
        
          <nav data-depth="2" class="breadcrumb">
  <div class="container">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="http://test.com/xiang/">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
          
                                
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?=$grtitleurl?>">
                <span itemprop="name"><?=$ecms_gr[title]?></span>
              </a>
              <meta itemprop="position" content="2">
            </li>
          
                  </ol>
  </div>

      <div class="category-cover hidden-sm-down">
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select picurl from {$dbtbpre}enewsfocus where classid=2 limit 1",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <img src="<?=$bqr['picurl']?>" class="img-fluid" alt="Breadcrumb image">
	<?php
}
}
?>
    </div>
  </nav>
        
                  <div class="container">
                  <div class="row">
            

            
  <div id="content-wrapper" class="col-lg-12 col-xs-12">
    
    

  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?=$grtitleurl?>">

      <div class="row">
        <div class="col-md-7">
          
            <section class="page-content" id="content">
              
                
                  <div class="images-container">
  
    <div class="product-cover">
      <div class="box-product-cover">
        
          <ul class="product-flags">
                      </ul>
        
        <img class="js-qv-product-cover img-fluid" src="<?=$ecms_gr[productpic]?>" alt="" title="" itemprop="image">
      </div>
    </div>

</div>

                
              
            </section>
          
          </div>
          <div class="col-md-5">
            
              
                <h1 class="h1 product-detail-name" itemprop="name"><?=$ecms_gr[title]?></h1>
            

            <div class="product-information">
              
                <div id="product-description-short-3" itemprop="description"><p><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></p></div>
              

        </div>
      </div>
    </div>
            	
	<section class="category-products block clearfix">
  <h2 class="products-section-title">maybe like</h2>
              <div class="block_content">
    <div class="products">
      <div class="owl-row">
        <div class="timeline-wrapper prepare"
          data-item="4" 
          data-xl="4" 
          data-lg="4" 
          data-md="3" 
          data-sm="2" 
          data-m="1"
        >
               
            <div class="timeline-parent">
                              <div class="timeline-item ">
                  <div class="animated-background">         
                    <div class="background-masker content-top"></div>             
                    <div class="background-masker content-second-line"></div>             
                    <div class="background-masker content-third-line"></div>              
                    <div class="background-masker content-fourth-line"></div>
                  </div>
                </div>
                          </div>
               
            <div class="timeline-parent">
                              <div class="timeline-item ">
                  <div class="animated-background">         
                    <div class="background-masker content-top"></div>             
                    <div class="background-masker content-second-line"></div>             
                    <div class="background-masker content-third-line"></div>              
                    <div class="background-masker content-fourth-line"></div>
                  </div>
                </div>
                          </div>
               
            <div class="timeline-parent">
                              <div class="timeline-item ">
                  <div class="animated-background">         
                    <div class="background-masker content-top"></div>             
                    <div class="background-masker content-second-line"></div>             
                    <div class="background-masker content-third-line"></div>              
                    <div class="background-masker content-fourth-line"></div>
                  </div>
                </div>
                          </div>
               
            <div class="timeline-parent">
                              <div class="timeline-item ">
                  <div class="animated-background">         
                    <div class="background-masker content-top"></div>             
                    <div class="background-masker content-second-line"></div>             
                    <div class="background-masker content-third-line"></div>              
                    <div class="background-masker content-fourth-line"></div>
                  </div>
                </div>
                          </div>
                  </div>
        <div id="category-products" class="owl-carousel owl-theme owl-loading">
    
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select id,title,titleurl,titlepic,productpic from {$dbtbpre}ecms_shop where classid={$GLOBALS['navclassid']} and id!={$GLOBALS['navinfor']['id']} order by isgood desc,newstime desc limit 12",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<div class="item first"> 
              <article class="product-miniature js-product-miniature" data-id-product="<?=$bqr['id']?>" data-id-product-attribute="74" itemscope="" itemtype="http://schema.org/Product"> 
               <div class="thumbnail-container"> 
                <div class="product-image"> 
                 <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl --> 
                 <a href="<?=$bqr['titleurl']?>" class="thumbnail product-thumbnail"> <img class="img-fluid" src="<?=$bqr['titlepic']?>" alt="" data-full-size-image-url="<?=$bqr['productpic']?>" /> </a> 
                 
                 
                </div> 
                <div class="product-meta"> 
                 <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl --> 
                 <h1 class="h3 product-title" itemprop="name"><a href="<?=$bqr['titleurl']?>"><?=$bqr['title']?></a></h1>  
      
                </div> 
               </div> 
              </article> 
             </div> 
			<?php
}
}
?>
	  
	  
	  
	  
	  
	  
                  </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  ap_list_functions_loaded.push(
    function(){
      if($('#category-products').parents('.tab-pane').length)
      {   
          if(!$('#category-products').parents('.tab-pane').hasClass('active'))
          {
              var width_owl_active_tab = $('#category-products').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();    
              $('#category-products').width(width_owl_active_tab);
          }
      }
      $('#category-products').owlCarousel({
                  direction:'ltr',
                items : 4,
        itemsCustom : false,
        itemsDesktop : [1200,4],
        itemsDesktopSmall : [992, 3],
        itemsTablet : [768, 2],
        itemsMobile : [480, 1],
        singleItem : false,         // true : show only 1 item
        itemsScaleUp : false,
        slideSpeed : 200,  //  change speed when drag and drop a item
        paginationSpeed :800, // change speed when go next page

        autoPlay : false,   // time to show each item
        stopOnHover : false,
        navigation : true,
        navigationText : ["&lsaquo;", "&rsaquo;"],

        scrollPerPage :true,
        responsive :true,
        
        pagination : false,
        paginationNumbers : false,
        
        addClassActive : true,
        
        mouseDrag : true,
        touchDrag : true,

        addClassActive :    true,
        afterInit: OwlLoaded,
        afterAction : SetOwlCarouselFirstLast,

      });
    }
  ); 
  function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
    if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
        el.width('100%');
  };
</script>
    

    
 

    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    
  </section>


    
  </div>


            
          </div>
                  </div>
        	
      </section>

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
</div>
      
    </main>

    
        <script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/core.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/theme.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/raphael-min.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/iview.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/leoslideshow.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/leofeature_cart.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/leofeature_wishlist.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/codfee16.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/countdown.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/ps_searchbar.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/ps_shoppingcart.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/leobootstrapmenu.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/blockgrouptop.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/custom.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/waypoints.min.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/instafeed.min.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/jquery.stellar.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/owl.carousel.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="http://test.com/xiang/skin/xiang/js/script.js"></script>   

    
      
    
  </body>

</html>