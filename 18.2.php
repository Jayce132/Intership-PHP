<?php

class Product
{
    private $name;
    private $description;
    private $price;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function setPrice($price): void
    {
        $this->price = $price;
    }
}

class ProductBuilder
{
    private Product $product;

    public function createProduct()
    {
        $this->product = new Product();
        return $this;
    }

    public function setName($name)
    {
        $this->product->setName($name);
        return $this;
    }

    public function setDescription($description)
    {
        $this->product->setDescription($description);
        return $this;
    }

    public function setPrice($price)
    {
        $this->product->setPrice($price);
        return $this;
    }

    public function getProduct() {
        return $this->product;
    }
}

$product = new ProductBuilder();

$product
    ->createProduct()
    ->setName("shoe 13")
    ->setDescription("some shoes")
    ->setPrice(100)
    ->getProduct();

