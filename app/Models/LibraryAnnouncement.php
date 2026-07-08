<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class LibraryAnnouncement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'is_active',
        'order',
    ];

    protected $casts = [
        'date' => 'date',
        'is_active' => 'boolean',
    ];

    public function getFormattedDateAttribute(): string
    {
        if ($this->date) {
            return Carbon::parse($this->date)->format('M d, Y');
        }
        return 'Date TBA';
    }
}