<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;
use App\Models\User;


class ContactComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $profile;

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
        return view('components.modals.contact-component');
    }

    public function getProfile()
    {
        $user = User::where('role_id', '=', 1)->firstOrFail();
        $this->profile = $user->profile;

    }
}
