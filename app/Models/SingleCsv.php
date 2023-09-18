<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SingleCsv extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'csv',
        'user_id'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function emails(): BelongsToMany
    {
        return $this->belongsToMany(Email::class);
    }
}
