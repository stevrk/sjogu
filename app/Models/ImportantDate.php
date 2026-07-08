<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ImportantDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'display_start_date',
        'display_end_date',
        'event_start_date',
        'event_end_date',
        'description',
        'is_active',
        'order',
    ];

    protected $casts = [
        'display_start_date' => 'date',
        'display_end_date' => 'date',
        'event_start_date' => 'date',
        'event_end_date' => 'date',
        'is_active' => 'boolean',
    ];

    // Check if the item should be visible on the website
    public function getIsCurrentlyVisibleAttribute(): bool
    {
        if (!$this->is_active) {
            return false;
        }

        $today = Carbon::today();
        $start = Carbon::parse($this->display_start_date);
        
        if ($this->display_end_date) {
            $end = Carbon::parse($this->display_end_date);
            return $today->between($start, $end);
        }
        
        return $today->greaterThanOrEqualTo($start);
    }

    // Get display date range (when it appears on website)
    public function getDisplayDateAttribute(): string
    {
        $start = Carbon::parse($this->display_start_date);
        
        if ($this->display_end_date) {
            $end = Carbon::parse($this->display_end_date);
            if ($start->month === $end->month) {
                return $start->format('M d') . ' - ' . $end->format('d, Y');
            }
            return $start->format('M d') . ' - ' . $end->format('M d, Y');
        }
        
        return $start->format('M d, Y');
    }

    // Get short display date range (for compact view)
    public function getShortDisplayDateAttribute(): string
    {
        $start = Carbon::parse($this->display_start_date);
        
        if ($this->display_end_date) {
            $end = Carbon::parse($this->display_end_date);
            if ($start->month === $end->month) {
                return $start->format('M d') . ' - ' . $end->format('d');
            }
            return $start->format('M d') . ' - ' . $end->format('M d');
        }
        
        return $start->format('M d');
    }

    // Get event date (the actual event date)
    public function getEventDateAttribute(): string
    {
        $start = Carbon::parse($this->event_start_date ?? $this->display_start_date);
        
        if ($this->event_end_date) {
            $end = Carbon::parse($this->event_end_date);
            if ($start->month === $end->month) {
                return $start->format('M d') . ' - ' . $end->format('d, Y');
            }
            return $start->format('M d') . ' - ' . $end->format('M d, Y');
        }
        
        return $start->format('M d, Y');
    }

    // Get short event date (for compact view)
    public function getShortEventDateAttribute(): string
    {
        $start = Carbon::parse($this->event_start_date ?? $this->display_start_date);
        
        if ($this->event_end_date) {
            $end = Carbon::parse($this->event_end_date);
            if ($start->month === $end->month) {
                return $start->format('M d') . ' - ' . $end->format('d');
            }
            return $start->format('M d') . ' - ' . $end->format('M d');
        }
        
        return $start->format('M d');
    }
}