<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class api_register_model extends CI_Model


{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['product_name','product_price'];
}