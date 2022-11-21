<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    use BelongsToTenant;

    protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
