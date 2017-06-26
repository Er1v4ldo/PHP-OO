<?php

namespace Source;

class  ServiceProduct implements IServiceProduct
{
   private $db;
   private $product;

   public function __construct(IConn $db, IProduct $product)
   {
      $this->db = $db->connect();
      $this->product = $product;
   }

   public function listProduct()
   {
      $query = "Select * from product";
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
