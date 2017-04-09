<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8" />
    <?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
        }
    ?>
      <?php 
	$app = JFactory::getApplication();
    $tplparams	= $app->getTemplate(true)->params;
	$slc = htmlspecialchars($tplparams->get('slc'));
	$slcc = htmlspecialchars($tplparams->get('slcc'));
	$dbc = htmlspecialchars($tplparams->get('dbc'));
	$lnc = htmlspecialchars($tplparams->get('lnc'));
	$hac = htmlspecialchars($tplparams->get('hac'));
	$fcb = htmlspecialchars($tplparams->get('fcb'));
	$tc = htmlspecialchars($tplparams->get('tc'));
	$gc = htmlspecialchars($tplparams->get('gc'));
	$pc = htmlspecialchars($tplparams->get('pc'));
	$ibc = htmlspecialchars($tplparams->get('ibc'));
	$allicon = htmlspecialchars($tplparams->get('allicon'));
	$mc = htmlspecialchars($tplparams->get('mc'));
    $fooc = htmlspecialchars($tplparams->get('fooc'));
    $ac = htmlspecialchars($tplparams->get('ac'));
    $closegalery = htmlspecialchars($tplparams->get('closegalery'));

	?>
    <style>

.bd-section-6 h3 {color:<?php echo $document->params->get('color6'); ?>;}
.bd-section-6{color:<?php echo $document->params->get('color7'); ?>;}
.bd-textblock-4{color:<?php echo $document->params->get('color1'); ?>;}
.bd-textblock-8{color:<?php echo $document->params->get('color2'); ?>;}
.bd-textblock-2{color:<?php echo $document->params->get('color3'); ?>;}
.bd-textblock-23{color:<?php echo $document->params->get('color4'); ?>;}
.bd-textblock-25{color:<?php echo $document->params->get('color5a'); ?>;}
.bd-section-1 h1{color:<?php echo $document->params->get('color5'); ?>;}
.bd-section-1{color:<?php echo $document->params->get('color8'); ?>;}
.bd-section-9 h1 {
	color:<?php echo $document->params->get('gcolor'); ?> ;
	font-family: <?php echo $document->params->get('fontfamily'); ?>;
	font-size: <?php echo $document->params->get('fs'); ?>;
	}
.bd-section-15 {background-image: url(<?php echo $document->params->get('foto7'); ?>)}

</style>
  <link href="<?php echo $document->params->get('fav'); ?>" rel="icon" type="image/x-icon" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/jquery.js'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo addThemeVersion($document->templateUrl . '/bootstrap.min.js'); ?>"></script>
<link class="" href='//fonts.googleapis.com/css?family=Arizonia:regular|Alex+Brush:regular|Allura:regular&subset=latin' rel='stylesheet' type='text/css'>
    
    <?php echo $document->head; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/template.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.ie.css'); ?>" media="screen"/>
    <![endif]-->
    <?php if(('edit' == JRequest::getVar('layout') && 'form' == JRequest::getVar('view')) ||
        ('com_config' == JRequest::getVar('option') && 'config.display.modules' == JRequest::getVar('controller'))) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/media.css'); ?>" media="screen" />
    <script src="<?php echo addThemeVersion($document->templateUrl . '/js/template.js'); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.js'); ?>"></script>
    <!--[if lte IE 9]>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.ie.js'); ?>"></script>
    <![endif]-->
    
</head>
<body class=" bootstrap bd-body-6 bd-pagebackground">
    <div data-affix
     data-offset=""
     data-fix-at-screen="top"
     data-clip-at-control="top"
     
 data-enable-lg
     
 data-enable-md
     
 data-enable-sm
     
     class=" bd-affix-4"><header class=" bd-headerarea-1">
        <section class=" bd-section-6 bd-section-sheet-align bd-tagstyles" id="section4" data-section-title="Three Columns with Icons">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutcontainer-14">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-top
                ">
                <div class=" bd-layoutcolumn-col-23 
 col-lg-12
 col-md-10
 col-sm-12">
    <div class="bd-layoutcolumn-23"><div class="bd-vertical-align-wrapper"><?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/logo.png"
<?php
$logoSrc = ob_get_clean();
$logoLink = '';
if ($themeParams->get('logoFile'))
{
$logoSrc = 'src="' . JURI::root() . $themeParams->get('logoFile') . '"';
}
if ($themeParams->get('logoLink'))
{
$logoLink = $themeParams->get('logoLink');
}
?>
<a class=" bd-logo-3" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles" <?php echo $logoSrc; ?> alt="<?php echo $sitename; ?>">
</a></div></div>
</div>
	
				<?php if ($hac == 1) { ?><div class=" bd-layoutcolumn-col-30 
 col-lg-12
 col-md-12
 col-sm-12">
    <div class="bd-layoutcolumn-30"><div class="bd-vertical-align-wrapper"><h3 class=" bd-textblock-59 bd-content-element">
<?php echo $document->params->get('hc1'); ?>
</h3>
	
		<p class=" bd-textblock-61 bd-content-element">


<?php echo $document->params->get('hc2'); ?><br>
<?php echo $document->params->get('hc3'); ?>

</p>
	
		<p class=" bd-textblock-63 bd-content-element">

<b>
    <?php echo $document->params->get('hc4'); ?></b> &nbsp;<?php echo $document->params->get('hc5'); ?>


</p></div></div>
</div><?php } ?>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
	
		<?php
    renderTemplateFromIncludes('hmenu_3', array());
