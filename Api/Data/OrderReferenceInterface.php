<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 3:05 PM
 */

namespace MagArs\DigitalCodes\Api\Data;


interface OrderReferenceInterface {

    const ORDER_ID                  = 'order_id';
    const CUSTOMER_ID               = 'customer_id';
    const CUSTOMER_EMAIL            = 'customer_email';
    const INTERNAL_ORDER_ID         = 'internal_order_id';
    const INTERNAL_SALES_ORDER_ID   = 'internal_sales_order_id';
    const STATUS                    = 'status';
    const CREATE_AT                = 'create_at';

    public function getId();

    public function setId($id);

    public function getCustomerId();

    public function setCustomerId($customerId);

    public function getCustomerEmail();

    public function setCustomerEmail($email);

    public function getInternalOrderId();

    public function setInternalOrderId($id);

    public function getInternalSalesOrderId();

    public function setInternalSalesOrderId($id);

    public function getStatus();

    public function setStatus($status);

    public function getCreateAt();

    public function setCreateAt($date);

}
