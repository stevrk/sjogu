<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryHours extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'open_time',
        'close_time',
        'display_text',
        'is_closed',
        'order',
    ];

    protected $casts = [
        'is_closed' => 'boolean',
    ];

    public function getFullHoursAttribute(): string
    {
        if ($this->is_closed) {
            return 'Closed';
        }
        if ($this->display_text) {
            return $this->display_text;
        }
        if ($this->open_time && $this->close_time) {
            return $this->open_time . ' - ' . $this->close_time;
        }
        return 'Closed';
    }
}