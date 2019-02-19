 <?php

 /**

 * 实验室

 *

 * @package custom

 */

 ?>


 	<?php $this->need('header.php'); ?>

	<ul id="lab">




<h3>实验室</h3>

<hr/>

<li id="photo"><a target="_blank" href="https://blog.cssj.fun/">记录</a></li>

<li id="photo"><a target="_blank" href="https://chensu.coding.me/">博客</a></li>

<li id="photo"><a target="_blank" href="http://ovimqd.coding.io/">文档</a></li>

<li id="photo"><a target="_blank" href="http://www.hellofont.cn/">字由</a></li>

<li id="photo"><a target="_blank" href="http://4.cssj.fun/">图库</a></li>


</ul>

 	<ul id="links">

<h3>友邻们</h3>

<hr/>

<li id="ulin"><a target="_blank" href="https://luolei.org/">罗磊</a></li>

<li id="ulin"><a target="_blank" href="http://piscme.com/">PiscMe</a></li>

<li id="ulin"><a target="_blank" href="http://cnm.im/">萌尤质</a></li>

<li id="ulin"><a target="_blank" href="http://www.moonwl.cn/">月灵博客</a></li>

<li id="ulin"><a target="_blank" href="http://www.douboke.cn/">豆's博客</a></li>

<li id="ulin"><a target="_blank" href="https://www.foreverblog.cn/">十年之约</a></li>

<li id="ulin"><a target="_blank" href="http://www.woguanni.cn/">星霜荏苒</a></li>

<li id="ulin"><a target="_blank" href="http://1900.live/">1990博客</a></li>

<li id="ulin"><a target="_blank" href="https://www.liues.cn/">流星博客</a></li>

<li id="ulin"><a target="_blank" href="http://www.markhoo.com">沉默是金</a></li>

<li id="ulin"><a target="_blank" href="http://i.dreamendy.com">欲先知</a></li>

<li id="ulin"><a target="_blank" href="https://neweb.top">杰新博客</a></li>

<li id="ulin"><a target="_blank" href="http://imaoshuo.cn/">设计狮</a></li>

<li id="ulin"><a target="_blank" href="http://www.ma-am.cn/">南歌鹿人</a></li>

<li id="ulin"><a target="_blank" href="http://1000yun.cn/">雨落泪尽</a></li>

<li id="ulin"><a target="_blank" href="https://linhai1990.com/">林海草原</a></li>

<li id="ulin"><a target="_blank" href="https://www.mulingyuer.com/">木灵鱼儿</a></li>

<li id="ulin"><a target="_blank" href="https://www.yeears.com/">南猫小栈</a></li>

<li id="ulin"><a target="_blank" href="http://blog.kukeyang.com">NEVERLAND</a></li>

<li id="ulin"><a target="_blank" href="https://love109.cn/">纪实小屋</a></li>

</ul>

 <?php $this->need('comments.php'); ?>

<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=100')->to($tags); ?>


<ul class="tags-list">

<h3>标签树</h3>

<hr/>

<?php while($tags->next()): ?>

    <li><a style="background-color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>

<?php endwhile; ?>

</ul>

 	<?php $this->need('footer.php'); ?>

	

	 