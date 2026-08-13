<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $resources = [
            'about', 'hearing', 'orthopedic', 'spastic', 'spinalcord', 'vision',
            'user', 'role', 'permission',
        ];

        $abilities = ['viewAny', 'view', 'create', 'update', 'delete', 'restore', 'forceDelete'];

        foreach ($resources as $resource) {
            foreach ($abilities as $ability) {
                Permission::firstOrCreate(['name' => "{$ability}-{$resource}"]);
            }
        }

        $contentResources = ['about', 'hearing', 'orthopedic', 'spastic', 'spinalcord', 'vision'];

        $userPermissions = collect($contentResources)
            ->flatMap(fn (string $resource): array => [
                "viewAny-{$resource}",
                "view-{$resource}",
                "create-{$resource}",
                "update-{$resource}",
                "delete-{$resource}",
            ])
            ->all();

        $userRole = Role::firstOrCreate(['name' => 'user']);
        $userRole->givePermissionTo($userPermissions);

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => 'password'],
        );
        $admin->assignRole('admin');

        $user = User::firstOrCreate(
            ['email' => 'user@example.com'],
            ['name' => 'User', 'password' => 'password'],
        );
        $user->assignRole('user');
    }
}
