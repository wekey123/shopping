<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('img_src');
		echo $this->Form->input('img_alt');
		echo $this->Form->input('publish');
		echo $this->Form->input('published_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Collects'), array('controller' => 'collects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collect'), array('controller' => 'collects', 'action' => 'add')); ?> </li>
	</ul>
</div>
