<?php
function joomlaposition_15() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-26') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-26')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-26')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-15 clearfix" <?php echo buildDataPositionAttr('position-26'); ?>>
        <?php echo $view->position('position-26', 'block%joomlaposition_block_15', '15'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-26')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}