<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use PhpParser\Node\Expr\BinaryOp\Spaceship;

class WhatCanYouDoComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $donateImg;
    public $donateCat;
    public $donateEs;

    public $explainTheProjectImg;
    public $explainTheProjectCat;
    public $explainTheProjectEs;

    public $partnerImg;
    public $partnerCat;
    public $partnerEs;

    public $volunteerImg;
    public $volunteerCat;
    public $volunteerEs;


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
        return view('components.modals.what-can-you-do-component');
    }

    public function getData()
    {
        
        $this->dataCat = CatalanData::all();
        $this->dataEs = SpanishData::all();
        
        $donateSection = ContentSection::where('section_name', '=', 'donate')->first();
        $this->donateImg = $donateSection->section_image;
        $donateCatData = CatalanData::where('section_id', '=', $donateSection->id)->first();
        $this->donateCat = $donateCatData->text_content;
        $donateEsData =  SpanishData::where('section_id', '=', $donateSection->id)->first();
        $this->donateEs = $donateEsData->text_content;


        $explainTheProjectSection = ContentSection::where('section_name', '=', 'explain-the-project')->first();
        $this->explainTheProjectImg = $explainTheProjectSection->section_image;
        $explainTheProjectCatData = CatalanData::where('section_id', '=', $explainTheProjectSection->id)->first();
        $this->explainTheProjectCat = $explainTheProjectCatData->text_content;
        $explainTheProjectEsData =  SpanishData::where('section_id', '=', $explainTheProjectSection->id)->first();
        $this->explainTheProjectEs = $explainTheProjectEsData->text_content;


        $partnerSection = ContentSection::where('section_name', '=', 'partner')->first();
        $this->partnerImg = $partnerSection->section_image;
        $partnerCatData = CatalanData::where('section_id', '=', $partnerSection->id)->first();
        $this->partnerCat = $partnerCatData->text_content;
        $partnerEsData =  SpanishData::where('section_id', '=', $partnerSection->id)->first();
        $this->partnerEs = $partnerEsData->text_content;


        $volunteerSection = ContentSection::where('section_name', '=', 'volunteer')->first();
        $this->volunteerImg = $volunteerSection->section_image;
        $volunteerCatData = CatalanData::where('section_id', '=', $volunteerSection->id)->first();
        $this->volunteerCat = $volunteerCatData->text_content;
        $volunteerEsData =  SpanishData::where('section_id', '=', $volunteerSection->id)->first();
        $this->volunteerEs = $volunteerEsData->text_content;

    }

    
}
