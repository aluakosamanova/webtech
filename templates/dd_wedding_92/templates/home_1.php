<!DOCTYPE html>
<html dir="<?php echo $document->params->get('direction'); ?>">
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
<body class=" bootstrap bd-body-1 bd-pagebackground-13">
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
</header>
<style>
.bd-slide-5 {background-image: url(<?php echo $document->params->get('foto1'); ?>)}
.bd-slide-4 {background-image: url(<?php echo $document->params->get('foto2'); ?>)}
.bd-slide-1 { background-image: url(<?php echo $document->params->get('foto3'); ?>)}
.bd-slide-6 {background-image: url(<?php echo $document->params->get('foto4'); ?>)}
.bd-slide-9 {background-image: url(<?php echo $document->params->get('foto5'); ?>)}
.bd-section-15 {background-image: url(<?php echo $document->params->get('foto7'); ?>)}
</style>


</div>
	
		<?php if ($slc == 1) { ?><section class=" bd-section-7 bd-tagstyles" id="Sekcja slideshow" data-section-title="Slideshow">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-parallaxbackground-3 bd-parallax-bg-effect" data-control-selector=".bd-slider-7">



<div id="carousel-7" class="bd-slider bd-slider-7  carousel slide bd-carousel-fade">
    

    

    

    <div class="bd-slides carousel-inner">
        <div class=" bd-slide-5 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-2 animated" data-animation-name="fadeIn"
                                    data-animation-event="slidein"
                                    data-animation-duration="2100ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<p class=" bd-textblock-4 bd-content-element">
<?php if ($slcc == 1) { ?><?php echo $document->params->get('s1'); ?><?php } ?>
</p>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-4 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-3 animated" data-animation-name="fadeIn"
                                    data-animation-event="slidein"
                                    data-animation-duration="2100ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<p class=" bd-textblock-8 bd-content-element">
<?php if ($slcc == 1) { ?><?php echo $document->params->get('s2'); ?><?php } ?>
</p>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-1 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-1 animated" data-animation-name="fadeIn"
                                    data-animation-event="slidein"
                                    data-animation-duration="2100ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<p class=" bd-textblock-2 bd-content-element">
<?php if ($slcc == 1) { ?><?php echo $document->params->get('s3'); ?><?php } ?>
</p>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-6 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-8 animated" data-animation-name="fadeIn"
                                    data-animation-event="slidein"
                                    data-animation-duration="2100ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<p class=" bd-textblock-23 bd-content-element">
<?php if ($slcc == 1) { ?><?php echo $document->params->get('s4'); ?><?php } ?>
</p>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-9 bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-9 animated" data-animation-name="fadeIn"
                                    data-animation-event="slidein"
                                    data-animation-duration="2100ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<p class=" bd-textblock-25 bd-content-element">
<?php if ($slcc == 1) { ?><?php echo $document->params->get('s5'); ?><?php } ?>
</p>
</div>
        </div>
    </div>
</div>
    </div>

    

    

    
        <div class="bd-left-button">
    <a class=" bd-carousel-8" href="#">
        <span></span>
    </a>
</div>

<div class="bd-right-button">
    <a class=" bd-carousel-8" href="#">
        <span></span>
    </a>
</div>

    <script type="text/javascript">
        /* <![CDATA[ */
        if ('undefined' !== typeof initSlider) {
            initSlider(
                '.bd-slider-7',
                {
                    leftButtonSelector: 'bd-left-button',
                    rightButtonSelector: 'bd-right-button',
                    navigatorSelector: '.bd-carousel-8',
                    indicatorsSelector: '.bd-indicators',
                    carouselInterval: <?php echo $document->params->get('speed'); ?>,
                    carouselPause: "hover",
                    carouselWrap: true,
                    carouselRideOnStart: true
                }
            );
        }
        /* ]]> */
    </script>
</div></div>
        </div>
    </div>
</section><?php } ?>
	
		<?php if ($ibc == 1) { ?><div class=" bd-animation-5 animated" data-animation-name="fadeIn"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    ><section class=" bd-section-1 bd-section-sheet-align bd-tagstyles" id="przywitanie" data-section-title="przywitanie">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutbox-3 clearfix">
    <div class="bd-container-inner">
        <h1 class=" bd-textblock-3 bd-content-element">
<?php echo $document->params->get('it1'); ?>
</h1>
	
		<div class="bd-separator-2  bd-separator-center bd-separator-content-center clearfix">
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<div class=" bd-spacer-2 clearfix"></div>
	
		<p class=" bd-textblock-7 bd-content-element">
<?php echo $document->params->get('it2'); ?>
</p>
	
		<div class=" bd-spacer-5 clearfix"></div>
	
		<a href="<?php echo $document->params->get('ibl'); ?>" class=" bd-linkbutton-5 bd-button-35 bd-icon-16 bd-content-element"   >
<?php echo $document->params->get('ibn'); ?>
</a>
    </div>
</div>
        </div>
    </div>
</section></div><?php } ?>
	
		<?php if ($closegalery == 1) { ?><div class=" bd-animation-4 animated" data-animation-name="fadeIn"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    ><section class=" bd-section-9 bd-section-sheet-align bd-tagstyles" id="polaroid" data-section-title="polaroid">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutbox-2 clearfix">
    <div class="bd-container-inner">
        <h1 class=" bd-textblock-75 bd-content-element">
<?php echo $document->params->get('ght'); ?>
</h1>
	
		<div class="bd-separator-21  bd-separator-left bd-separator-content-center clearfix">
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<div id="carousel-2" class="bd-slider bd-slider-2 bd-background-width  carousel slide bd-carousel-left">
    

    

    

    <div class="bd-slides carousel-inner">
        <div class=" bd-slide-2 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-layoutbox-5 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutcontainer-42">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-top
                ">
               <div class=" bd-layoutcolumn-col-85 
 col-sm-8">
    <div class="bd-layoutcolumn-85"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-22 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-50">
<img class="bd-imagestyles bd-imagelink-50   " src="<?php echo $document->params->get('p1'); ?>"></div>
	
		<h2 class=" bd-textblock-77 bd-content-element">
<?php echo $document->params->get('p2'); ?>
</h2>
	
		<p class=" bd-textblock-79 bd-content-element">
<?php echo $document->params->get('p3'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p5'); ?>" class=" bd-linkbutton-10 btn   btn-default bd-icon-33 bd-content-element"   >
<?php echo $document->params->get('p4'); ?>
</a></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-89 
 col-sm-8">
    <div class="bd-layoutcolumn-89"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-24 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-52">
<img class="bd-imagestyles bd-imagelink-52   " src="<?php echo $document->params->get('p6'); ?>"></div>
	
		<h2 class=" bd-textblock-81 bd-content-element">
<?php echo $document->params->get('p7'); ?>
</h2>
	
		<p class=" bd-textblock-83 bd-content-element">
<?php echo $document->params->get('p8'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p10'); ?>" class=" bd-linkbutton-4 btn   btn-default bd-icon-26 bd-content-element"   >
<?php echo $document->params->get('p9'); ?>
</a></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-93 
 col-sm-8">
    <div class="bd-layoutcolumn-93"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-26 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-54">
<img class="bd-imagestyles bd-imagelink-54   " src="<?php echo $document->params->get('p11'); ?>"></div>
	
		<h2 class=" bd-textblock-85 bd-content-element">
<?php echo $document->params->get('p12'); ?>
</h2>
	
		<p class=" bd-textblock-87 bd-content-element">
<?php echo $document->params->get('p13'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p15'); ?>" class=" bd-linkbutton-9 btn   btn-default bd-icon-31 bd-content-element"   >
<?php echo $document->params->get('p14'); ?>
</a></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-3 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-layoutbox-4 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutcontainer-10">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-top
                ">
                <div class=" bd-layoutcolumn-col-34 
 col-sm-8">
    <div class="bd-layoutcolumn-34"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-3 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-5">
<img class="bd-imagestyles bd-imagelink-5   " src="<?php echo $document->params->get('p16'); ?>"></div>
	
		<h2 class=" bd-textblock-16 bd-content-element">
<?php echo $document->params->get('p17'); ?>
</h2>
	
		<p class=" bd-textblock-14 bd-content-element">
<?php echo $document->params->get('p18'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p20'); ?>" class=" bd-linkbutton-11 btn   btn-default bd-icon-34 bd-content-element"   >
<?php echo $document->params->get('p19'); ?>
</a></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-29 
 col-sm-8">
    <div class="bd-layoutcolumn-29"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-2 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-4">
<img class="bd-imagestyles bd-imagelink-4   " src="<?php echo $document->params->get('p21'); ?>"></div>
	
		<h2 class=" bd-textblock-13 bd-content-element">
<?php echo $document->params->get('p22'); ?>
</h2>
	
		<p class=" bd-textblock-11 bd-content-element">
<?php echo $document->params->get('p23'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p25'); ?>" class=" bd-linkbutton-8 btn   btn-default bd-icon-30 bd-content-element"   >
<?php echo $document->params->get('p24'); ?>
</a></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-27 
 col-sm-8">
    <div class="bd-layoutcolumn-27"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-1 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-1">
<img class="bd-imagestyles bd-imagelink-1   " src="<?php echo $document->params->get('p26'); ?>"></div>
	
		<h2 class=" bd-textblock-10 bd-content-element">
<?php echo $document->params->get('p27'); ?>
</h2>
	
		<p class=" bd-textblock-5 bd-content-element">
<?php echo $document->params->get('p28'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p30'); ?>" class=" bd-linkbutton-1 btn   btn-default bd-icon-7 bd-content-element"   >
<?php echo $document->params->get('p29'); ?>
</a></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-7 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-layoutbox-14 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutcontainer-17">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-top
                ">
             <div class=" bd-layoutcolumn-col-60 
 col-sm-8">
    <div class="bd-layoutcolumn-60"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-6 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-11">
<img class="bd-imagestyles bd-imagelink-11   " src="<?php echo $document->params->get('p31'); ?>"></div>
	
		<h2 class=" bd-textblock-22 bd-content-element">
<?php echo $document->params->get('p32'); ?>
</h2>
	
		<p class=" bd-textblock-21 bd-content-element">
<?php echo $document->params->get('p33'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p35'); ?>" class=" bd-linkbutton-14 btn   btn-default bd-icon-58 bd-content-element"   >
<?php echo $document->params->get('p34'); ?>
</a></div></div>
</div>
		<div class=" bd-layoutcolumn-col-40 
 col-sm-8">
    <div class="bd-layoutcolumn-40"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-5 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-10">
<img class="bd-imagestyles bd-imagelink-10   " src="<?php echo $document->params->get('p36'); ?>"></div>
	
		<h2 class=" bd-textblock-20 bd-content-element">
<?php echo $document->params->get('p37'); ?>
</h2>
	
		<p class=" bd-textblock-19 bd-content-element">
<?php echo $document->params->get('p38'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p40'); ?>" class=" bd-linkbutton-13 btn   btn-default bd-icon-52 bd-content-element"   >
<?php echo $document->params->get('p39'); ?>
</a></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-39 
 col-sm-8">
    <div class="bd-layoutcolumn-39"><div class="bd-vertical-align-wrapper"><div class=" bd-imagescaling-4 bd-imagescaling-animated" data-imagescaling-target=" bd-imagelink-7">
<img class="bd-imagestyles bd-imagelink-7   " src="<?php echo $document->params->get('p41'); ?>"></div>
	
		<h2 class=" bd-textblock-18 bd-content-element">
<?php echo $document->params->get('p42'); ?>
</h2>
	
		<p class=" bd-textblock-17 bd-content-element">
<?php echo $document->params->get('p43'); ?>
</p>
	
		<a href="<?php echo $document->params->get('p45'); ?>" class=" bd-linkbutton-12 btn   btn-default bd-icon-38 bd-content-element"   >
<?php echo $document->params->get('p44'); ?>
</a></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
        </div>
    </div>
</div>
    </div>

    

    

    
        <div class="bd-left-button">
    <a class=" bd-carousel-4" href="#">
        <span></span>
    </a>
</div>

<div class="bd-right-button">
    <a class=" bd-carousel-4" href="#">
        <span></span>
    </a>
</div>

    <script type="text/javascript">
        /* <![CDATA[ */
        if ('undefined' !== typeof initSlider) {
            initSlider(
                '.bd-slider-2',
                {
                    leftButtonSelector: 'bd-left-button',
                    rightButtonSelector: 'bd-right-button',
                    navigatorSelector: '.bd-carousel-4',
                    indicatorsSelector: '.bd-indicators',
                    carouselInterval: 3800,
                    carouselPause: "hover",
                    carouselWrap: true,
                    carouselRideOnStart: true
                }
            );
        }
        /* ]]> */
    </script>
</div>
    </div>
</div>
        </div>
    </div>
</section></div><?php } ?>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1">
    <span class=" bd-icon-66"></span>
</a></div>
	
		<div class=" bd-stretchtobottom-1 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-9">
<div class="bd-sheetstyles bd-contentlayout-9 ">
    <div class="bd-container-inner">

        
        <div class="bd-flex-vertical bd-stretch-inner">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-27 bd-flex-wide">
    <div class=" bd-content-9">
    <div class="bd-container-inner">
        <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
            $document->view->componentWrapper('blog_2');
            echo '<jdoc:include type="component" />';
        ?>
    </div>
</div>
</div>

        
                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?>
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
 <?php renderTemplateFromIncludes('sidebar_area_4'); ?>
        </div>

    </div>
</div></div>
	
		<section class=" bd-section-4 bd-section-sheet-align bd-tagstyles" id="section40" data-section-title="3 Columns">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutcontainer-28">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                ">
                <div class=" bd-layoutcolumn-col-68 
 col-lg-8">
    <div class="bd-layoutcolumn-68"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_15');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-67 
 col-lg-8">
    <div class="bd-layoutcolumn-67"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_13');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-66 
 col-lg-8">
    <div class="bd-layoutcolumn-66"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_10');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
	
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
<?php if ($ac == 1) { ?><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $document->params->get('analytics'); ?>', 'auto');
  ga('send', 'pageview');

</script><?php } ?>
</body>
</html>