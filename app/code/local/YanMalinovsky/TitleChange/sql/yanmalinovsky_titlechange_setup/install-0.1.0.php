<?php
/**
 * Create 'gender' and 'brand' attributes.
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_TitleChange
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Mage_Core_Model_Resource_Setup
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_TitleChange
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */

$installer = $this;
$catalogInstaller = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$catalogInstaller->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'gender', array(
    'group'                      => 'General',
    'type'                       => 'varchar',
    'label'                      => 'Gender',
    'input'                      => 'select',
    'source'                     => 'yanmalinovsky_titlechange/gender',
    'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'visible'                    => true,
    'required'                   => true,
    'user_defined'               => true,
    'searchable'                 => true,
    'unique'                     => false,
    'filterable'                 => false,
    'comparable'                 => false,
    'visible_on_front'           => false,
    'visible_in_advanced_search' => false,
    'used_in_product_listing'    => false
));

$catalogInstaller->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'brand', array(
    'group'                      => 'General',
    'type'                       => 'varchar',
    'label'                      => 'Brand',
    'input'                      => 'text',
    'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'visible'                    => true,
    'required'                   => true,
    'user_defined'               => true,
    'searchable'                 => true,
    'unique'                     => false,
    'filterable'                 => false,
    'comparable'                 => false,
    'visible_on_front'           => false,
    'visible_in_advanced_search' => false,
    'used_in_product_listing'    => false
));

$installer->endSetup();


