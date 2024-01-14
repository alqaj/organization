<?php

namespace Alqaj\Organization\Models;

use Alqaj\Organization\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name', 'department_id'
    ];

    public function scopeSearch($query, $value): void
    {
        $query->where('name', 'like', "%{$value}%");
    }

    public function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
