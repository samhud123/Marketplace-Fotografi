<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table      = 'tbl_gallery';
    protected $primaryKey = 'gallery_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_id', 'title', 'photo'];
}