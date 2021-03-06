<?php
function joomlaposition_18() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-16') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-16')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-16')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-18 clearfix" <?php echo buildDataPositionAttr('position-16'); ?>>
        <?php echo $view->position('position-16', 'block%joomlaposition_block_18', '18'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-16')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}