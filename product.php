<?php

class Product {
  private $id;
  private $name;
  private $description;
  private $price;
  private $image_url;

  function __construct($id, $name, $description, $price, $image_url) {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->price = $price;
      $this->image_url = $image_url;
  }

  function getId() {
      return $this->id;
  }

  function getName() {
      return $this->name;
  }

  function getDescription() {
      return $this->description;
  }

  function getPrice() {
      return $this->price;
  }
  function getImage_url() {
    return $this->image_url;
  }

}
