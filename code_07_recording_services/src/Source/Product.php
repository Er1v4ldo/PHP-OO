<?php

namespace Source;

class Product
{
    private $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->connect();
    }
}