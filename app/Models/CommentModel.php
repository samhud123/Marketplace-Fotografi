<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table      = 'tbl_comments';
    protected $allowedFields = ['buyer_id', 'order_id', 'service_id', 'rating', 'comment', 'created_at'];

    public function getCommentByService($serviceId)
    {
        return $this->db->table('tbl_comments')
            ->select('tbl_comments.rating, tbl_comments.comment, tbl_comments.created_at, users.username, users.nama, users.foto')
            ->join('users', 'tbl_comments.buyer_id = users.id')
            ->where('service_id', $serviceId)
            ->get()->getResultArray();
    }
}
