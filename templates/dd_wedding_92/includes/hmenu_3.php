<?php
function hmenu_3() {
    $view = JFactory::getDocument()->view;
    $modulesContains = $view->containsModules('position-1');
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-1') ? true : false;
    ?>
    <?php if ($isPreview || $modulesContains) : ?>
        
        <nav class=" bd-hmenu-3" data-responsive-menu="true" data-responsive-levels="">
            <?php if ($view->containsModules('position-1')) : ?>
            
                <div class=" bd-responsivemenu-2 collapse-button">
    <div class="bd-container-inner">
        <div class=" bd-menuitem-12">
            <a  data-toggle="collapse"
                data-target=".bd-hmenu-3 .collapse-button + .navbar-collapse"
                href="#" onclick="return false;">
                    <span></span>
            </a>
        </div>
    </div>
</div>
                <div class="navbar-collapse collapse">
            <?php echo $view->position('position-1', '', '3', 'hmenu'); ?>
            
                </div>
            <?php else: ?>
                Please add a menu module in the 'position-1' position
            <?php endif; ?>
        </nav>
        
    <?php endif; ?>
<?php
}