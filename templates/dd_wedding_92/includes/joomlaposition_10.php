<?php
function joomlaposition_10() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-28') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-28')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-28')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-10 clearfix" <?php echo buildDataPositionAttr('position-28'); ?>>
        <?php echo $view->position('position-28', 'block%joomlaposition_block_10', '10'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-28')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}