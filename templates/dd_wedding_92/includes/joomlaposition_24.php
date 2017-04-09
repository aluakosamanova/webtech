<?php
function joomlaposition_24() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-15') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-15')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-15')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-24 clearfix" <?php echo buildDataPositionAttr('position-15'); ?>>
        <?php echo $view->position('position-15', 'block%joomlaposition_block_24', '24'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-15')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}