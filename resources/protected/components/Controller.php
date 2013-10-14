<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends RController {
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1'
	 */
	public $layout='//layouts/column1';

	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
    public $menu=array();

	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 */
	public $breadcrumbs=array();

    /**
     * @var string the meta description for the website
     */
    public $metaDescription = null;

    /**
     * @var string the meta keyword for the website
     */
    public $metaKeywords = null;
}