<?php
/**
 * Created by PhpStorm.
 * User: huuqu
 * Date: 11/3/2017
 * Time: 1:26 AM
 */
 include('../../../../lib/db/connectdb.php');
 include('../../../../key/ProductKey.php');
 class HomeControllor extends database{
     function index(){
         $sql = 'select '
              .ProductKey::PRODUCT_ID_DB.' , '
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
         $sql = 'select '
             .ProductKey::PRODUCT_ID_DB.' , '
             .ProductKey::NAME_DB.' , '
             .ProductKey::SALE_PRICE_DB .' , '
             .ProductKey::COMMENT_DB.' , '
             .ProductKey::IMAGE_DB.' from  '
             .ProductKey::PRODUCT_TABLE.' , '
             .ProductKey::PRODUCT_DETAIL_TABLE.' where '
             .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
             .ProductKey::DETAIL_ID_DB.' and '
             .ProductKey::IS_SLIDE_DB.' = 1';
         return array('body'=>$this->getAllData($sql));
     }
     function carousel(){
         $sql = 'select '
             .ProductKey::PRODUCT_ID_DB.' , '
             .ProductKey::NAME_DB.' , '
             .ProductKey::SALE_PRICE_DB .' , '
             .ProductKey::IMAGE_DB.' from  '
             .ProductKey::PRODUCT_TABLE.' , '
             .ProductKey::PRODUCT_DETAIL_TABLE.' where '
             .ProductKey::PRODUCT_DETAIL_ID_DB.' = '
             .ProductKey::DETAIL_ID_DB.' order by '
             .ProductKey::CREATED_AT_DB.' DESC limit 8';
         return array('body'=>$this->getAllData($sql));
     }

 }