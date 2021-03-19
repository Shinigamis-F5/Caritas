<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalana_data')->insert([
            [
                'title_content' => 'about-main-text',
                'text_content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque eligendi iusto quasi fugiat facere sequi ut eos repudiandae hic? Assumenda reprehenderit, vel exercitationem nostrum illo mollitia dolore voluptatum quis voluptas, similique quia quas quaerat minima, perspiciatis et velit deleniti recusandae. Ipsa nobis ea, illum placeat ducimus sequi qui tempora expedita unde distinctio facere optio incidunt dicta architecto nisi alias magni explicabo amet blanditiis a dolorum odit sapiente! Nemo dolor sit consequuntur ipsa, molestiae totam veritatis esse, qui delectus culpa laborum? Laudantium provident dolore at cupiditate culpa maiores error omnis debitis. Autem nobis tenetur eos possimus tempore laboriosam provident nesciunt necessitatibus!',
                'lang_id' => 2,
                'section_id' => 1,
            ],
            [
                'section_name' => 'donate',
                'section_image' => null
            ],
            [
                'section_name' => 'volunteer',
                'section_image' => null
            ],
            [
                'section_name' => 'explain-the-project',
                'section_image' => null
            ],
            [
                'section_name' => 'partner',
                'section_image' => null
            ],
        ]);
    }
}
