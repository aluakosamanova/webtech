<?php
    function sidebar_area_5() {
        $isPreview = $GLOBALS['theme_settings']['is_preview'];
        $GLOBALS['isModuleContentExists'] = false;
        ob_start();
?>
        <?php
    renderTemplateFromIncludes('joomlaposition_16');
?>
	
		<div class=" bd-layoutcontainer-43">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                ">
                <div class=" bd-layoutcolumn-col-102 
 col-sm-12">
    <div class="bd-layoutcolumn-102"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_26');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-103 
 col-sm-12">
    <div class="bd-layoutcolumn-103"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_28');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        <?php
            $content = trim(ob_get_clean());
            $modContentExists = $GLOBALS['isModuleContentExists'];
            $showContent = strlen(trim(preg_replace('/<!-- empty::begin -->[\s\S]*?<!-- empty::end -->/', '', $content)));
        ?>
        <?php if ($isPreview || ($content && true === $modContentExists)): ?>
            <aside class="bd-sidebararea-5-column  bd-flex-vertical bd-flex-fixed<?php echo ($isPreview && !$modContentExists) ? ' hidden bd-hidden-sidebar' : ''; ?>">
                <div class="bd-sidebararea-5 bd-flex-wide">
                    
                    <?php echo $content; ?>
                    
                </div>
            </aside>
        <?php endif; ?>
<?php
    }
?>