<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 首页 二
 *
 * @package custom
 */
$this->need('header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div id="main" class="col-12 clearfix" role="main">
            <article class="posti" itemscope itemtype="http://schema.org/BlogPosting">
                <div id="postTorTree">
                    <div id="indexIITor">
                        <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=0&desc=1')->to($tags); ?>
                        <?php while ($tags->next()) : ?>
                            <span><a style="color: rgb(<?php echo(rand(1, 254)); ?>, <?php echo(rand(1, 254)); ?>, <?php echo(rand(1, 254)); ?>)" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a></span>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div id="indexIIList">
                    <?php
                    $this->widget('Widget_Contents_Post_Recent', 'pageSize=896006')->to($obj);
                    $year = $mon = $i = $j = 0;
                    $output = '';
                    while ($obj->next()) {
                        $red = rand(1, 254);
                        $green = rand(1, 254);
                        $blue = rand(1, 254);
                        $catHTML = '';
                        $year_tmp = date('Y', $obj->created);
                        $mon_tmp = date('m', $obj->created);
                        $y = $year;
                        $m = $mon;
                        if ($year != $year_tmp && $year > 0) $output .= '</div>';
                        if ($year != $year_tmp) {
                            $year = $year_tmp;
                            $output .= '<h3 style="color: rgb('. rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) .')">' . $year . '</h3><div>';
                        }
                        if ($mon != $mon_tmp) {
                            $mon = $mon_tmp;
                        //    $output .= '<div><div><h4>'. $mon .' 月</h4><ul>';
                            $output .= '</ul><h4 style="color: rgb('. rand(1, 254) . ',' . rand(1, 254) . ',' . rand(1, 254) .')">'. date('M', $obj->created) . '</h4><ul>';
                        }
                        foreach ($obj->categories as $key => $c) {
                            $catHTML .= '  <a style="color: rgb(' . $red . ',' . $green . ',' . $blue . ')" href="' . $c['permalink'] . '">#' . $c['name'] . '</a>';
                        }
                        //$output .= '<li>' . '<a style="color: rgb(' . $red . ',' . $green . ',' . $blue . ')" href="' . $obj->permalink . '">' . $obj->title . '</a><span>' . date('n.j', $obj->created) . $catHTML . '</span></li>';
                        $output .= '<li>' . '<a style="color: rgb(' . $red . ',' . $green . ',' . $blue . ')" href="' . $obj->permalink . '">' . $obj->title . '</a><span style="color: rgb(' . $red . ',' . $green . ',' . $blue . ')">' . date('j M', $obj->created) . $catHTML . '</span></li>';
                    }
                    echo $output;
                    ?>
                </div>
            </article>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>