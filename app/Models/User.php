<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',          // Keep this for backward compatibility
        'is_active',     // Keep this for backward compatibility
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    // Filament access
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_active ?? true;
    }

    // Role check methods (using Spatie roles)
    public function isAdmin(): bool
    {
        return $this->hasRole('Admin');
    }

    public function isGeneralIct(): bool
    {
        return $this->hasRole('ICT');
    }

    public function isAdmission(): bool
    {
        return $this->hasRole('Admissions');
    }

    public function isLibrarian(): bool
    {
        return $this->hasRole('Librarian');
    }

    // Legacy role check (for backward compatibility)
    public function getLegacyRoleAttribute(): string
    {
        return $this->role ?? 'general_ict';
    }

    // Get role display name
    public function getRoleDisplayNameAttribute(): string
    {
        if ($this->hasRole('Admin')) {
            return 'Administrator';
        } elseif ($this->hasRole('ICT')) {
            return 'ICT Team';
        } elseif ($this->hasRole('Admissions')) {
            return 'Admissions Office';
        } elseif ($this->hasRole('Librarian')) {
            return 'Librarian';
        }
        return 'Unknown';
    }

    // Get role color
    public function getRoleColorAttribute(): string
    {
        if ($this->hasRole('Admin')) {
            return 'danger';
        } elseif ($this->hasRole('ICT')) {
            return 'info';
        } elseif ($this->hasRole('Admissions')) {
            return 'success';
        } elseif ($this->hasRole('Librarian')) {
            return 'warning';
        }
        return 'gray';
    }
}