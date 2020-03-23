<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:36 PM
 */

namespace MagArs\DigitalCodes\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Order extends AbstractDb {

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('product_codes_order', 'order_id');
    }
}
