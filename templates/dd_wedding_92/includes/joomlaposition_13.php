<?php
function joomlaposition_13() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-27') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-27')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-27')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-13 clearfix" <?php echo buildDataPositionAttr('position-27'); ?>>
        <?php echo $view->position('position-27', 'block%joomlaposition_block_13', '13'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-27')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}