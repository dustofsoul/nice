<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
									<?php $this->content(); ?>
		</div>

    <?php $this->need('comments.php'); ?>

</div><!-- end #main-->
	    </div><!-- end #content-->
		<?php $this->need('footer.php'); ?>
