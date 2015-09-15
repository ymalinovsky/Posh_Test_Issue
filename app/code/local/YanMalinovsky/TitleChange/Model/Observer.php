<?php
/**
 * Logic for Change Title
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_TitleChange
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_TitleChange_Model_Observer
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_TitleChange
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */
class YanMalinovsky_TitleChange_Model_Observer extends Mage_Catalog_Block_Product_View
{
    public function setTitle(Varien_Event_Observer $observer)
    {
        $baseUrl = Mage::getBaseUrl();
        if ($product = $this->getProduct()) {
            $head = $observer->getLayout()->getBlock('head');
            $title = "{$product->getCategory()->getName()} {$this->__('for')} {$product->getData('gender')}.
                {$this->__('Fashion')} {$product->getData('gender')} {$product->getCategory()->getName()} {$this->__('in Kiev')}.
                {$this->__('Brand')} {$product->getData('brand')} {$this->__('for')} {$product->getData('gender')}.
                {$this->__('Price: ')}" . Mage::helper('core')->currency($product->getPrice(), true, false) . ".
                {$this->__('Website')}: {$baseUrl}.";
            $head->setTitle($title);

        } elseif ($category = Mage::registry('current_category')){
            $head = $observer->getLayout()->getBlock('head');
            if($category->getParentCategory()->getName() != 'Default Category'){
                $title = "{$category->getName()} {$this->__('for')} {$category->getParentCategory()->getName()}
                    {$this->__('buy in Kiev.')} {$this->__('Website')}: {$baseUrl}.";
            } else {
                $title = "{$category->getName()} {$this->__('products')} {$this->__('buy in Kiev.')} {$this->__('Website')}: {$baseUrl}.";
            }
            $head->setTitle($title);
        }

        return $this;
    }
}