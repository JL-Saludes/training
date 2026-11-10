<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'college',
        'slot',
        'is_active'
    ];

    protected function casts (): array
    {

        return [
            'is_active' => 'boolean',
            'slot' => 'integer'
        ];

    }
}
