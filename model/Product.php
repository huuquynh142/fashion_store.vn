<?php
/**
 * Created by PhpStorm.
 * User: huuqu
 * Date: 11/4/2017
 * Time: 9:33 PM
 */

class Product
{
    protected $product_id;

    protected $quantity;

    protected $import_price;

    protected $sale_price;

    protected $discount;

    protected $image;

    protected $view;

    protected $is_slide;

    protected $created_at;

    protected $name;

    protected $color;

    protected $sile;

    protected $comment;

    /**
     * Product constructor.
     * @param $product_id
     * @param $quantity
     * @param $import_price
     * @param $sale_price
     * @param $discount
     * @param $image
     * @param $view
     * @param $is_slide
     * @param $created_at
     * @param $name
     * @param $color
     * @param $sile
     * @param $comment
     */
    public function __construct($product_id, $quantity, $import_price, $sale_price, $discount, $image, $view, $is_slide, $created_at, $name, $color, $sile, $comment)
    {
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->import_price = $import_price;
        $this->sale_price = $sale_price;
        $this->discount = $discount;
        $this->image = $image;
        $this->view = $view;
        $this->is_slide = $is_slide;
        $this->created_at = $created_at;
        $this->name = $name;
        $this->color = $color;
        $this->sile = $sile;
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getImportPrice()
    {
        return $this->import_price;
    }

    /**
     * @param mixed $import_price
     */
    public function setImportPrice($import_price)
    {
        $this->import_price = $import_price;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    /**
     * @param mixed $sale_price
     */
    public function setSalePrice($sale_price)
    {
        $this->sale_price = $sale_price;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    /**
     * @return mixed
     */
    public function getisSlide()
    {
        return $this->is_slide;
    }

    /**
     * @param mixed $is_slide
     */
    public function setIsSlide($is_slide)
    {
        $this->is_slide = $is_slide;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getSile()
    {
        return $this->sile;
    }

    /**
     * @param mixed $sile
     */
    public function setSile($sile)
    {
        $this->sile = $sile;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }


}