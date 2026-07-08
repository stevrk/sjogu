<?php

namespace App\Helpers;

use App\Models\User;

class RoleHelper
{
    /**
     * Get navigation items based on user role
     */
    public static function getNavigationGroups(): array
    {
        $user = auth()->user();
        
        if (!$user) {
            return [];
        }

        $groups = [];

        // Common groups for all roles
        $groups['dashboard'] = [
            'label' => 'Dashboard',
            'icon' => 'heroicon-o-home',
            'items' => ['dashboard'],
        ];

        switch ($user->role) {
            case 'admin':
                $groups['page_content'] = [
                    'label' => 'Page Content',
                    'icon' => 'heroicon-o-document-text',
                    'items' => ['page-content'],
                ];
                $groups['content'] = [
                    'label' => 'Content Management',
                    'icon' => 'heroicon-o-newspaper',
                    'items' => ['news', 'programs', 'departments', 'research', 'downloads', 'partners'],
                ];
                $groups['users'] = [
                    'label' => 'Users & Roles',
                    'icon' => 'heroicon-o-user-group',
                    'items' => ['users'],
                ];
                $groups['people'] = [
                    'label' => 'People',
                    'icon' => 'heroicon-o-users',
                    'items' => ['staff', 'executive-team', 'department-heads', 'student-council'],
                ];
                $groups['library'] = [
                    'label' => 'Library Management',
                    'icon' => 'heroicon-o-book-open',
                    'items' => ['library-resources', 'library-staff', 'library-announcements'],
                ];
                $groups['admissions'] = [
                    'label' => 'Admissions',
                    'icon' => 'heroicon-o-user-plus',
                    'items' => ['applications', 'accommodation', 'enquiries'],
                ];
                $groups['settings'] = [
                    'label' => 'Settings',
                    'icon' => 'heroicon-o-cog-6-tooth',
                    'items' => ['general-settings'],
                ];
                break;

            case 'general_ict':
                $groups['page_content'] = [
                    'label' => 'Page Content',
                    'icon' => 'heroicon-o-document-text',
                    'items' => ['page-content'],
                ];
                $groups['content'] = [
                    'label' => 'Content Management',
                    'icon' => 'heroicon-o-newspaper',
                    'items' => ['news', 'programs', 'departments', 'research', 'downloads', 'partners'],
                ];
                $groups['people'] = [
                    'label' => 'People',
                    'icon' => 'heroicon-o-users',
                    'items' => ['staff', 'executive-team', 'department-heads'],
                ];
                break;

            case 'admission':
                $groups['admissions'] = [
                    'label' => 'Admissions',
                    'icon' => 'heroicon-o-user-plus',
                    'items' => ['applications', 'accommodation', 'enquiries'],
                ];
                break;

            case 'librarian':
                $groups['library'] = [
                    'label' => 'Library Management',
                    'icon' => 'heroicon-o-book-open',
                    'items' => ['library-resources', 'library-staff', 'library-announcements'],
                ];
                break;

            default:
                // Default groups for unknown roles
                $groups['content'] = [
                    'label' => 'Content',
                    'icon' => 'heroicon-o-document-text',
                    'items' => [],
                ];
                break;
        }

        return $groups;
    }

    /**
     * Check if user can access a specific resource
     */
    public static function canAccessResource(string $resource): bool
    {
        $user = auth()->user();
        
        if (!$user) {
            return false;
        }

        if ($user->role === 'admin') {
            return true;
        }

        $allowedResources = self::getAllowedResources($user->role);

        return in_array($resource, $allowedResources);
    }

    /**
     * Get allowed resources for a specific role
     */
    public static function getAllowedResources(string $role): array
    {
        $resources = [
            'admin' => [
                'users',
                'page-content',
                'news',
                'programs',
                'departments',
                'research',
                'downloads',
                'partners',
                'staff',
                'executive-team',
                'department-heads',
                'student-council',
                'library-resources',
                'library-staff',
                'library-announcements',
                'applications',
                'accommodation',
                'enquiries',
                'general-settings',
            ],
            'general_ict' => [
                'page-content',
                'news',
                'programs',
                'departments',
                'research',
                'downloads',
                'partners',
                'staff',
                'executive-team',
                'department-heads',
            ],
            'admission' => [
                'applications',
                'accommodation',
                'enquiries',
            ],
            'librarian' => [
                'library-resources',
                'library-staff',
                'library-announcements',
            ],
        ];

        return $resources[$role] ?? [];
    }
}