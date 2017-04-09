<?php
function joomlaposition_28() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-22') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-22')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-22')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-28 clearfix" <?php echo buildDataPositionAttr('position-22'); ?>>
        <?php echo $view->position('position-22', 'block%joomlaposition_block_28', '28'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-22')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}