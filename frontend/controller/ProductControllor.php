<?php
/**
 * Created by PhpStorm.
 * User: huuqu
 * Date: 11/6/2017
 * Time: 12:43 AM
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
            .ProductKey::IS_MEN_DB .' , '
            .ProductKey::IMAGE_DB.' from  '
            .ProductKey::PRODUCT_TABLE.' , '
            .ProductKey::PRODUCT_DETAIL_TABLE.' where '
            .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
            .ProductKey::DETAIL_ID_DB ;
        return array('body'=> $this->getAllData($sql));
    }
    function getMen(){
        $sql = 'select '
            .ProductKey::PRODUCT_ID_DB.' , '
            .ProductKey::NAME_DB.' , '
            .ProductKey::SALE_PRICE_DB .' , '
            .ProductKey::IMAGE_DB.' from  '
            .ProductKey::PRODUCT_TABLE.' , '
            .ProductKey::PRODUCT_DETAIL_TABLE.' where '
            .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
            .ProductKey::DETAIL_ID_DB.' and '
            .ProductKey::IS_MEN_DB.' = 1';
        return array('body'=> $this->getAllData($sql));
    }
    function getGirl(){
        $sql = 'select '
            .ProductKey::PRODUCT_ID_DB.' , '
            .ProductKey::NAME_DB.' , '
            .ProductKey::SALE_PRICE_DB .' , '
            .ProductKey::IMAGE_DB.' from  '
            .ProductKey::PRODUCT_TABLE.' , '
            .ProductKey::PRODUCT_DETAIL_TABLE.' where '
            .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
            .ProductKey::DETAIL_ID_DB.' and '
            .ProductKey::IS_MEN_DB.' = 0';
        return array('body'=> $this->getAllData($sql));
    }
}