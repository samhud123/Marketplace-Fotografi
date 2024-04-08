<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table      = 'tbl_services';
    protected $primaryKey = 'service_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_id', 'name_service', 'description', 'price', 'photo'];
}