<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table      = 'tbl_services';
    protected $primaryKey = 'service_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_id', 'name_service', 'description', 'price', 'photo'];

    public function getAllService()
    {
        return $this->db->table('tbl_services')
            ->join('users', 'tbl_services.user_id = users.id')
            ->get()->getResultArray();
    }

    // searching
    public function search($keyword)
    {
        return $this->select('tbl_services.*, users.username')
            ->join('users', 'tbl_services.user_id = users.id')
            ->like('name_service', $keyword)
            ->orLike('description', $keyword)
            ->findAll();
    }
}