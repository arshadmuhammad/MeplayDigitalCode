<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 3:04 PM
 */

namespace MagArs\DigitalCodes\Api\Data;


interface CodeInterface {

    const PIN_ID                = 'pin_id';
    const PIN                   = 'pin';
    const SERIAL_NO             = 'serial_no';
    const SKU                   = 'sku';
    const IS_ORDER              = 'is_order';
    const INCREMENTAL_ORDER_ID  = 'incremental_order_id';
    const PRODUCT_NAME          = 'product_name';

    public function getId();

    public function setId($id);

    public function getPin();

    public function setPin($pin);

    public function getSerialNo();

    public function setSerialNo($no);

    public function getSku();

    public function setSku($sku);

    public function getIsOrder();

    public function setIsOrder($value);

    public function getIncrementalOrderId();

    public function setIncrementalOrderId($id);

    public function getProductName();

    public function setProductName($product_name);

}
