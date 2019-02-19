<?php

/**

 * 2018.02.18 1.0.0

 * 

 */

 

 $this->need('header.php');

 ?>



    <div class="grid_10" id="content">

	<?php while($this->next()): ?>

        <div class="post">

			<div class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->sticky();$this->title() ?></a></div>

			<p class="entry_data">

							<span><?php _e(' '); ?><?php $this->date('D, M jS, Y'); date_default_timezone_set("Asia/Chongqing");?></span>



								

			</p>

 <?php $this->content('〖阅读全文〗'); ?>



         

        </div>

	<?php endwhile; ?>



    <?php $this->pageNav(); ?>

    </div><!-- end #content-->

		<?php $this->need('footer.php'); ?>

<script type="text/javascript" src="https://js.users.51.la/19527513.js"></script>