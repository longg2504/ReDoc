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
                'title' => 'Tổng quan',
                'route_name' => 'admin.dashboard.index',
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
                'sub_menu' => [
                    'users' => [
                        'icon' => '',
                        'route_name' => 'admin.users.index',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Danh sách người dùng'
                    ],
                    'administrators' => [
                        'icon' => '',
                        'route_name' => 'admin.administrators.index',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Danh sách Admin'
                    ],
                ]
            ],
            'categories' => [
                'icon' => 'list',
                'title' => 'Danh mục',
                'route_name' => 'admin.categories.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'drugstores' => [
                'icon' => 'box',
                'title' => 'Nhà thuốc',
                'route_name' => 'admin.drugstores.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'medicines' => [
                'icon' => 'crosshair',
                'title' => 'Thuốc',
                'route_name' => 'admin.medicines.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'diseases' => [
                'icon' => 'trello',
                'title' => 'Bệnh',
                'route_name' => 'admin.diseases.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'symptoms' => [
                'icon' => 'layout',
                'title' => 'Triệu chứng',
                'route_name' => 'admin.symptoms.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'disease-symptoms' => [
                'icon' => 'hard-drive',
                'title' => 'Triệu chứng bệnh',
                'route_name' => 'admin.disease-symptoms.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'prescriptions' => [
                'icon' => 'activity',
                'title' => 'Đơn thuốc',
                'route_name' => 'admin.prescriptions.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            'posts' => [
                'icon' => 'file',
                'title' => 'Bài viết',
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
                'title' => 'Bài đăng',
                'route_name' => 'admin.post-tags.index',
                'has_role' => [],
                'params' => [
                    'layout' => 'side-menu',
                ]
            ],
            "devider",
            'setting' => [
                'icon' => 'settings',
                'title' => 'Cài đặt',
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
