<?php
    function sidebar_area_1() {
        $isPreview = $GLOBALS['theme_settings']['is_preview'];
        $GLOBALS['isModuleContentExists'] = false;
        ob_start();
?>
        <section class=" bd-section-46 bd-background-width bd-tagstyles" id="section46" data-section-title="2 Columns">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutcontainer-40">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                ">
                <div class=" bd-layoutcolumn-col-92 
 col-lg-24
 col-sm-24">
    <div class="bd-layoutcolumn-92"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_24');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
	
		<section class=" bd-section-40 bd-tagstyles" id="section40" data-section-title="3 Columns">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutcontainer-38">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                ">
                <div class=" bd-layoutcolumn-col-86 
 col-lg-8">
    <div class="bd-layoutcolumn-86"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_18');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-88 
 col-lg-8">
    <div class="bd-layoutcolumn-88"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_21');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-90 
 col-lg-8">
    <div class="bd-layoutcolumn-90"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_22');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
        <?php
            $content = trim(ob_get_clean());
            $modContentExists = $GLOBALS['isModuleContentExists'];
            $showContent = strlen(trim(preg_replace('/<!-- empty::begin -->[\s\S]*?<!-- empty::end -->/', '', $content)));
        ?>
        <?php if ($isPreview || ($content && true === $modContentExists)): ?>
            <aside class="bd-sidebararea-1-column  bd-flex-vertical bd-flex-fixed<?php echo ($isPreview && !$modContentExists) ? ' hidden bd-hidden-sidebar' : ''; ?>">
                <div class="bd-sidebararea-1 bd-flex-wide">
                    
                    <?php echo $content; ?>
                    
                </div>
            </aside>
        <?php endif; ?>
<?php
    }
?>