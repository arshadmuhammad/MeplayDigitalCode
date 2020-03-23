<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:36 PM
 */

namespace MagArs\DigitalCodes\Model;


use MagArs\DigitalCodes\Api\Data\OrderItemInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class OrderItem extends AbstractModel implements IdentityInterface,OrderItemInterface {

    const CACHE_TAG = 'digital_codes_order_item';

    protected $_cacheTag = 'digital_codes_order_item';

    protected $_eventPrefix = 'digital_codes_order_item';

    protected function _construct() {
        $this->_init(ResourceModel\OrderItem::class);
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
        return $this->getData(self::ID);
    }

    public function setId($id) {
        return $this->setData(self::ID, $id);
    }

    public function getDigitalOrderId() {
        return $this->getData(self::DIGITAL_ORDER_ID);
    }

    public function setDigitalOrderId($id) {
        return $this->setData(self::DIGITAL_ORDER_ID, $id);
    }

    public function getOrderedItemId() {
        return $this->getData(self::ORDERED_ITEM_ID);
    }

    public function setOrderedItemId($id) {
        return $this->setData(self::ORDERED_ITEM_ID, $id);
    }

    public function getSerialNo() {
        return $this->getData(self::SERIAL_NO);
    }

    public function setSerialNo($no) {
        return $this->setData(self::SERIAL_NO, $no);
    }

    public function getPin() {
        return $this->getData(self::PIN);
    }

    public function setPin($pin) {
        return $this->setData(self::PIN, $pin);
    }
}
