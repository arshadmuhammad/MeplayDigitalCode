<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:37 PM
 */

namespace MagArs\DigitalCodes\Model;


use MagArs\DigitalCodes\Api\Data\ProductCodeInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class ProductCode extends AbstractModel implements IdentityInterface,ProductCodeInterface {

    const CACHE_TAG = 'digital_product_code';

    protected $_cacheTag = 'digital_product_code';

    protected $_eventPrefix = 'digital_product_code';

    protected function _construct() {
        $this->_init(ResourceModel\ProductCode::class);
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

    public function getProductId() {
        return $this->getData(self::PRODUCT_ID);
    }

    public function setProductId($id) {
        return $this->setData(self::PRODUCT_ID, $id);
    }

    public function getCodeId() {
        return $this->getData(self::CODE_ID);
    }

    public function setCodeId($id) {
        return $this->setData(self::CODE_ID, $id);
    }

    public function getPosition() {
        return $this->getData(self::POSITION);
    }

    public function setPosition($position) {
        return $this->setData(self::POSITION, $position);
    }
}
