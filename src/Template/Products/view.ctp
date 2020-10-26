<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('MENU') ?></li>
        <li><?= $this->Html->link(__('Todos ps Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $product->id], ['confirm' => __('Você realmente deseja deletar este produto "{0}"?', $product->name)]) ?> </li>
        
        <li><?= $this->Html->link(__('Novo produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <div class="row">
        <h4><?= __('Nome produto') ?></h4>
        <?= $this->Text->autoParagraph(h($product->name)); ?>
    </div>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= h($product->units) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($product->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= "R$ " . $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de validade') ?></th>
            <td><?= h($product->expiration_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de fabricação') ?></th>
            <td><?= h($product->Date_manufacturing) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr> -->
    </table>
    
</div>
