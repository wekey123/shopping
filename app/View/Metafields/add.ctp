<div class="metafields form">
<?php echo $this->Form->create('Metafield'); ?>
	<fieldset>
		<legend><?php echo __('Add Metafield'); ?></legend>
	<?php
		echo $this->Form->input('key');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('url_handle');
		echo $this->Form->input('type');
		echo $this->Form->input('published_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Metafields'), array('action' => 'index')); ?></li>
	</ul>
</div>
