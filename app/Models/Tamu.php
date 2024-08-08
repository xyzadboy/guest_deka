<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tamu extends Model
{
    use HasFactory;

    // Definisikan relasi belongsTo
    public function tamu(): BelongsTo
    {
        return $this->belongsTo(Tamu::class);
    }

    // Tambahkan 'name' ke dalam properti fillable untuk memungkinkan mass assignment
    protected $fillable = [
        'name',
        'no',
        'alamat',
        'gender',
    ];
}