?>
</header></div>
	
		<div class=" bd-stretchtobottom-3 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-6">
<div class="bd-sheetstyles bd-contentlayout-6 ">
    <div class="bd-container-inner">

        
        <div class="bd-flex-vertical bd-stretch-inner">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-23 bd-flex-wide">
    <div class=" bd-content-6">
    <div class="bd-container-inner">
        <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
            $document->view->componentWrapper('blog_3');
            echo '<jdoc:include type="component" />';
        ?>
    </div>
</div>
</div>

        
                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?>
                </div>
                
            </div>
            
 <?php renderTemplateFromIncludes('sidebar_area_4'); ?>
        </div>

    </div>
</div></div>
	
		<footer class=" bd-footerarea-1">
        <section class=" bd-section-15 bd-tagstyles" id="kontakt_stopka" data-section-title="kontakt_stopka">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutcontainer-11">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-middle
                ">
                <div class=" bd-layoutcolumn-col-31 
 col-lg-9
 col-sm-12">
    <div class="bd-layoutcolumn-31"><div class="bd-vertical-align-wrapper"><?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/logo.png"
<?php
$logoSrc = ob_get_clean();
$logoLink = '';
if ($themeParams->get('logoFile'))
{
$logoSrc = 'src="' . JURI::root() . $themeParams->get('logoFile') . '"';
}
if ($themeParams->get('logoLink'))
{
$logoLink = $themeParams->get('logoLink');
}
?>
<a class=" bd-logo-5" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles-19" <?php echo $logoSrc; ?> alt="<?php echo $sitename; ?>">
</a>
	
		<p class=" bd-textblock-1 bd-content-element">
<?php echo $document->params->get('fc2'); ?>
</p>
	
		<p class=" bd-textblock-6 bd-content-element">
<?php echo $document->params->get('fc3'); ?>
</p>
	
		<p class=" bd-textblock-12 bd-content-element">

<a href="<?php echo $document->params->get('fc5'); ?>">
    <?php echo $document->params->get('fc5'); ?>
</a>

</p>
	
		<p class=" bd-textblock-15 bd-content-element">

<?php echo $document->params->get('fc6'); ?> <?php echo $document->params->get('fc7'); ?>

</p>
	
		<?php if ($allicon == 1) { ?><div class=" bd-socialicons-2">
    
       <?php if ($fcb == 1) { ?> <a target="_blank" class=" bd-socialicon-11 bd-socialicon" href="<?php echo $document->params->get('facebook'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
       <?php if ($tc == 1) { ?> <a target="_blank" class=" bd-socialicon-12 bd-socialicon" href="<?php echo $document->params->get('twitter'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
        <?php if ($gc == 1) { ?><a target="_blank" class=" bd-socialicon-13 bd-socialicon" href="<?php echo $document->params->get('google'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
        <?php if ($pc == 1) { ?><a target="_blank" class=" bd-socialicon-14 bd-socialicon" href="<?php echo $document->params->get('pinterest'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
    
    
    
    
    
</div><?php } ?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-18 
 col-lg-15
 col-sm-12">
    <div class="bd-layoutcolumn-18"><div class="bd-vertical-align-wrapper"><div class="bd-separator-5  bd-separator-center bd-separator-content-center clearfix">
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
                <div class="bd-container-68 bd-tagstyles  bd-separator-content">
                    
                        <span class="bd-content-element"><?php echo $document->params->get('maph'); ?></span>
                        <style>
                        .bd-container-68 {

    color: <?php echo $document->params->get('color13'); ?>;

						}
                        </style>
                </div>
        </div>
    </div>
</div>
	
		<div class="bd-imagestyles bd-googlemap-2 ">
    <div class="embed-responsive" style="height: 100%; width: 100%;">
          
		  
		  <iframe class="embed-responsive-item"
                src="//maps.google.com/maps?output=embed&q=<?php echo $document->params->get('map1'); ?>, <?php echo $document->params->get('map2'); ?>&t=m"></iframe>
    </div>
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
	
		<div class=" bd-animation-6 animated" data-animation-name="fadeIn"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
                                    <?php if ($dbc == 1) { ?><section class=" bd-section-12 bd-tagstyles" id="diablodesign" data-section-title="diablodesign">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutbox-18 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-animation-7 animated" data-animation-name="bounce"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<img class="bd-imagestyles bd-imagelink-12   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/devilek.png"></div>
	
		<p class=" bd-textblock-9 bd-content-element">
 
Copyright © <?php echo date("Y");?> Design by :<a href="http://diablodesign.eu">Diablodesign.eu

</p>
    </div>
</div>
        </div>
    </div>
</section><?php } ?></div>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1">
    <span class=" bd-icon-66"></span>
</a></div>
</body>
</html>