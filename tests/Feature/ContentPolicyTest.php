<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\About;
use Tests\TestCase;
use App\Models\Orthopedic;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContentPolicyTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);
    }

    private function createOwnerAndAdmin(): array
    {
        $owner = User::factory()->create();
        $owner->assignRole('user');

        $admin = User::factory()->create();
        $admin->assignRole('admin');

        return [$owner, $admin];
    }

    public function test_owner_can_view_own_content(): void
    {
        [$owner] = $this->createOwnerAndAdmin();
        $orthopedic = Orthopedic::factory()->create(['user_id' => $owner->id]);

        $this->assertTrue($owner->can('view', $orthopedic));
    }

    public function test_admin_can_view_any_content(): void
    {
        [, $admin] = $this->createOwnerAndAdmin();
        $other = User::factory()->create();
        $orthopedic = Orthopedic::factory()->create(['user_id' => $other->id]);

        $this->assertTrue($admin->can('view', $orthopedic));
    }

    public function test_other_user_cannot_view_or_update_content(): void
    {
        [$owner] = $this->createOwnerAndAdmin();
        $other = User::factory()->create();
        $orthopedic = Orthopedic::factory()->create(['user_id' => $owner->id]);

        $this->assertFalse($other->can('view', $orthopedic));
        $this->assertFalse($other->can('update', $orthopedic));
        $this->assertFalse($other->can('delete', $orthopedic));
    }

    public function test_owner_can_update_and_delete_own_content(): void
    {
        [$owner] = $this->createOwnerAndAdmin();
        $orthopedic = Orthopedic::factory()->create(['user_id' => $owner->id]);

        $this->assertTrue($owner->can('update', $orthopedic));
        $this->assertTrue($owner->can('delete', $orthopedic));
    }

    public function test_only_admin_can_restore_and_force_delete(): void
    {
        [$owner, $admin] = $this->createOwnerAndAdmin();
        $orthopedic = Orthopedic::factory()->create(['user_id' => $owner->id]);

        $this->assertFalse($owner->can('restore', $orthopedic));
        $this->assertTrue($admin->can('restore', $orthopedic));
        $this->assertFalse($owner->can('forceDelete', $orthopedic));
        $this->assertTrue($admin->can('forceDelete', $orthopedic));
    }

    public function test_any_authenticated_user_can_create_content(): void
    {
        $user = User::factory()->create();

        $this->assertTrue($user->can('create', Orthopedic::class));
        $this->assertTrue($user->can('create', About::class));
    }

    public function test_user_resource_is_admin_only(): void
    {
        [$owner, $admin] = $this->createOwnerAndAdmin();
        $target = User::factory()->create();

        $this->assertFalse($owner->can('viewAny', User::class));
        $this->assertFalse($owner->can('view', $target));
        $this->assertTrue($admin->can('viewAny', User::class));
        $this->assertTrue($admin->can('view', $target));
    }
}
