<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $primaryKey = 'loID';

    protected $fillable = [
        'loName',
        'loDescription',
        'loContent',
        'loDate',
        'categoryID'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID', 'categoryID');
    }
    public function images()
    {
        return $this->hasMany(LocationImage::class, 'loID', 'loID');
    }
}
