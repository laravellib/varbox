<?php

namespace Varbox\Seed;

use Illuminate\Database\Seeder;
use Varbox\Contracts\PermissionModelContract;

class PermissionsSeeder extends Seeder
{
    /**
     * Mapping structure of admin permissions.
     *
     * @var array
     */
    private $permissions = [
        'Users' => [
            'List' => [
                'group' => 'Users',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'users-list',
            ],
            'Add' => [
                'group' => 'Users',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'users-add',
            ],
            'Edit' => [
                'group' => 'Users',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'users-edit',
            ],
            'Delete' => [
                'group' => 'Users',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'users-delete',
            ],
            'Impersonate' => [
                'group' => 'Users',
                'label' => 'Impersonate',
                'guard' => 'admin',
                'name' => 'users-impersonate',
            ],
        ],
        'Admins' => [
            'List' => [
                'group' => 'Admins',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'admins-list',
            ],
            'Add' => [
                'group' => 'Admins',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'admins-add',
            ],
            'Edit' => [
                'group' => 'Admins',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'admins-edit',
            ],
            'Delete' => [
                'group' => 'Admins',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'admins-delete',
            ],
        ],
        'Roles' => [
            'List' => [
                'group' => 'Roles',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'roles-list',
            ],
            'Add' => [
                'group' => 'Roles',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'roles-add',
            ],
            'Edit' => [
                'group' => 'Roles',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'roles-edit',
            ],
            'Delete' => [
                'group' => 'Roles',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'roles-delete',
            ],
        ],
        'Permissions' => [
            'List' => [
                'group' => 'Permissions',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'permissions-list',
            ],
            'Add' => [
                'group' => 'Permissions',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'permissions-add',
            ],
            'Edit' => [
                'group' => 'Permissions',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'permissions-edit',
            ],
            'Delete' => [
                'group' => 'Permissions',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'permissions-delete',
            ],
        ],
        'Uploads' => [
            'List' => [
                'group' => 'Uploads',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'uploads-list',
            ],
            'Select' => [
                'group' => 'Uploads',
                'label' => 'Select',
                'guard' => 'admin',
                'name' => 'uploads-select',
            ],
            'Upload' => [
                'group' => 'Uploads',
                'label' => 'Upload',
                'guard' => 'admin',
                'name' => 'uploads-upload',
            ],
            'Download' => [
                'group' => 'Uploads',
                'label' => 'Download',
                'guard' => 'admin',
                'name' => 'uploads-download',
            ],
            'Crop' => [
                'group' => 'Uploads',
                'label' => 'Crop',
                'guard' => 'admin',
                'name' => 'uploads-crop',
            ],
            'Delete' => [
                'group' => 'Uploads',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'uploads-delete',
            ],
        ],
        'Revisions' => [
            'List' => [
                'group' => 'Revisions',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'revisions-list',
            ],
            'Rollback' => [
                'group' => 'Revisions',
                'label' => 'Rollback',
                'guard' => 'admin',
                'name' => 'revisions-rollback',
            ],
            'Delete' => [
                'group' => 'Revisions',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'revisions-delete',
            ],
        ],
        'Activity' => [
            'List' => [
                'group' => 'Activity',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'activity-list',
            ],
            'Delete' => [
                'group' => 'Activity',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'activity-delete',
            ],
        ],
        'Notifications' => [
            'List' => [
                'group' => 'Notifications',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'notifications-list',
            ],
            'Read' => [
                'group' => 'Notifications',
                'label' => 'Read',
                'guard' => 'admin',
                'name' => 'notifications-read',
            ],
            'Delete' => [
                'group' => 'Notifications',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'notifications-delete',
            ],
        ],
        'Countries' => [
            'List' => [
                'group' => 'Countries',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'countries-list',
            ],
            'Add' => [
                'group' => 'Countries',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'countries-add',
            ],
            'Edit' => [
                'group' => 'Countries',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'countries-edit',
            ],
            'Delete' => [
                'group' => 'Countries',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'countries-delete',
            ],
        ],
        'States' => [
            'List' => [
                'group' => 'States',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'states-list',
            ],
            'Add' => [
                'group' => 'States',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'states-add',
            ],
            'Edit' => [
                'group' => 'States',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'states-edit',
            ],
            'Delete' => [
                'group' => 'States',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'states-delete',
            ],
        ],
        'Cities' => [
            'List' => [
                'group' => 'Cities',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'cities-list',
            ],
            'Add' => [
                'group' => 'Cities',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'cities-add',
            ],
            'Edit' => [
                'group' => 'Cities',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'cities-edit',
            ],
            'Delete' => [
                'group' => 'Cities',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'cities-delete',
            ],
        ],
        'Addresses' => [
            'List' => [
                'group' => 'Addresses',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'addresses-list',
            ],
            'Add' => [
                'group' => 'Addresses',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'addresses-add',
            ],
            'Edit' => [
                'group' => 'Addresses',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'addresses-edit',
            ],
            'Delete' => [
                'group' => 'Addresses',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'addresses-delete',
            ],
        ],
        'Configs' => [
            'List' => [
                'group' => 'Configs',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'configs-list',
            ],
            'Add' => [
                'group' => 'Configs',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'configs-add',
            ],
            'Edit' => [
                'group' => 'Configs',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'configs-edit',
            ],
            'Delete' => [
                'group' => 'Configs',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'configs-delete',
            ],
        ],
        'Errors' => [
            'List' => [
                'group' => 'Errors',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'errors-list',
            ],
            'View' => [
                'group' => 'Errors',
                'label' => 'View',
                'guard' => 'admin',
                'name' => 'errors-view',
            ],
            'Delete' => [
                'group' => 'Errors',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'errors-delete',
            ],
        ],
        'Backups' => [
            'List' => [
                'group' => 'Backups',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'backups-list',
            ],
            'Create' => [
                'group' => 'Backups',
                'label' => 'Create',
                'guard' => 'admin',
                'name' => 'backups-create',
            ],
            'Download' => [
                'group' => 'Backups',
                'label' => 'Download',
                'guard' => 'admin',
                'name' => 'backups-download',
            ],
            'Delete' => [
                'group' => 'Backups',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'backups-delete',
            ],
        ],
        'Pages' => [
            'List' => [
                'group' => 'Pages',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'pages-list',
            ],
            'Add' => [
                'group' => 'Pages',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'pages-add',
            ],
            'Edit' => [
                'group' => 'Pages',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'pages-edit',
            ],
            'Delete' => [
                'group' => 'Pages',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'pages-delete',
            ],
            'Draft' => [
                'group' => 'Pages',
                'label' => 'Draft',
                'guard' => 'admin',
                'name' => 'pages-draft',
            ],
            'Publish' => [
                'group' => 'Pages',
                'label' => 'Publish',
                'guard' => 'admin',
                'name' => 'pages-publish',
            ],
            'Duplicate' => [
                'group' => 'Pages',
                'label' => 'Duplicate',
                'guard' => 'admin',
                'name' => 'pages-duplicate',
            ],
            'Preview' => [
                'group' => 'Pages',
                'label' => 'Preview',
                'guard' => 'admin',
                'name' => 'pages-preview',
            ],
        ],
        'Emails' => [
            'List' => [
                'group' => 'Emails',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'emails-list',
            ],
            'Add' => [
                'group' => 'Emails',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'emails-add',
            ],
            'Edit' => [
                'group' => 'Emails',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'emails-edit',
            ],
            'Delete' => [
                'group' => 'Emails',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'emails-delete',
            ],
            'Draft' => [
                'group' => 'Emails',
                'label' => 'Draft',
                'guard' => 'admin',
                'name' => 'emails-draft',
            ],
            'Publish' => [
                'group' => 'Emails',
                'label' => 'Publish',
                'guard' => 'admin',
                'name' => 'emails-publish',
            ],
            'Duplicate' => [
                'group' => 'Emails',
                'label' => 'Duplicate',
                'guard' => 'admin',
                'name' => 'emails-duplicate',
            ],
            'Preview' => [
                'group' => 'Emails',
                'label' => 'Preview',
                'guard' => 'admin',
                'name' => 'emails-preview',
            ],
        ],
        'Blocks' => [
            'List' => [
                'group' => 'Blocks',
                'label' => 'List',
                'guard' => 'admin',
                'name' => 'blocks-list',
            ],
            'Show' => [
                'group' => 'Blocks',
                'label' => 'Show',
                'guard' => 'admin',
                'name' => 'blocks-show',
            ],
            'Add' => [
                'group' => 'Blocks',
                'label' => 'Add',
                'guard' => 'admin',
                'name' => 'blocks-add',
            ],
            'Edit' => [
                'group' => 'Blocks',
                'label' => 'Edit',
                'guard' => 'admin',
                'name' => 'blocks-edit',
            ],
            'Delete' => [
                'group' => 'Blocks',
                'label' => 'Delete',
                'guard' => 'admin',
                'name' => 'blocks-delete',
            ],
            'Draft' => [
                'group' => 'Emails',
                'label' => 'Draft',
                'guard' => 'admin',
                'name' => 'blocks-draft',
            ],
            'Publish' => [
                'group' => 'Emails',
                'label' => 'Publish',
                'guard' => 'admin',
                'name' => 'blocks-publish',
            ],
            'Duplicate' => [
                'group' => 'Emails',
                'label' => 'Duplicate',
                'guard' => 'admin',
                'name' => 'blocks-duplicate',
            ],
            'Assign' => [
                'group' => 'Blocks',
                'label' => 'Assign',
                'guard' => 'admin',
                'name' => 'blocks-assign',
            ],
            'Un-Assign' => [
                'group' => 'Blocks',
                'label' => 'Un-Assign',
                'guard' => 'admin',
                'name' => 'blocks-unassign',
            ],
            'Order' => [
                'group' => 'Blocks',
                'label' => 'Order',
                'guard' => 'admin',
                'name' => 'blocks-order',
            ],
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @param PermissionModelContract $permission
     * @return void
     */
    public function run(PermissionModelContract $permission)
    {
        foreach ($this->permissions as $permissions) {
            foreach ($permissions as $data) {
                if ($permission->where('name', $data['name'])->count() == 0) {
                    $permission->doNotLogActivity()->create($data);
                }
            }
        }
    }
}
