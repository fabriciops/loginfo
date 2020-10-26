<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name', array('label' =>'Nome', ['empty' => false]));

            echo $this->Form->input('units', array(
                'type'=>'select',
                'options'=>array('L'=>'Litros', 'M'=>'Metros', 'cm'=>'Centímetros', 'mm'=>'Milímetros'),
                'label' =>'Selecione a Unidade de medida'
            ),['empty' => false]);

            echo $this->Form->input('units', array(
                'type'=>'Checkbox',
                'options'=>array('L'=>'Litros', 'M'=>'Metros'),
                'label' =>'Marque se o alimento for perecível'
            ),['empty' => false]);

            echo $this->Form->control('quantity', array('label' =>'Quantidade', ['empty' => false]) );
            echo $this->Form->control('price',  array('label' =>'Valor', ['empty' => false]));
            echo $this->Form->control('Date_manufacturing', array('label' =>'Data de Fabricação', ['empty' => false]));
            echo $this->Form->control('expiration_date', ['empty' => true]);
            
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
