<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Wallet extends Model
{
    /** @use HasFactory<\Database\Factories\WalletFactory> */
    use HasFactory;
    use SoftDeletes;

    public static function boot(){
        parent::boot();
    
        static::creating(function ($issue) {
            $issue->id = Str::uuid();
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
