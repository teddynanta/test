<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriItem extends Model
{
    use HasFactory;

    public function master_items()
    {
        return $this->hasMany(MasterItem::class, 'kategori_id');
    }
}
