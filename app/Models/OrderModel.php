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
            ->orderBy('order_id', 'DESC')
            ->get()->getResultArray();
    }

    // order mitra
    public function getOrdersMitra($mitraId)
    {
        return $this->db->table('tbl_orders')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users', 'tbl_orders.buyer_id = users.id')
            ->where('mitra_id', $mitraId)
            ->orderBy('order_id', 'DESC')
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

    // reports admin
    public function getAllOrders()
    {
        return $this->table('tbl_orders')
            ->select('tbl_orders.order_id, buyer.username as buyer, buyer.email as emailBuyer, mitra.email as emailMitra, mitra.username as mitra, tbl_services.name_service, tbl_services.price, tbl_orders.status_order, tbl_orders.created_at')
            ->join('tbl_services', 'tbl_services.service_id = tbl_orders.service_id')
            ->join('users as buyer', 'tbl_orders.buyer_id = buyer.id')
            ->join('users as mitra', 'tbl_orders.mitra_id = mitra.id')
            ->orderBy('tbl_orders.order_id', 'DESC')
            ->get()
            ->getResultArray();
    }
}
