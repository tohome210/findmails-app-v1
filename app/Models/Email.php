<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Email extends Model
{
    use HasFactory;
    protected $fillable = [
        'address'
    ];
    public function singles(): BelongsToMany
    {
        return $this->belongsToMany(Single::class, 'email_singles');
    }
    public function singleCsvs(): BelongsToMany
    {
        return $this->belongsToMany(SingleCsv::class);
    }
    public function domains(): BelongsToMany
    {
        return $this->belongsToMany(Domain::class);
    }
    public function domainCsvs(): BelongsToMany
    {
        return $this->belongsToMany(DomainCsv::class);
    }
}
