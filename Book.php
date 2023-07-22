<?php
include_once('IBook.php');

class Book implements IBook {
  // Properties
  public $id;
  public $tensach;
  public $tentacgia;
  public $nhaxuatban;
  public $namxb;
  public $isbn;

  public function showBook() {
    echo " Meow ";
  }

  function __construct($tensach, $tentacgia, $nhaxuatban, $namxb, $isbn)
  {
    $this->tensach = $tensach;
    $this->tentacgia = $tentacgia;
    $this->nhaxuatban = $nhaxuatban;
    $this->namxb = $namxb;
    $this->isbn = $isbn;
  }
  // Methods
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function set_tensach($tensach) {
    $this->tensach = $tensach;
  }
  
  function get_tensach() {
    return $this->tensach;
  }

  function set_tentacgia($tentacgia) {
    $this->tentacgia = $tentacgia;
  }
  
  function get_tentacgia() {
    return $this->tentacgia;
  }

  function set_nhaxuatban($nhaxuatban) {
    $this->nhaxuatban = $nhaxuatban;
  }
  
  function get_nhaxuatban() {
    return $this->nhaxuatban;
  }

  function set_namxb($namxb) {
    $this->namxb = $namxb;
  }
  
  function get_namxb() {
    return $this->namxb;
  }

  function set_isbn($isbn) {
    $this->isbn = $isbn;
  }
  
  function get_isbn() {
    return $this->isbn;
  }

}
?>