<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:36 PM
 */

namespace MagArs\DigitalCodes\Model;


use MagArs\DigitalCodes\Api\Data\OrderInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Order extends AbstractModel implements IdentityInterface,OrderInterface {

    const CACHE_TAG = 'digital_codes_order';

    protected $_cacheTag = 'digital_codes_order';

    protected $_eventPrefix = 'digital_codes_order';

    protected function _construct() {
        $this->_init(ResourceModel\Order::class);
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return string[]
     */
    public function getIdentities() {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId() {
        return $this->setData(self::ORDER_ID);
    }

    public function setId($id) {
        return $this->getData(self::ORDER_ID, $id);
    }

    public function getCustomerId() {
        return $this->getData(self::CUSTOMER_ID);
    }

    public function setCustomerId($id) {
        return $this->setData(self::CUSTOMER_ID, $id);
    }

    public function getCustomerEmail() {
        return $this->getData(self::CUSTOMER_EMAIL);
    }

    public function setCustomerEmail($email) {
        return $this->setData(self::CUSTOMER_ID, $email);
    }

    public function getPath() {
        return $this->getData(self::PATH);
    }

    public function setPath($path) {
        return $this->setData(self::PATH, $path);
    }

    public function getInternalOrderId() {
        return $this->getData(self::INTERNAL_ORDER_ID);
    }

    public function setInternalOrderId($id) {
        return $this->setData(self::INTERNAL_ORDER_ID, $id);
    }

    public function getInternalSalesOrderId() {
        return $this->getData(self::INTERNAL_SALES_ORDER_ID);
    }

    public function setInternalSalesOrderId($id) {
        return $this->setData(self::INTERNAL_SALES_ORDER_ID, $id);
    }
}
