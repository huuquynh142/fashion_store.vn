<?php
/**
 * Created by PhpStorm.
 * User: huuqu
 * Date: 11/6/2017
 * Time: 1:34 AM
 */
include('../../../../lib/db/connectdb.php');
include('../../../../key/ProductKey.php');
class DetailControllor extends database
{
    function index($id){
        $sql = 'select '
            .ProductKey::PRODUCT_ID_DB.' , '
            .ProductKey::NAME_DB.' , '
            .ProductKey::SALE_PRICE_DB .' , '
            .ProductKey::IMAGE_DB.' from  '
            .ProductKey::PRODUCT_TABLE.' , '
            .ProductKey::PRODUCT_DETAIL_TABLE.' where '
            .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
            .ProductKey::DETAIL_ID_DB.' and '
            .ProductKey::PRODUCT_ID_DB.' = "'.$id.'"';
        return array('body'=> $this->getAllData($sql));
    }
}