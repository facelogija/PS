<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

//require_once(_PS_MODULE_DIR_) . "commentProduct/commentProductClass.php";
require_once dirname(__FILE__) . '/commentProductClass.php';

class CommentProduct extends Module implements PrestaShop\PrestaShop\Core\Module\WidgetInterface
{

	private $templateFile;
	
	public function __construct()
	{
		$this->name = 'commentproduct';
		$this->author = 'Egidijus Stalmokas';
		$this->version = '1.0';

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->trans('Product comment', array(), 'Modules.CommentProduct.Admin');
		$this->description = $this->trans('Allow store users to leave comment for product', array(), 'Modules.CommentProduct.Admin');
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

		$this->templateFile = 'module:CommentProduct/views/templates/hook/CommentProduct.tpl';

	}

	public function install() : bool
	{
		return parent::install() &&
            $this->registerHook('displayFooterProduct')
            &&
            Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ .'all_product_comment` (
            `id_comment` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `user_id` int(10) NOT NULL,
            `product_id` int(10) NOT NULL,
            `name` varchar(50) NOT NULL,
            `comment` varchar(255) NOT NULL,
            PRIMARY KEY (`id_comment`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8 ');
	}

	public function uninstall()
	{
		return parent::uninstall() &&
    Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'all_product_comment');
	}


    public function renderWidget($hookName, array $configuration)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        return $this->fetch($this->templateFile);
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        if (Tools::isSubmit('name') && Tools::isSubmit('comment'))  {
            $commentProduct = new commentProductClass();
            $commentProduct->product_id = Tools::getValue('id_product');
            $commentProduct->user_id = 1;
            $commentProduct->name = Tools::getValue('name');
            $commentProduct->comment = Tools::getValue('comment');
            $commentProduct->save();



        }else {
            //$commentOne = $this->get();
            dump($commentProduct);
        }


         return array(
             'message' => "Hello, this product is great"
         );
    }
}