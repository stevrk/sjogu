<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryEnquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'inquiry_type',
        'message',
        'status',
        'read_at',
        'replied_at',
        'admin_notes',
    ];

    protected $casts = [
        'read_at' => 'datetime',
        'replied_at' => 'datetime',
    ];

    public function getStatusBadgeColorAttribute(): string
    {
        return match($this->status) {
            'unread' => 'danger',
            'read' => 'warning',
            'replied' => 'success',
            default => 'gray',
        };
    }

    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'unread' => '🔴 Unread',
            'read' => '🟡 Read',
            'replied' => '🟢 Replied',
            default => ucfirst($this->status),
        };
    }

    public function markAsRead(): void
    {
        if ($this->status === 'unread') {
            $this->update([
                'status' => 'read',
                'read_at' => now(),
            ]);
        }
    }

    public function markAsReplied(): void
    {
        $this->update([
            'status' => 'replied',
            'replied_at' => now(),
        ]);
    }
}