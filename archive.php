<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="archive-header">
            <span><?php $this->archiveTitle(array(
                        'category'  =>  _t('<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">Category</span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')"> · </span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">%s</span>'),
                        'search'    =>  _t('<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">Search</span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')"> · </span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">%s</span>'),
                        'tag'       =>  _t('<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">Tag</span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')"> · </span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">%s</span>'),
                        'author'    =>  _t('<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">Author</span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')"> · </span>' . '<span style="color: rgb(' . rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) . ')">%s</span>')
                    ), '', ''); ?></span>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div id="main" role="main">
            <ul class="post-list clearfix">
                <?php if ($this->have()) : ?>
                    <?php $index = 0 ?>
                    <?php while ($this->next()) { $indexId = 'postTitle' . $index; $red = rand(1, 254); $green = rand(1, 254); $blue = rand(1, 254); ?>
                        <li class="post-item grid-item" itemscope itemtype="http://schema.org/BlogPosting">
                            <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                                <a class="post-link" style="border: 4px solid rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);" href="<?php $this->permalink() ?>" onmouseover="mouseOverColor(<?php echo $indexId?>, <?php echo (255 - $red) ?>, <?php echo (255 - $green) ?>, <?php echo (255 - $blue) ?>)" onmouseout="mouseOutColor(<?php echo $indexId?>, <?php echo (255 - $red) ?>, <?php echo (255 - $green) ?>, <?php echo (255 - $blue) ?>)">
                            <?php else : ?>
                                <a class="post-link" style="border: 4px solid rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);" href="<?php $this->permalink() ?>" onmouseover="mouseOverColor(<?php echo $indexId?>, <?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>)" onmouseout="mouseOutColor(<?php echo $indexId?>, <?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>)">
                            <?php endif; ?>
                                <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                                    <h3 id="<?php echo $indexId ?>" class="post-title" style="color: rgb(<?php echo (255 - $red) ?>, <?php echo (255 - $green) ?>, <?php echo (255 - $blue) ?>);">
                                <?php else : ?>
                                    <h3 id="<?php echo $indexId ?>" class="post-title" style="color: rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);">
                                <?php endif; ?>
                                    <time class="index-time" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('M j, Y'); ?></time>
                                    <br>
                                    <span><?php $this->title() ?></span>
                                </h3>
                                <?php if ($this->category) : ?>
                                    <div class="post-meta" style="background: rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);">
                                        <?php echo $this->category(', ', false); ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </li>
                        <?php $index ++ ?>
                    <?php } ?>
                <?php else : ?>
                    <br><br>
                    <h2 class="post-title">
                        <center style="color: rgb(<?php echo rand(1, 254) ?>, <?php echo rand(1, 254) ?>, <?php echo rand(1, 254) ?>)"><?php _e('(´°̥̥̥̥̥̥̥̥ω°̥̥̥̥̥̥̥̥｀) 什么都没有找到唉...'); ?></center>
                    </h2>
                <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="nav-page">
            <?php $this->pageNav('&laquo;', '&raquo;'); ?>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>