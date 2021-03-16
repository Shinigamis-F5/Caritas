<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use App\Models\Language;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;


class VolunteerSectionTest extends TestCase
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
        $this->spanishLanguage = Language::factory()->create([
            'language_code' => 'es'
        ]);
        $this->catalanLanguage = Language::factory()->create([
            'language_code' => 'cat'
        ]);
        $this->section = ContentSection::factory()->create([
            'section_name' => 'volunteer'
        ]);
    }

    public function testAdminCanAccessVolunteerSectionView()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)->get(route('volunteer'));

        $response->assertStatus(200);
        // ->assertViewIs('Backoffice.volunteer');
    }

    public function testAdminCanCreateVolunteerSection()
    {
        $this->withoutExceptionHandling();
        $data = [
            'spanish_volunteer_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
            'catalan_volunteer_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!',
        ];

        $response = $this->actingAs($this->user)->post(route('volunteer.store', $data));
        $response->assertStatus(200);
        $this->assertDatabaseHas('catalan_data', ['text_content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab!']);
    }

    public function test_AdminCanUpdateTextInSectionVolunteerCatalan()
    {
        $this->withoutExceptionHandling();
        $catalanData = CatalanData::factory()->create([
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ]);
        $data = [
            'title_content' => $catalanData->title_content,
            'text_content' => 'Lorem ipsum dolor sit amet consectetur.',
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ];
       
        $response = $this->actingAs($this->user)->put(route('volunteer.update', $catalanData->id), $data)
        ->assertStatus(200);
        $this->assertDatabaseHas('catalan_data', [
            'text_content' => 'Lorem ipsum dolor sit amet consectetur.'
        ]);
    }
}
