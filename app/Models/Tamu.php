<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tamu extends Model
{
    use HasFactory;
    protected $table = 'tamu'; // Nama tabel yang benar

    // Definisikan relasi belongsTo
    public function tamu(): BelongsTo
    {
        return $this->belongsTo(Tamu::class);
    }

    protected $fillable = [
        'name',
        'no',
        'alamat',
        'feedback',
        'gender',
    ];
}
