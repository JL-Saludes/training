<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
 

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'reference_no',
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'sex',
        'contact_no',
        'address',
        'last_school_attended',
        'submitted_at',
    ];

    public function cast(): array {
        
        return [
            'birth_date' => 'date',
            'submitted_at' => 'datetime',
        ];
    }

    public function program(): BelongsTo {
        return $this->belongsTo(Program::class)->withTrashed();
    }

    //Accessor

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => trim("{$this->first_name} {$this->middle_name} {$this->last_name}"),
        );
    }
}
