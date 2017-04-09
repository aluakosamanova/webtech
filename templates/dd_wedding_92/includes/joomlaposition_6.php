<?php
function joomlaposition_6() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-25') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-25')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-25')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-6 clearfix" <?php echo buildDataPositionAttr('position-25'); ?>>
        <?php echo $view->position('position-25', 'block%joomlaposition_block_6', '6'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-25')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}