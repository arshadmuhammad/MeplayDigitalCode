<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:37 PM
 */

namespace MagArs\DigitalCodes\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Code extends AbstractDb {

    protected function _construct() {
        $this->_init('digital_codes','pin_id');
    }
}
