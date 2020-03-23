<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 2:37 PM
 */

namespace MagArs\DigitalCodes\Model;


use MagArs\DigitalCodes\Api\Data\OrderReferenceInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class OrderReference extends AbstractModel implements IdentityInterface,OrderReferenceInterface {

    const CACHE_TAG = 'digital_codes_order_reference';

    protected $_cacheTag = 'digital_codes_order_reference';

    protected $_eventPrefix = 'digital_codes_order_reference';

    protected function _construct() {
        $this->_init(ResourceModel\OrderReference::class);
    }

    public function loadByAttribute($attribute, $value)
    {
        $this->load($value, $attribute);
        return $this;
    }

    public function loadByIncrementId($incrementId){
        return $this->loadByAttribute(self::INTERNAL_ORDER_ID, $incrementId);
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return string[]
     */
    public function getIdentities() {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return int
     */
    public function getId(){
        return $this->getData(self::ORDER_ID);
    }

    /**
     * @param $id
     * @return OrderReferenceInterface|OrderReference|AbstractModel
     */
    public function setId($id){
        return $this->setData(self::ORDER_ID, $id);
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * @param $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->getData(self::CUSTOMER_EMAIL);
    }

    /**
     * @param $email
     * @return $this
     */
    public function setCustomerEmail($email)
    {
        return $this->setData(self::CUSTOMER_EMAIL, $email);
    }

    /**
     * @return string
     */
    public function getInternalOrderId()
    {
        return $this->getData(self::INTERNAL_ORDER_ID);
    }

    /**
     * @param $id
     * @return $this
     */
    public function setInternalOrderId($id)
    {
        return $this->setData(self::INTERNAL_ORDER_ID, $id);
    }

    /**
     * @return int
     */
    public function getInternalSalesOrderId()
    {
        return $this->getData(self::INTERNAL_SALES_ORDER_ID);
    }

    /**
     * @param $id
     * @return $this
     */
    public function setInternalSalesOrderId($id)
    {
        return $this->setData(self::INTERNAL_SALES_ORDER_ID,$id);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @param $status
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @return string
     */
    public function getCreateAt()
    {
        return $this->getData(self::CREATE_AT);
    }

    /**
     * @param $date
     * @return $this
     */
    public function setCreateAt($date)
    {
        return $this->setData(self::CREATE_AT, $date);
    }

}
