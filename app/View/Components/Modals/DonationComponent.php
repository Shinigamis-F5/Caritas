<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;
use App\Models\User;

class DonationComponent extends Component
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
        $this->formatBankAccount($this->profile->bankAccount);
        return view('components.modals.donation-component');
    }

    public function getProfile()
    {
        $user = User::where('role_id', '=', 1)->firstOrFail();
        $this->profile = $user->profile;
    }

    public function formatBankAccount(string $bankAccount)
    {
        $accountFormated = [];
        $count = 0;
        while ($count <= 24) {
            $fourChar = substr($bankAccount, $count, 4);
            array_push($accountFormated, $fourChar);
            $count += 4;
        }

        $bankAccount = implode("-", $accountFormated);
        $bankAccount = substr($bankAccount, 0, -1);

        $this->profile->bankAccount = $bankAccount;
    }
    
}
