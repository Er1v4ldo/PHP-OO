<?php

class  ServiceProduct implements IServiceProduct
{
   private $db;

   public function __construct(IConn $db)
   {
      $this->db = $db->connect();
   }

   public function listProduct()
   {
      $query = "Select * from products";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
   }
   public function salveProduct()
   {

   }
   public function updateProduct()
   {

   }
   public function deleteProduct()
   {

   }
}
