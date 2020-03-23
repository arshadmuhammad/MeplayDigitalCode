<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:37 PM
 */

namespace MagArs\DigitalCodes\Model;


use MagArs\DigitalCodes\Api\Data\CodeInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Code extends AbstractModel implements IdentityInterface,CodeInterface {

    const CACHE_TAG = 'digital_codes_code';

    protected $_cacheTag = 'digital_codes_code';

    protected $_eventPrefix = 'digital_codes_code';

    protected function _construct() {
        $this->_init(ResourceModel\Code::class);
    }

    public function getId() {
        return $this->getData(self::PIN_ID);
    }

    public function setId($id) {
        return $this->setData(self::PIN_ID, $id);
    }

    public function getPin() {
        return $this->getData(self::PIN);
    }

    public function setPin($pin) {
        return $this->setData(self::PIN, $pin);
    }

    public function getSerialNo() {
        return $this->getData(self::SERIAL_NO);
    }

    public function setSerialNo($no) {
        return $this->setData(self::SERIAL_NO, $no);
    }

    public function getSku() {
        return $this->getData(self::SKU);
    }

    public function setSku($sku) {
        return $this->setData(self::SKU, $sku);
    }

    public function getIsOrder() {
        return $this->getData(self::IS_ORDER);
    }

    public function setIsOrder($value) {

        return $this->setData(self::IS_ORDER, $value);
    }

    public function getIncrementalOrderId() {
        return $this->getData(self::INCREMENTAL_ORDER_ID);
    }

    public function setIncrementalOrderId($id) {
        return $this->setData(self::INCREMENTAL_ORDER_ID, $id);
    }

    public function getProductName() {
        return $this->getData(self::PRODUCT_NAME);
    }

    public function setProductName($product_name) {
        return $this->setData(self::PRODUCT_NAME, $product_name);
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return string[]
     */
    public function getIdentities() {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
