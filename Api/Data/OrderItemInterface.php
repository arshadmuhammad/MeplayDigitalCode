<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 3:05 PM
 */

namespace MagArs\DigitalCodes\Api\Data;


interface OrderItemInterface {

    const ID                = 'id';
    const DIGITAL_ORDER_ID  = 'digital_order_id';
    const ORDERED_ITEM_ID   = 'ordered_item_id';
    const SERIAL_NO         = 'serial_no';
    const PIN               = 'pin';

    public function getId();

    public function setId($id);

    public function getDigitalOrderId();

    public function setDigitalOrderId($id);

    public function getOrderedItemId();

    public function setOrderedItemId($id);

    public function getSerialNo();

    public function setSerialNo($no);

    public function getPin();

    public function setPin($pin);

}
