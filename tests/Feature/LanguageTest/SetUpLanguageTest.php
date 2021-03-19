<?php

namespace Tests\Feature\LanguageTest;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\App;

class SetUpLanguageTest extends TestCase
{
    Use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_DefaultLanguageIsES()
    {
        $response = App::getLocale();
        $this->assertEquals('es', $response);
    }

    public function test_languageChangeWhenUserSelectsLanguage()
    {
        $language = 'cat';
        $response = $this->get('/home/' . $language);
        $locale = App::getLocale();
        $this->assertEquals('cat', $locale);
        $response->assertRedirect();
    }
    
    public function test_UserSeeContentInLanguageChosen()
    {
        Role::factory()->create();
        User::factory()->create();
        $this->seed();
        $profile = Profile::factory()->create();
        $language = 'es';
        $locale = App::setLocale($language);
        $response = $this->get('/');
        $response->assertSee('Las necesidades básicas');
    }

    public function test_LandingPageAcessToOrganizationDataProfile()
    {
        $this->withoutExceptionHandling();
        $this->seed();
        Role::factory()->create();
        User::factory()->create();
        $profile = Profile::factory()->create();
        $response = $this->get(route('home'))
            ->assertStatus(200)
        ->assertViewHas(['profile' => $profile]);
    }
}
