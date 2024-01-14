<?php

namespace Alqaj\Organization\Models;

use Alqaj\Organization\Models\Section;
use Alqaj\Organization\Models\Division;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Department extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'short_code',
        'division_id',
    ];
    protected $table = 'public.departments';
    
    public function scopeSearch($query, $value): void
    {
        $query->where('name', 'like', "%{$value}%")
            ->orWhere('short_code', 'like', "%{$value}%");
    }

    public function sections() : HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function division() : BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

}
