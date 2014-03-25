<link href="<?php echo Yii::app()->theme->baseUrl; ?>/comp/switch/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
<p class="note">
    <label class="label label-success">
        <?php echo $product->getAttributeLabel('status'); ?>
    </label> &#160;
    <input id="status" type="checkbox" name="status" <?php echo $product->getAttribute('status') == 1 ? 'checked' : '' ; ?> >
    <input id="ppk" type="hidden" value="<?php echo $product->getAttribute('id'); ?>" >
</p>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
    <li><a href="#image" data-toggle="tab">Image</a></li>
    <li><a href="#seo" data-toggle="tab">SEO</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="general">
        <br />
        <table class="table table-view">
            <tr>
                <td class="label-field">
                    <?php echo $product->getAttributeLabel('sku') ?>
                </td>
                <td>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $product,
                        'attribute' => 'sku',
                        'url' => $this->createUrl('product/update'),
                    ));
                    ?>
                </td>
                <td class="label-field">
                    <?php echo $product->getAttributeLabel('barcode_type') ?>
                </td>
                <td>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $product,
                        'attribute' => 'barcode_type',
                        'url' => $this->createUrl('product/update'),
                    ));
                    ?>
                </td>
                <td class="label-field">
                    <?php echo $product->getAttributeLabel('barcode_value') ?>
                </td>
                <td>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $product,
                        'attribute' => 'barcode_value',
                        'url' => $this->createUrl('product/update'),
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <td class="label-field">
                    <?php echo $product->getAttributeLabel('title') ?>
                </td>
                <td colspan="5">
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $product,
                        'attribute' => 'title',
                        'url' => $this->createUrl('product/update'),
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <td class="label-field">
                    <?php echo $product->getAttributeLabel('short_details') ?>
                </td>
                <td colspan="5">
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'textarea',
                        'model' => $product,
                        'attribute' => 'short_details',
                        'url' => $this->createUrl('product/update'),
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <td class="label-field">
                    <?php echo $productDetail->getAttributeLabel('description') ?>
                </td>
                <td colspan="5">
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'textarea',
                        'id'=> 'description',
                        'model' => $productDetail,
                        'attribute' => 'description',
                        'url' => $this->createUrl('productDetail/update'),
                    ));
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="tab-pane fade" id="image">...</div>

    <div class="tab-pane fade" id="seo">...</div>

</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript">
    $("#status").bootstrapSwitch({
        'size':'small'
    }).on('switchChange.bootstrapSwitch', function(event, state) {
        var status;
        var pk = $('#ppk').val();
        if(state) {
            status = 1;
        } else {
            status = 0;
        }
        $.ajax({
            type: "POST",
            url: 'update',
            data: {'name':'status', 'value': status, 'pk' : pk  },
            success: function() {
                console.log(state);
            }
        });

    });
    // name:sku
    //value:222222
    //pk:5
</script>