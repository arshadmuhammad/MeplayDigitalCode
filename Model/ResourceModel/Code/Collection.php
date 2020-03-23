<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:55 PM
 */

namespace MagArs\DigitalCodes\Model\ResourceModel\Code;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'pin_id';
    protected $_eventPrefix = 'digital_codes_code_collection';
    protected $_eventObject = 'digital_codes_code_collection';

    protected function _construct() {
        $this->_init(\MagArs\DigitalCodes\Model\Code::class, \MagArs\DigitalCodes\Model\ResourceModel\Code::class);
    }

}
