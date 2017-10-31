<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', '/');?>
            </li>
            <li class="active"><?= __('Cart') ?></li>
        </ol>
    </div>
</div>

<?php echo $this->Form->create('Cart', ['url' => ['action' => 'update']]);?>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <thead>
            <tr>
                <th><?= __('Product Name') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Total') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $total = 0;?>
            <?php foreach ($products as $product):?>
            <tr>
                <td><?= $product->name ?></td>
                <td><?= __('R$ ' . $product->price) ?>
                </td>
                <td><div class="col-xs-3">
                    <?php echo $this->Form->input('count.', ['type' => 'number', 'label' => false, 'class'=>'form-control input-sm', 'value' => $product->count]);?>
                    <?php echo $this->Form->hidden('product_id', ['label' => false, 'class'=>'form-control input-sm', 'value' => $product->id]);?>
                </div></td>
                <td><?= __('R$ '. $product->count * $product->price) ?>
                </td>
            </tr>
            <?php $total = $total + ($product->count * $product->price) ?>
            <?php endforeach;?>

            <tr class="success">
                <td colspan=3></td>
                <td><?= __('R$ ' . $total) ?>
                </td>
            </tr>
            </tbody>
        </table>

        <p class="text-right">
            <?= $this->Form->submit('Update', ['url' => [
                'action' => 'update'
            ], 'class' => 'btn btn-warning']) ?>
            <a class="btn btn-success"
               onclick="alert('Implement a payment module for buyer to make a payment.');">CheckOut</a>
        </p>
    </div>
</div>
<?php echo $this->Form->end();?>