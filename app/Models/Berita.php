<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judul', 'slug', 'isi', 'tanggal'])]
class Berita extends Model
{
    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
