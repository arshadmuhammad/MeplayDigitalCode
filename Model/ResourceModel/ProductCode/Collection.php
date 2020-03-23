<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:56 PM
 */

namespace MagArs\DigitalCodes\Model\ResourceModel\ProductCode;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'digital_codes_product_collection';
    protected $_eventObject = 'digital_codes_product_collection';

    protected function _construct() {
        $this->_init(\MagArs\DigitalCodes\Model\ProductCode::class,\MagArs\DigitalCodes\Model\ResourceModel\ProductCode::class);
    }
}
