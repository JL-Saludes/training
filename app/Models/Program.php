<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Application;

class Program extends Model
{
    use HasFactory, SoftDeletes;

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

    public function applications(): HasMany {
        

    return $this->hasMany(Application::class);
    }
}
