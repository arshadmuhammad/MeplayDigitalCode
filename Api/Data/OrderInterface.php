<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 3:05 PM
 */

namespace MagArs\DigitalCodes\Api\Data;


interface OrderInterface {

    const ORDER_ID          = 'order_id';
    const CUSTOMER_ID       = 'customer_id';
    const CUSTOMER_EMAIL    = 'customer_email';
    const PATH              = 'path';
    const INTERNAL_ORDER_ID = 'internal_order_id';
    const INTERNAL_SALES_ORDER_ID = 'internal_sales_order_id';

    public function getId();

    public function setId($id);

    public function getCustomerId();

    public function setCustomerId($id);

    public function getCustomerEmail();

    public function setCustomerEmail($email);

    public function getPath();

    public function setPath($path);

    public function getInternalOrderId();

    public function setInternalOrderId($id);

    public function getInternalSalesOrderId();

    public function setInternalSalesOrderId($id);

}
