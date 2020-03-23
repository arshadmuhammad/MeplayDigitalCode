<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:56 PM
 */

namespace MagArs\DigitalCodes\Model\ResourceModel\Order;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'order_id';
    protected $_eventPrefix = 'digital_codes_order_collection';
    protected $_eventObject = 'digital_codes_order_collection';

    protected function _construct() {
        $this->_init(\MagArs\DigitalCodes\Model\Order::class,\MagArs\DigitalCodes\Model\ResourceModel\Order::class);
    }

}
