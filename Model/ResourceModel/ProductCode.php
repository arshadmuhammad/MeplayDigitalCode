<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:37 PM
 */

namespace MagArs\DigitalCodes\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ProductCode extends AbstractDb {

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('product_codes','id');
    }
}
