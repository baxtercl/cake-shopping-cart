<?php
     use Cake\Routing\Router;
 ?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li class="active"><?= $product->name ?>
            </li>
        </ol>
    </div>
</div>
 
<div class="row">
    <div class="col-lg-4 col-md-4">
        <?php echo $this->Html->image($product->image, ['class'=>'thumbnail']);?>
    </div>
 
    <div class="col-lg-8 col-md-8">
        <h1>
            <?= $product->name ?>
        </h1>
        <h2>
            <?= __('Preço: R$ '. number_format($product->price, 2, ',', '.')) ?>
        </h2>
        <p>
            <input type="button" class="btn-success btn btn-lg" onclick="addCart('<?= $product->id ?>')" value="Add to Cart">
        </p>

    </div>
    <div id="loading"></div>
</div>
<script>
    function addCart(id) {
        $.ajax({
            url: '<?= Router::url(['controller' => 'Carts', 'action' => 'add']) ?>' + '/' + encodeURIComponent(id),
            beforeSend: function () {
                $('#loading').html('<?= $this->Html->image('ajax-loader.gif', ['alt' => 'loading...']) ?>');
            }
        })
            .done(function (data) {
                $('#loading').html('');
                $('#cart-counter').html(data);
            });
    }
</script>