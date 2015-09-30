<div class="posts form">
<p>
	This form is like the first one but here we validate that a post must have
	at least one tag.
</p>
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post validating the number of tags'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Post.Tag',array('label'=>'At least one Tag', 'type'=>'select', 'multiple'=>true));
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
