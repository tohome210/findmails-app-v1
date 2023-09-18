<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Domain extends Model
{
    use HasFactory;
    protected $fillable = [
        'domain_name',
        'user_id'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function emails(): BelongsToMany
    {
        return $this->belongsToMany(Email::class, 'domain_emails');
    }
}
