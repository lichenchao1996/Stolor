<?php

/**
 * Story & Color
 * based on <a href = "https://github.com/txperl/Story-for-Typecho">Story</a> by <a href = "https://github.com/txperl">Trii Hsia</a>
 * 
 * @package Stolor
 * @author lichenchao1996
 * @version v1.0
 * @link https://vrainstorm.link
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div id="main" role="main">
            <ul class="post-list clearfix">
                <?php $index = 0 ?>
                <?php while ($this->next()) { $indexId = 'postTitle' . $index; $red = rand(1, 254); $green = rand(1, 254); $blue = rand(1, 254); ?>
                    <li class="post-item grid-item" itemscope itemtype="http://schema.org/BlogPosting">
                        <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                            <a class="post-link" style="border: 4px solid rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);" href="<?php $this->permalink() ?>" onmouseover="mouseOverColor(<?php echo $indexId ?>, <?php echo (255 - $red) ?>, <?php echo (255 - $green) ?>, <?php echo (255 - $blue) ?>)" onmouseout="mouseOutColor(<?php echo $indexId?>, <?php echo (255 - $red) ?>, <?php echo (255 - $green) ?>, <?php echo (255 - $blue) ?>)">
                            <h3 id="<?php echo $indexId ?>" class="post-title" style="color: rgb(<?php echo (255 - $red) ?>, <?php echo (255 - $green) ?>, <?php echo (255 - $blue) ?>);">
                        <?php else : ?>
                            <a class="post-link" style="border: 4px solid rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);" href="<?php $this->permalink() ?>" onmouseover="mouseOverColor(<?php echo $indexId ?>, <?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>)" onmouseout="mouseOutColor(<?php echo $indexId?>, <?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>)">
                            <h3 id="<?php echo $indexId ?>" class="post-title" style="color: rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);">
                        <?php endif; ?>
                                <time class="index-time" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('M j, Y'); ?></time>
                                <br>
                                <span><?php $this->title() ?></span>
                            </h3>
                            <?php
                                if (@$this->fields->cover) {
                                    echo '<span class="cover" style="background: url(' . $this->fields->cover . ') center/cover no-repeat !important; opacity:' . $GLOBALS['style_BG_opacity'] . ';"></span>';
                                }
                            ?>
                            <?php if ($this->category) : ?>
                                <div class="post-meta" style="background: rgb(<?php echo $red ?>, <?php echo $green ?>, <?php echo $blue ?>);">
                                    <?php echo $this->category(', ', false); ?>
                                </div>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php $index ++ ?>
                <?php } ?>
            </ul>
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