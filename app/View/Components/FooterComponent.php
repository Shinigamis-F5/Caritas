<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class FooterComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $profile;
     public $href;
     
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
        $this->getProfile();
        return view('components.footer-component');
    }

    public function getProfile()
    {
        $user = User::where('role_id', '=', 1)->firstOrFail();
        $this->profile = $user->profile;

    }
}
