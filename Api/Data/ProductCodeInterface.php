<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/23/2020
 * Time: 3:04 PM
 */

namespace MagArs\DigitalCodes\Api\Data;


interface ProductCodeInterface {

    const ID            = 'id';
    const PRODUCT_ID    = 'product_id';
    const CODE_ID       = 'code_id';
    const POSITION      = 'position';

    public function getId();

    public function setId($id);

    public function getProductId();

    public function setProductId($id);

    public function getCodeId();

    public function setCodeId($id);

    public function getPosition();

    public function setPosition($position);

}
