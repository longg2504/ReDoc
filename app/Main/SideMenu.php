<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'admin.dashboard.index',
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'users' => [
                'icon' => 'users',
                'title' => 'User',
                'sub_menu' => [
                    'users' => [
                        'icon' => '',
                        'route_name' => 'admin.users.index',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'List users'
                    ],
                    'administrators' => [
                        'icon' => '',
                        'route_name' => 'admin.administrators.index',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'List administrators'
                    ],
                ]
            ],
            'categories' => [
                'icon' => 'list',
                'title' => 'Category',
                'route_name' => 'admin.categories.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'drugstores' => [
                'icon' => 'box',
                'title' => 'Drugstore',
                'route_name' => 'admin.drugstores.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'medicines' => [
                'icon' => 'crosshair',
                'title' => 'Medicine',
                'route_name' => 'admin.medicines.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'diseases' => [
                'icon' => 'trello',
                'title' => 'Disease',
                'route_name' => 'admin.diseases.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'symptoms' => [
                'icon' => 'layout',
                'title' => 'Symptom',
                'route_name' => 'admin.symptoms.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'disease-symptoms' => [
                'icon' => 'hard-drive',
                'title' => 'Disease symptoms',
                'route_name' => 'admin.disease-symptoms.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'prescriptions' => [
                'icon' => 'activity',
                'title' => 'Prescription',
                'route_name' => 'admin.prescriptions.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'posts' => [
                'icon' => 'file',
                'title' => 'Post',
                'route_name' => 'admin.posts.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'tags' => [
                'icon' => 'folder',
                'title' => 'Tag',
                'route_name' => 'admin.tags.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'post-tags' => [
                'icon' => 'file-text',
                'title' => 'Post Tag',
                'route_name' => 'admin.post-tags.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            "devider",
            'setting' => [
                'icon' => 'settings',
                'title' => 'Setting',
                'sub_menu' => [
                    'side-menu' => [
                        'icon' => '',
                        'route_name' => 'admin.settings.index',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'General'
                    ],
                    'kitchen' => [
                        'icon' => 'crosshair',
                        'title' => 'Role',
                        'route_name' => 'admin.role.index',
                        'params' => [
                            'layout' => 'side-menu',
                        ]
                    ],
                ]
            ],
        ];
    }
}
