<?php
/**
 * Shop Module class file.
 *
 * @author Syed Ekram Uddin Emon <ekram.syed@gmail.com>
 * @copyright Copyright &copy; 2014 jebmarket.com
 * @version 1.0.0
 *
 * DO NOT CHANGE THE DEFAULT CONFIGURATION VALUES!
 *
 * You may overload the module configuration values in your rights-module
 * configuration like so:
 *
 * 'modules'=>array(
 *     'shop'=>array(
 *         'userNameColumn'=>'name',
 *         'flashSuccessKey'=>'success',
 *         'flashErrorKey'=>'error',
 *     ),
 * ),
 */

class ShopModule extends CWebModule
{
    public $version = '1';

    public $debug = false;

    public $installDemoData = false;

    //public $useWithYum = false;

    // Names of the tables
    public $categoryTable             = 'jebapp_shop_category';
    public $productsTable             = 'jebapp_shop_products';
    public $orderTable                = 'jebapp_shop_order';
    public $orderPositionTable        = 'jebapp_shop_order_position';
    public $customerTable             = 'jebapp_shop_customer';
    public $addressTable              = 'jebapp_shop_address';
    public $imageTable                = 'jebapp_shop_image';
    public $shippingMethodTable       = 'jebapp_shop_shipping_method';
    public $paymentMethodTable        = 'jebapp_shop_payment_method';
    public $taxTable                  = 'jebapp_shop_tax';
    public $productSpecificationTable = 'jebapp_shop_product_specification';
    public $productVariationTable     = 'jebapp_shop_product_variation';

    //public $currencySymbol            = '$';

    //public $logoPath = 'logo.jpg';
    //public $slipView = '/order/slip';
    //public $invoiceView = '/order/invoice';
    //public $footerView = '/order/footer';

    //public $dateFormat = 'd/m/Y';

    public $imageWidthThumb = 100;
    public $imageWidth = 200;

    public $notifyAdminEmail = null;

    //public $termsView = '/order/terms';

    //public $successAction = array('//shop/order/success');
    //public $failureAction = array('//shop/order/failure');

    //public $loginUrl = array('/site/login');

    // Where the uploaded product images are stored:
    //public $productImagesFolder = 'productimages'; // Approot/...

    public $appLayout = 'application.views.layouts.main';

    //public $layout = 'application.modules.shop.views.layouts.shop';
    public $layout = 'shop.views.layouts.main';

    public function init()
    {
        $this->setImport(array(
            'shop.models.*',
            'shop.components.*',
        ));
    }

   /* public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        } else
            return false;
    }*/
}
