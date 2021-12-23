<?php include "model/productInterface.php";

/**
 * Product class | can not be instantiated
 */
class Product implements productInterface
{
    /**
     * primary KEY
     */
    private  $id;

    /**
     * must be UNIQUE
     */
    private  $sku;

    private  $name;

    /**
     * in $
     */
    private  $price;

    /**
     * in kg
     */
    private  $weight;

    /**
     * in MB
     */
    private  $size;

    private  $height;
    private  $width;
    private  $length;

    /**
     * start active record code
     */
    static protected $database;

    static public function setDataBase($database)
    {
        return self::$database = $database;
    }

    /**
     * constructor
     */
    public function __construct()
    {
    }

    /**
     * overrride interface method
     */
    public function addProduct()
    {
        $sql = "INSERT INTO products (id,sku,name,price,weight,size,height,width,
        length) VALUES (null, '$this->sku','$this->name','$this->price','$this->weight','$this->size','$this->height','$this->width'
        ,'$this->length')";
        $result = self::$database->query($sql);
        return $result;
    }

    /**
     * setters & getters
     */
    public function getID()
    {
        return $this->id;
    }

    public function setSKU($SKU)
    {
        $this->sku = $SKU;
    }

    public function getSKU()
    {
        return $this->sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }



    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }
}
