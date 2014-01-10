<?php

class ShopModule extends CWebModule
{
	public $version = '0.7';

	// Is the Shop in debug Mode?
	public $debug = false;

  // Whether the installer should install some demo data
	public $installDemoData = true;

	// Enable this to use the shop module together with the yii user
	// management module
	public $useWithYum = false;

	// Names of the tables
	public $categoryTable = 'jebapp_shop_category';
	public $productsTable = 'jebapp_shop_products';
	public $orderTable = 'jebapp_shop_order';
	public $orderPositionTable = 'jebapp_shop_order_position';
	public $customerTable = 'jebapp_shop_customer';
	public $addressTable = 'jebapp_shop_address';
	public $imageTable = 'jebapp_shop_image';
	public $shippingMethodTable = 'jebapp_shop_shipping_method';
	public $paymentMethodTable = 'jebapp_shop_payment_method';
	public $taxTable = 'jebapp_shop_tax';
	public $productSpecificationTable = 'jebapp_shop_product_specification';
	public $productVariationTable = 'jebapp_shop_product_variation';
	public $currencySymbol = '$';

	public $logoPath = 'logo.jpg';
	public $slipView = '/order/slip';
	public $invoiceView = '/order/invoice';
	public $footerView = '/order/footer';

	public $dateFormat = 'd/m/Y';
	
	public $imageWidthThumb = 100;
	public $imageWidth = 200;

	public $notifyAdminEmail = null;

	public $termsView = '/order/terms';
	public $successAction = array('//shop/order/success');
	public $failureAction = array('//shop/order/failure');

	public $loginUrl = array('/site/login');

	// Where the uploaded product images are stored:
	public $productImagesFolder = 'productimages'; // Approot/...

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

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			return true;
		}
		else
			return false;
	}
}
