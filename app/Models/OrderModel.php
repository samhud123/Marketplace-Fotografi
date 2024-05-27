<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'tbl_orders';
    protected $primaryKey = 'order_id';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes = true;

    protected $allowedFields = ['buyer_id', 'mitra_id', 'service_id', 'date', 'message', 'confirm', 'status_order'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // order buyer
    public function getNewOrders($userId)
    {
        return $this->db->table('tbl_orders')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->where('buyer_id', $userId)
            ->get()->getResultArray();
    }

    // order mitra
    public function getOrdersMitra($mitraId)
    {
        return $this->db->table('tbl_orders')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users', 'tbl_orders.buyer_id = users.id')
            ->where('mitra_id', $mitraId)
            ->get()->getResultArray();
    }

    public function getOrderById($orderId)
    {
        return $this->db->table('tbl_orders')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users', 'tbl_orders.buyer_id = users.id')
            ->where('order_id', $orderId)
            ->get()->getResultArray();
    }

    public function getOrderBuyerById($orderId, $buyerId)
    {
        return $this->db->table('tbl_orders')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users', 'tbl_orders.mitra_id = users.id')
            ->where('order_id', $orderId)
            ->where('buyer_id', $buyerId)
            ->get()->getResultArray();
    }

    public function adminTransMitra()
    {
        return $this->db->table('tbl_orders')
            ->select('id, email, username, nama, no_tlp, alamat')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users', 'tbl_orders.mitra_id = users.id')
            ->get()->getResultArray();
    }

    public function adminTransBuyer()
    {
        return $this->db->table('tbl_orders')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users', 'tbl_orders.buyer_id = users.id')
            ->get()->getResultArray();
    }
}
