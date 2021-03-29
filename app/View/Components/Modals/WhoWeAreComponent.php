<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;


class WhoWeAreComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $aboutImg;
    public $aboutCat;
    public $aboutEs;



    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $this->getData();
        return view('components.modals.who-we-are-component');
    }

    public function getData() 
    {
        $aboutSection = ContentSection::where('section_name', '=', 'about')->first();
        $this->aboutImg = $aboutSection->section_image;
        $catData = CatalanData::where('section_id', '=', $aboutSection->id)->first();
        $this->aboutCat = $catData->text_content;
        $esData =  SpanishData::where('section_id', '=', $aboutSection->id)->first();
        $this->aboutEs = $esData->text_content;

    }
}
