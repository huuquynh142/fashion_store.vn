<?php
/**
 * Created by PhpStorm.
 * User: huuqu
 * Date: 11/5/2017
 * Time: 4:08 AM
 */
include('../../../../lib/db/connectdb.php');
include('../../../../key/ProductKey.php');
class ProductControllor extends database
{
    function index(){
        $sql = 'select '
            .ProductKey::PRODUCT_ID_DB.' , '
            .ProductKey::NAME_DB.' , '
            .ProductKey::SALE_PRICE_DB .' , '
            .ProductKey::IMAGE_DB.' from  '
            .ProductKey::PRODUCT_TABLE.' , '
            .ProductKey::PRODUCT_DETAIL_TABLE.' where '
            .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
            .ProductKey::DETAIL_ID_DB;
        return array('body'=> $this->getAllData($sql));
    }

}