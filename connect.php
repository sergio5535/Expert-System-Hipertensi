<?php

class koneksi
{

  private $_host = 'localhost';
  private $_username = 'root';
  private $_password = '';
  private $_database = 'hipertensi';

  protected $conn;

  public function __construct()
  {
    if (!isset($this->connection)) {

      $this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

      if (!$this->conn) {
        echo 'Cannot to database server';
        exit;
      }
    }

    return $this->conn;
  }
}
