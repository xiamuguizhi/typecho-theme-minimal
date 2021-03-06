<?php
/**
 * 
 * @package minimal
 * @author nodejh
 * @version 0.1
 * @link http://jianghang.name
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">				
				<date class="post-meta">
					<?php $this->date('F j, Y'); ?>
				</date>
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title(); ?></a>
					</h2>
				</heaer>
				<div class="post-content">
					<?php $this->excerpt(240, '...<p class="more"><a href="'.$this->permalink.'">- 阅读剩余部分 -</a></p>'); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
