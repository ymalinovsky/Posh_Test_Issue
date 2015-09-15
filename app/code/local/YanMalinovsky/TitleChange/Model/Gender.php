<?php
/**
 * Select options container from config
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
class YanMalinovsky_TitleChange_Model_Gender extends Mage_Eav_Model_Entity_Attribute_Source_Config
{
    protected $_configNodePath;

    public function __construct()
    {
        $this->_configNodePath = 'global/options_container/gender';
    }
}
