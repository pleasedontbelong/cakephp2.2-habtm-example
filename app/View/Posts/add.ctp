<div class="posts form">
<p>
	This form allows you to add a new Post and select multiple Tags for this post.
	Here I'm using the basic "multiple select" input, so  you'll need to Ctrl + Click
	to select multiple Tags.
</p>
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Post.Tag',array('label'=>'Tags', 'type'=>'select', 'multiple'=>true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
