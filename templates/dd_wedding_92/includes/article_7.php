<?php function article_7($data) {
    ob_start();
    if (isset($data['article_id'])) {
        $attr = ' id="' . $data['postcontent_editor_id'] . '"';
    } else {
        $attr = '';
    }
    ?>
        
        <article class=" bd-article-7"<?php echo $attr; ?>>
            <div class=" bd-layoutcontainer-3">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                ">
                <div class=" bd-layoutcolumn-col-20 
 col-lg-24
 col-md-23
 col-sm-21">
    <div class="bd-layoutcolumn-20"><div class="bd-vertical-align-wrapper"><div class=" bd-settopagebackground-2 bd-settopagebackground">
<h2 class=" bd-postheader-7"  itemprop="name">
    <div class="bd-container-inner">
    <?php if (isset($data['header-text']) && strlen($data['header-text'])) : ?>
        <?php if (isset($data['header-link']) && strlen($data['header-link'])) : ?>
            <a <?php echo funcBuildRoute($data['header-link'], 'href'); ?>>
                <?php echo $data['header-text'];?>
            </a>
        <?php else: ?>
            <?php echo $data['header-text']; ?>
        <?php endif; ?>
    <?php endif; ?>
    </div>
</h2>
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutbox-9 clearfix">
    <div class="bd-container-inner">
        <?php if (isset($data['date-icons']) && count($data['date-icons'])) : ?>
<div class=" bd-posticondate-29">
    <span class=" bd-icon-35"><span><?php
        $count = count($data['date-icons']);
        foreach ($data['date-icons'] as $key => $icon) {
            echo $icon;
            if ($key !== $count - 1) echo ' | ';
        }
    ?></span></span>
</div>
<?php endif; ?>
	
		<?php if (isset($data['author-icon']) && strlen($data['author-icon'])) : ?>
<div class=" bd-posticonauthor-27">
    <span class=" bd-icon-27"><span><?php echo $data['author-icon']; ?></span></span>
</div>
<?php endif; ?>
	
		<?php if (isset($data['category-icon']) && strlen($data['category-icon'])) : ?>
<div class=" bd-posticoncategory-25">
    <span class=" bd-icon-17"><span><?php echo $data['category-icon']; ?></span></span>
</div>
<?php endif; ?>
    </div>
</div>
	
		<?php if (isset($data['data-image'])) : ?>
    <?php
    $image = $data['data-image'];
    $caption = $image['caption'];
    ?>
<div class=" bd-extendedpostimage-2">
    
    <?php if (isset($image['link']) && $image['link'] !== '') : ?>
    <a href="<?php echo $image['link']; ?>">
        <?php endif; ?>
        <img src="<?php echo $image['image']; ?>" alt="<?php echo $image['alt']; ?>" class=" bd-imagestyles-21" itemprop="image"/>
        <?php if (isset($image['link']) && $image['link'] !== '') : ?>
    </a>
    <?php endif; ?>
    
    <?php if ($caption): ?>
    <div class=" bd-container-88 bd-tagstyles ">
        <?php echo $caption; ?>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>
	
		<div class=" bd-postcontent-7 bd-tagstyles bd-custom-blockquotes" itemprop="articleBody">
    <?php
        if (isset($data['postcontent_editor_id'])) {
            $attr = ' data-editable-id="' . $data['postcontent_editor_id'] . '"';
        } else {
            $attr = '';
        }
    ?>
    <div class="bd-container-inner"<?php echo $attr; ?>>
        <?php if (isset($data['content']) && strlen($data['content'])) : ?>
            <?php
                $content = funcPostprocessPostContent($data['content']);
                echo funcContentRoutesCorrector($content);
            ?>
        <?php endif; ?>
    </div>
</div>
	
		<?php if (isset($data['tags-icon'])) : ?>
<div class=" bd-posticontags-22">
            <span class=" bd-icon-11"><span>
            <?php foreach($data['tags-icon'] as $key => $item) : ?>
            <a href="<?php echo $item['href'];?>" itemprop="keywords">
                <?php echo $item['title']; ?>
            </a>
                <?php if($key !== count($data['tags-icon']) - 1) : ?>
                <?php echo ','; ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </span></span>
</div>
<?php endif; ?>
	
		<div class=" bd-layoutbox-1 clearfix">
    <div class="bd-container-inner">
        <?php if (isset($data['readmore-link']) && isset($data['readmore-text']) ) : ?>
<a class="bd-postreadmore-1 bd-button-44 " href="<?php echo $data['readmore-link'] ?>" >
    <?php echo $data['readmore-text'] ?></a>
<?php endif; ?>
    </div>
</div>
        </article>
        <div class="bd-container-inner"><?php if (isset($data['pager'])) : ?>
<div class=" bd-pager-7">
    <ul class=" bd-pagination-7 pager">
        <?php if (preg_match('/<li[^>]*previous[^>]*>([\S\s]*?)<\/li>/', $data['pager'], $prevMatches)) : ?>
        <li class=" bd-paginationitem-7"><?php echo funcContentRoutesCorrector($prevMatches[1]); ?></li>
        <?php endif; ?>
        <?php if (preg_match('/<li[^>]*next[^>]*>([\S\s]*?)<\/li>/', $data['pager'], $nextMatches)) : ?>
        <li class=" bd-paginationitem-7"><?php echo funcContentRoutesCorrector($nextMatches[1]); ?></li>
        <?php endif; ?>
    </ul>
</div>
<?php endif; ?></div>
        
<?php
    return ob_get_clean();
}