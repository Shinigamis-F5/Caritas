<?php

namespace App\Http\Controllers\WhatCanYouDo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;


class PartnerController extends Controller
{
    public function index()
    {
        $sectionId = ContentSection::getId('partner');
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $spanishData = SpanishData::where('title_content', '=', 'main_text');
        return view('Backoffice.partner', [
            'catdata' => $catData,
            'spanishData' => $spanishData,
            'sectionId' => $sectionId,
        ]);
    }
}
