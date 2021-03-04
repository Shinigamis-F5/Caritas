<?php

namespace Tests\Feature\AdminDashboard;

use Carbon\Traits\Date;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;

class UpdateDataConnectionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    protected User $user;
    protected Role $role;

    public function setUp(): void
    {
        parent::setUp();
        $this->role = Role::factory()->create();
        $this->user = User::factory()->create();
    }
    public function testAdminCanAccessToUpdateView()
    {
        $response = $this->actingAs($this->user)->get(route('user-profile-information.edit'));

        $response->assertStatus(200)
            ->assertViewIs('Auth.updateUserProfile');
    }
}
