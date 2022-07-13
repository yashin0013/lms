<?php 
namespace App\Models;
use CodeIgniter\Model;

class RegisterApiModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name','email','password'];
}