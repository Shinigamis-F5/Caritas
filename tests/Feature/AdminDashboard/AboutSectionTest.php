<?php

namespace Tests\Feature\AdminDashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Lang;
use Tests\TestCase;

use App\Models\Role;
use App\Models\User;
use App\Models\Language;
use App\Models\SpanishData;
use App\Models\CatalanData;
use App\Models\ContentSection;
use Illuminate\Http\Testing\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AboutSectionTest extends TestCase
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
            'section_name' => 'about'
        ]);
    }


    public function test_adminCanAccessAboutSectionView()
    {
        $response = $this->actingAs($this->user)->get(route('about'));

        $response->assertStatus(200)
        ->assertViewIs('Backoffice.about');
    }

    public function test_adminCanCreateAboutSection()
    {
        $this->withoutExceptionHandling();
        $data = [
            'spanish_about_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto incidunt, iure harum repudiandae fugiat qui. Ex ad quo odio doloribus itaque? Soluta laborum culpa illo laboriosam odio sint minus ad, suscipit nesciunt. Pariatur vel velit quisquam ullam placeat dolorum omnis perferendis, sapiente, alias atque distinctio dicta sit dolorem, necessitatibus tenetur!',
            'catalan_about_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto incidunt, iure harum repudiandae fugiat qui. Ex ad quo odio doloribus itaque? Soluta laborum culpa illo laboriosam odio sint minus ad, suscipit nesciunt. Pariatur vel velit quisquam ullam placeat dolorum omnis perferendis, sapiente, alias atque distinctio dicta sit dolorem, necessitatibus tenetur!',
        ];
        $response = $this->actingAs($this->user)->post(route('about.store', $data));
        $response->assertStatus(302);
    }


    public function test_adminCanUploadABoutSectionImage()
    {
        $this->withoutExceptionHandling();
        Storage::fake('section');
        
        $file = UploadedFile::fake()->image('bla.jpg');
        $data = [
            'section_image' => $file
        ];
       
        $sectionId = $this->section->id;
        $response = $this->actingAs($this->user)->put(route('about.updateImage', $sectionId), $data);
        Storage::disk('local');
        $this->assertFileExists(public_path('storage/section'));

    }

    public function test_AdminCanUpdateTextInSectionAboutCatalan()
    {
        $this->withoutExceptionHandling();
        $catalanData = CatalanData::factory()->create([
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ]);
        $data = [
            'title_content' => $catalanData->title_content,
            'text_content' => 'fldsjflj fjsdlfkjsdf jljf sdlfkjsdlj lsjdfj',
            'lang_id' => $this->catalanLanguage->id,
            'section_id' => $this->section->id
        ];
       
        $response = $this->actingAs($this->user)->put(route('about.update', $catalanData->id), $data)
        ->assertStatus(302);
        $this->assertDatabaseHas('catalan_data', [
            'text_content' => 'fldsjflj fjsdlfkjsdf jljf sdlfkjsdlj lsjdfj'
        ]);
    }

    public function test_AdminCanUpdateTextInSectionAboutSpanish()
    {
        $this->withoutExceptionHandling();
        $spanishData = SpanishData::factory()->create([
            'lang_id' => $this->spanishLanguage->id,
            'section_id' => $this->section->id
        ]);
        $data = [
            'title_content' => $spanishData->title_content,
            'text_content' => 'fldsjflj fjsdlfkjsdf jljf sdlfkjsdlj lsjdfj',
            'lang_id' => $this->spanishLanguage->id,
            'section_id' => $this->section->id
        ];
       
        $response = $this->actingAs($this->user)->put(route('about.update', $spanishData->id), $data)
        ->assertStatus(302);
        $this->assertDatabaseHas('spanish_data', [
            'text_content' => 'fldsjflj fjsdlfkjsdf jljf sdlfkjsdlj lsjdfj'
        ]);
    }
}
