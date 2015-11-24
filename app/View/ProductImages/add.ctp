<div class="productImages form">
<?php echo $this->Form->create('ProductImage'); ?>
	<fieldset>
		<legend><?php echo __('Add Product Image'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('img_src');
		echo $this->Form->input('img_alt');
		echo $this->Form->input('published_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
