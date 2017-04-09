<?php
function joomlaposition_12() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-23') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-23')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-23')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-12 clearfix" <?php echo buildDataPositionAttr('position-23'); ?>>
        <?php echo $view->position('position-23', 'block%joomlaposition_block_12', '12'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-23')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}