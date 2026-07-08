<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'duration',
        'study_mode',
        'career_opportunities',
        'entry_requirements',
        'picture',
        'program_type',
        'department_name',
        'is_active',
        'order',
    ];

    protected $casts = [
        'career_opportunities' => 'array',
        'entry_requirements' => 'array',
        'is_active' => 'boolean',
    ];

    // Get picture URL
    public function getPictureUrlAttribute(): ?string
    {
        if ($this->picture) {
            return asset('storage/' . $this->picture);
        }
        return null;
    }

    // Get program type label
    public function getProgramTypeLabelAttribute(): string
    {
        return match($this->program_type) {
            'generic' => 'Generic',
            'upgrading' => 'Upgrading',
            default => ucfirst($this->program_type),
        };
    }

    // Get program type color
    public function getProgramTypeColorAttribute(): string
    {
        return match($this->program_type) {
            'generic' => 'success',
            'upgrading' => 'warning',
            default => 'primary',
        };
    }

    // Get career opportunities as array (safe null handling)
    public function getCareerOpportunitiesArrayAttribute(): array
    {
        return $this->career_opportunities ?? [];
    }

    // Get entry requirements as array (safe null handling)
    public function getEntryRequirementsArrayAttribute(): array
    {
        return $this->entry_requirements ?? [];
    }

    // Check if program has career opportunities
    public function hasCareerOpportunities(): bool
    {
        return !empty($this->career_opportunities);
    }

    // Check if program has entry requirements
    public function hasEntryRequirements(): bool
    {
        return !empty($this->entry_requirements);
    }

    // Scope for active programs
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for generic programs
    public function scopeGeneric($query)
    {
        return $query->where('program_type', 'generic');
    }

    // Scope for upgrading programs
    public function scopeUpgrading($query)
    {
        return $query->where('program_type', 'upgrading');
    }

    // Scope by department
    public function scopeByDepartment($query, $department)
    {
        return $query->where('department_name', $department);
    }
}