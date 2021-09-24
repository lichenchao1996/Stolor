<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div id="main" role="main">
            <ul class="post-list clearfix">
                <li class="post-item grid-item">
                    <?php $dontKnowId = "dontKnow"; $dontKnowRed = rand(1, 254); $dontKnowGreen = rand(1, 254); $dontKnowBlue = rand(1, 254); ?>
                    <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                        <a class="post-link" style="border: rgb(<?php echo $dontKnowRed ?>, <?php echo $dontKnowGreen ?>, <?php echo $dontKnowBlue ?>);" onmouseover="mouseOverColor(<?php echo $dontKnowId ?>, <?php echo (255 - $dontKnowRed) ?>, <?php echo (255 - $dontKnowGreen) ?>, <?php echo (255 - $dontKnowBlue) ?>)" onmouseout="mouseOutColor(<?php echo $dontKnowId ?>, <?php echo (255 - $dontKnowRed) ?>, <?php echo (255 - $dontKnowGreen) ?>, <?php echo (255 - $dontKnowBlue) ?>)">
                        <h3 id="<?php echo $dontKnowId ?>" class="post-title" style="color: rgb(<?php echo (255 - $dontKnowRed) ?>, <?php echo (255 - $dontKnowGreen) ?>, <?php echo (255 - $dontKnowBlue) ?>);">404<br>不知道发生了什么...</h3>
                    <?php else : ?>
                        <a class="post-link" style="border: rgb(<?php echo $dontKnowRed ?>, <?php echo $dontKnowGreen ?>, <?php echo $dontKnowBlue ?>);" onmouseover="mouseOverColor(<?php echo $dontKnowId ?>, <?php echo $dontKnowRed ?>, <?php echo $dontKnowGreen ?>, <?php echo $dontKnowBlue ?>)" onmouseout="mouseOutColor(<?php echo $dontKnowId ?>, <?php echo $dontKnowRed ?>, <?php echo $dontKnowGreen ?>, <?php echo $dontKnowBlue ?>)">
                        <h3 id="<?php echo $dontKnowId ?>" class="post-title" style="color: rgb(<?php echo $dontKnowRed ?>, <?php echo $dontKnowGreen ?>, <?php echo $dontKnowBlue ?>);">404<br>不知道发生了什么...</h3>
                    <?php endif; ?>
                        <div class="post-meta" style="background: rgb(<?php echo $dontKnowRed ?>, <?php echo $dontKnowGreen ?>, <?php echo $dontKnowBlue ?>);">(,,• ₃ •,,)</div>
                    </a>
                </li>
                <li class="post-item grid-item">
                    <?php $searchId = "searchOnce"; $searchRed = rand(1, 254); $searchGreen = rand(1, 254); $searchBlue = rand(1, 254); ?>
                    <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                        <a href="javascript:Search404();" class="post-link" style="border: rgb(<?php echo $searchRed ?>, <?php echo $searchGreen ?>, <?php echo $searchBlue ?>);" onmouseover="mouseOverColor(<?php echo $searchId ?>, <?php echo (255 - $searchRed) ?>, <?php echo (255 - $searchGreen) ?>, <?php echo (255 - $searchBlue) ?>)" onmouseout="mouseOutColor(<?php echo $searchId ?>, <?php echo (255 - $searchRed) ?>, <?php echo (255 - $searchGreen) ?>, <?php echo (255 - $searchBlue) ?>)">
                        <h3 id="<?php echo $searchId ?>" class="post-title" style="color: rgb(<?php echo (255 - $searchRed) ?>, <?php echo (255 - $searchGreen) ?>, <?php echo (255 - $searchBlue) ?>);">搜索一下</h3>
                    <?php else : ?>
                        <a href="javascript:Search404();" class="post-link" style="border: rgb(<?php echo $searchRed ?>, <?php echo $searchGreen ?>, <?php echo $searchBlue ?>);" onmouseover="mouseOverColor(<?php echo $searchId ?>, <?php echo $searchRed ?>, <?php echo $searchGreen ?>, <?php echo $searchBlue ?>)" onmouseout="mouseOutColor(<?php echo $searchId ?>, <?php echo $searchRed ?>, <?php echo $searchGreen ?>, <?php echo $searchBlue ?>)">
                        <h3 id="<?php echo $searchId ?>" class="post-title" style="color: rgb(<?php echo $searchRed ?>, <?php echo $searchGreen ?>, <?php echo $searchBlue ?>);">搜索一下</h3>
                    <?php endif; ?>
                        <div class="post-meta" style="background: rgb(<?php echo $searchRed ?>, <?php echo $searchGreen ?>, <?php echo $searchBlue ?>);">(•̀ᴗ•́)و ̑̑</div>
                    </a>
                </li>
                <li class="post-item grid-item">
                <?php $homeId = "home"; $homeRed = rand(1, 254); $homeGreen = rand(1, 254); $homeBlue = rand(1, 254); ?>
                    <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                        <a href="<?php $this->options->siteUrl(); ?>" class="post-link" style="border: rgb(<?php echo $homeRed ?>, <?php echo $homeGreen ?>, <?php echo $homeBlue ?>);" onmouseover="mouseOverColor(<?php echo $homeId ?>, <?php echo (255 - $homeRed) ?>, <?php echo (255 - $homeGreen) ?>, <?php echo (255 - $homeBlue) ?>)" onmouseout="mouseOutColor(<?php echo $homeId ?>, <?php echo (255 - $homeRed) ?>, <?php echo (255 - $homeGreen) ?>, <?php echo (255 - $homeBlue) ?>)">
                        <h3 id="<?php echo $homeId ?>" class="post-title" style="color: rgb(<?php echo (255 - $homeRed) ?>, <?php echo (255 - $homeGreen) ?>, <?php echo (255 - $homeBlue) ?>);">返回首页</h3>
                    <?php else : ?>
                        <a href="<?php $this->options->siteUrl(); ?>" class="post-link" style="border: rgb(<?php echo $homeRed ?>, <?php echo $homeGreen ?>, <?php echo $homeBlue ?>);" onmouseover="mouseOverColor(<?php echo $homeId ?>, <?php echo $homeRed ?>, <?php echo $homeGreen ?>, <?php echo $homeBlue ?>)" onmouseout="mouseOutColor(<?php echo $homeId ?>, <?php echo $homeRed ?>, <?php echo $homeGreen ?>, <?php echo $homeBlue ?>)">
                        <h3 id="<?php echo $homeId ?>" class="post-title" style="color: rgb(<?php echo $homeRed ?>, <?php echo $homeGreen ?>, <?php echo $homeBlue ?>);">返回首页</h3>
                    <?php endif; ?>
                        <div class="post-meta" style="background: rgb(<?php echo $homeRed ?>, <?php echo $homeGreen ?>, <?php echo $homeBlue ?>);">(・(ｪ)・)</div>
                    </a>
                </li>
                <li class="post-item grid-item">
                <?php $nothingId = "nothing"; $nothingRed = rand(1, 254); $nothingGreen = rand(1, 254); $nothingBlue = rand(1, 254); ?>
                    <?php if ($GLOBALS['isDiffColorCard'] == 'on') : ?>
                        <a class="post-link" style="border: rgb(<?php echo $nothingRed ?>, <?php echo $nothingGreen ?>, <?php echo $nothingBlue ?>);" onmouseover="mouseOverColor(<?php echo $nothingId ?>, <?php echo (255 - $nothingRed) ?>, <?php echo (255 - $nothingGreen) ?>, <?php echo (255 - $nothingBlue) ?>)" onmouseout="mouseOutColor(<?php echo $nothingId ?>, <?php echo (255 - $nothingRed) ?>, <?php echo (255 - $nothingGreen) ?>, <?php echo (255 - $nothingBlue) ?>)">
                        <h3 id="<?php echo $nothingId ?>" class="post-title" style="color: rgb(<?php echo (255 - $nothingRed) ?>, <?php echo (255 - $nothingGreen) ?>, <?php echo (255 - $nothingBlue) ?>);">没了哦</h3>
                    <?php else : ?>
                        <a class="post-link" style="border: rgb(<?php echo $nothingRed ?>, <?php echo $nothingGreen ?>, <?php echo $nothingBlue ?>);" onmouseover="mouseOverColor(<?php echo $nothingId ?>, <?php echo $nothingRed ?>, <?php echo $nothingGreen ?>, <?php echo $nothingBlue ?>)" onmouseout="mouseOutColor(<?php echo $nothingId ?>, <?php echo $nothingRed ?>, <?php echo $nothingGreen ?>, <?php echo $nothingBlue ?>)">
                        <h3 id="<?php echo $nothingId ?>" class="post-title" style="color: rgb(<?php echo $nothingRed ?>, <?php echo $nothingGreen ?>, <?php echo $nothingBlue ?>);">没了哦</h3>
                    <?php endif; ?>
                        <div class="post-meta" style="background: rgb(<?php echo $nothingRed ?>, <?php echo $nothingGreen ?>, <?php echo $nothingBlue ?>);">(○’ω’○)</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>