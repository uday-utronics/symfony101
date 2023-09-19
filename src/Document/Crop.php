<?php
// src/Document/Crop.php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="Crops")
 */
class Crop
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     */
    private $farmerId;

    /**
     * @MongoDB\Field(type="string")
     */
    private $cropName;

    /**
     * @MongoDB\Field(type="integer")
     */
    private $cropQty;

    /**
     * @MongoDB\Field(type="string")
     */
    private $cropType;

    /**
     * @MongoDB\Field(type="string")
     */
    private $cropImgUrl;

    /**
     * @MongoDB\Field(type="string")
     */
    private $cropDesc;

    /**
     * @MongoDB\Field(type="float")
     */
    private $cropPrice;
    
    



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of farmerId
     */ 
    public function getFarmerId()
    {
        return $this->farmerId;
    }

    /**
     * Set the value of farmerId
     *
     * @return  self
     */ 
    public function setFarmerId($farmerId)
    {
        $this->farmerId = $farmerId;

        return $this;
    }

    /**
     * Get the value of cropName
     */ 
    public function getCropName()
    {
        return $this->cropName;
    }

    /**
     * Set the value of cropName
     *
     * @return  self
     */ 
    public function setCropName($cropName)
    {
        $this->cropName = $cropName;

        return $this;
    }

    /**
     * Get the value of cropQty
     */ 
    public function getCropQty()
    {
        return $this->cropQty;
    }

    /**
     * Set the value of cropQty
     *
     * @return  self
     */ 
    public function setCropQty($cropQty)
    {
        $this->cropQty = $cropQty;

        return $this;
    }

    /**
     * Get the value of cropType
     */ 
    public function getCropType()
    {
        return $this->cropType;
    }

    /**
     * Set the value of cropType
     *
     * @return  self
     */ 
    public function setCropType($cropType)
    {
        $this->cropType = $cropType;

        return $this;
    }

    /**
     * Get the value of cropImgUrl
     */ 
    public function getCropImgUrl()
    {
        return $this->cropImgUrl;
    }

    /**
     * Set the value of cropImgUrl
     *
     * @return  self
     */ 
    public function setCropImgUrl($cropImgUrl)
    {
        $this->cropImgUrl = $cropImgUrl;

        return $this;
    }

    /**
     * Get the value of cropDesc
     */ 
    public function getCropDesc()
    {
        return $this->cropDesc;
    }

    /**
     * Set the value of cropDesc
     *
     * @return  self
     */ 
    public function setCropDesc($cropDesc)
    {
        $this->cropDesc = $cropDesc;

        return $this;
    }

    /**
     * Get the value of cropPrice
     */ 
    public function getCropPrice()
    {
        return $this->cropPrice;
    }

    /**
     * Set the value of cropPrice
     *
     * @return  self
     */ 
    public function setCropPrice($cropPrice)
    {
        $this->cropPrice = $cropPrice;

        return $this;
    }
}