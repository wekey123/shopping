<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('vendor');
		echo $this->Form->input('type');
		echo $this->Form->input('tags');
		echo $this->Form->input('publish');
		echo $this->Form->input('price');
		echo $this->Form->input('list_price');
		echo $this->Form->input('sku');
		echo $this->Form->input('barcode');
		echo $this->Form->input('quantity');
		echo $this->Form->input('weight');
		echo $this->Form->input('varients');
		echo $this->Form->input('tax');
		echo $this->Form->input('shipping');
		echo $this->Form->input('published_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Product.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
