<?php
/**
 * 自定义归档页文档
 *
 * @package custom
 */
 $this->need('header.php'); ?>


    <div class="grid_10" id="content">
        <div class="post">
			<div class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
			<p class="entry_data">
								<?php _e(' '); ?><?php  date_default_timezone_set("Asia/Shanghai"); $this->date('D, M jS, Y'); ?></p>
				
			
	<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);

    $year=0; $mon=0; $i=0; $j=0;

    $output = '<div id="archives">';

    while($archives->next()):

        $year_tmp = date('Y',$archives->created);

        $mon_tmp = date('m',$archives->created);

        $y=$year; $m=$mon;

        if ($mon != $mon_tmp && $mon >0 ) $output .= '</ul></li>';

        if ($year != $year_tmp && $year >0 ) $output .= '</ul>';

        if ($year != $year_tmp) {

            $year = $year_tmp;

            $output .= '<h3>'. $year .' 年</h3><ul>'; //输出年份

        }

        if ($mon != $mon_tmp) {

            $mon = $mon_tmp;

            $output .= '<li><span>'. $mon .' 月</span><ul>'; //输出月份

        }

        $output .= '<li>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> '; //输出文章日期和标题

    endwhile;

    $output .= '</ul></li></ul></div>';

    echo $output;

?>	    	</section>				       
				</div>
<div class="etc">
<span id="next"> <?php $this->theNext('%s',null, array('title' => '<span class="next">
                        <img src="//file.upstairs.cn/icon/prev.png"></span>', 'tagClass' => 'next-content')); ?></span>
<span class="tags">
<p><?php _e(' #'); ?><?php $this->tags(' #', true,' 无标签'); ?></p>
<p><?php _e('@'); ?><?php date_default_timezone_set("Asia/Shanghai"); $this->date('h:i:s A'); ?></p></span>


<span id="prev"><?php $this->thePrev('%s', null, array('title' => '<span class="prev"><img src="//file.upstairs.cn/icon/next.png"></span>', 'tagClass' => 'prev-content')); ?></span>

</div>
    </div>

    <?php $this->need('comments.php'); ?>

</div><!-- end #main-->

<!-- end #content-->

	<?php $this->need('footer.php'); ?>
