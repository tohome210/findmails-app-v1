<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DomainCsv extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'user_id',
        'csv'
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
