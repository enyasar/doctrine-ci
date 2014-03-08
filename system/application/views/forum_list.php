<?php foreach($categories as $category): ?>
<div class="category">
		
	<h2><?php echo $category->title; ?></h2>

	<?php foreach($category->Forums as $forum): ?>
	<div class="forum">
			
		<h3>
			<?php echo anchor('forums/display/'.$forum->id, $forum->title) ?>
			(<?php echo $forum->Threads[0]->num_threads; ?> threads)
		</h3>
		
		<div class="description">
			<?php echo $forum->description; ?>
		</div>
			
	</div>
	<?php endforeach; ?>
	
</div>
<?php endforeach; ?>