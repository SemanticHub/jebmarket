<p class="note">Fields with <span class="required">*</span> are required.</p>

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
        <table class="table clearfix">
            <tr>
                <th>
                    <?php echo $product->getAttributeLabel('sku') ?>
                </th>
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
                <th>
                    <?php echo $product->getAttributeLabel('barcode_type') ?>
                </th>
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
                <th>
                    <?php echo $product->getAttributeLabel('barcode_value') ?>
                </th>
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
                <th>
                    <?php echo $product->getAttributeLabel('title') ?>
                </th>
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
                <th>
                    <?php echo $product->getAttributeLabel('short_details') ?>
                </th>
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
                <th>
                    <?php echo $productDetail->getAttributeLabel('description') ?>
                </th>
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
