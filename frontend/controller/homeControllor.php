<?php
/**
 * Created by PhpStorm.
 * User: huuqu
 * Date: 11/3/2017
 * Time: 1:26 AM
 */
 include('../../../lib/db/connectdb.php');
 include('../../../key/ProductKey.php');
 class HomeControllor extends database{
     function index(){
         $sql = 'select ' .ProductKey::PRODUCT_ID_DB.' , '
                          .ProductKey::NAME_DB.' , '
                          .ProductKey::SALE_PRICE_DB .' , '
                          .ProductKey::IMAGE_DB.' from  '
                          .ProductKey::PRODUCT_TABLE.' , '
                          .ProductKey::PRODUCT_DETAIL_TABLE.' where '
                          .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
                          .ProductKey::DETAIL_ID_DB.' limit 10';
         return array('body'=> $this->getAllData($sql));
     }

     function slide(){
        $sql = "select * from slide order by created_at DESC limit 5";
         return array('body'=>$this->getAllData($sql));
     }
 }