<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('MENU') ?></li>
        <li><?= $this->Html->link(__('Cadastrar novo produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('Unid. medida') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Qtd.') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Valor') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('expiration_date') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('Date_manufacturing') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Text->autoParagraph(h($product->name)); ?></td>
                <!-- <td><?= h($product->units) ?></td> -->
                <td><?= $this->Number->format($product->quantity) ?></td>
                <td><?= "R$ " . $this->Number->format($product->price) ?></td>
                <!-- <td><?= h($product->expiration_date) ?></td> -->
                <!-- <td><?= h($product->Date_manufacturing) ?></td> -->
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $product->id]) ?>
                
                
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $product->id], ['confirm' => __('Você realmente deseja deletar o Produto "{0}"?', $product->name)]) ?> 
                
                    <!-- <?= $this->Html->link(__('Editar'), ['action' => 'edit', $product->id]) ?>-->
                </td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
