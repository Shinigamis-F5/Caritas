<?php

namespace Tests\Feature\Feature\AdminProfile;

use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use phpDocumentor\Reflection\Types\Null_;

class OrganizationProfileTest extends TestCase
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
    public function testAdminCanAccessDashboardAfterLoggedIn()
    {

        $response = $this->actingAs($this->user)->get('/dashboard');

        $response->assertStatus(200)
            ->assertViewHas('user', $this->user);
    }

    public function testIfNoProfileAdminCanSeeCreateProfileSection()
    {

        $response = $this->actingAs($this->user)->get('/dashboard');

        $response->assertStatus(200)
            ->assertSee("Crear perfil de la organización");
    }

    public function testAdminCanAccessToCreateProfileForm()
    {
        $response = $this->actingAs($this->user)->get(route('dashboard.create'))
            ->assertStatus(200)
            ->assertViewIs(('Backoffice.profileCreate'));
    }

    public function testAdminCanNotAccessCreateProfileFormIfAProfileExists()
    {
        
        Profile::factory()->create();
        $response = $this->actingAs($this->user)->get(route('dashboard.create'))
            ->assertStatus(404);
           
    }

    public function testAdminCanStoreCaritasProfile()
    {
        $this->withoutExceptionHandling();
        $data = [
            'user_id'=> 1,
            'name' => 'Caritas Badalona',
            'direction' => 'carrer blablabla',
            'city' => 'Badalona',
            'postcode' => '08500',
            'phone' => '123456789',
            'bankAccount' => 'ES1212341234123412341234',
            'bizum' => '112345678901',
            'logo' => null
        ];
        $response = $this->actingAs($this->user)->post(route('dashboard.store'), $data)
        ->assertStatus(302);
        $this->assertDatabaseCount('profiles', 1);
        $this->assertDatabaseHas('profiles', $data);
    }

    public function testAdminCanAccessEditProfileForm()
    {
        $this->withoutExceptionHandling();
        $profile = Profile::factory()->create();
        $response = $this->actingAs($this->user)->get(route('dashboard.edit', $profile->id))
            ->assertStatus(200)
            ->assertViewIs('Backoffice.profileEdit')
            ->assertViewHas('profile');
    }

    public function testAdminCanUpdateProfile()
    {
        $this->withoutExceptionHandling();
        $profile = Profile::factory()->create();
        $data = [
            'name' => 'Caritas Badalona',
            'direction' => 'carrer blablabla',
            'city' => 'Badalona',
            'postcode' => '08500',
            'phone' => '123456789',
            'bankAccount' => 'ES1212341234123412341234',
            'bizum' => '1234567890123   ',
            'logo' => null
        ];
        $response = $this->actingAs($this->user)->put(route('dashboard.update', $profile->id), $data)
            ->assertStatus(200);
        $this->assertDatabaseHas('profiles', [
            'direction' => 'carrer blablabla'
        ]);
    }
}
