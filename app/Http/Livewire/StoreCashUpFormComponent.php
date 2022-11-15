<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\recieptCashUpSummary;
use App\Models\cardStatementCheck;

class StoreCashUpFormComponent extends Component
{
    //Top Row Steez
    public $totalG4SDeposit1,$looseChange,$totalG4SDeposit2,$changeFromBank,$comments,$portableDevice,$innovation;

    public $questions = [''];

    public function submit()
    {
        //Top Row Steez
        $validatedData = $this->validate([
            'totalG4SDeposit1' => 'required',
            'looseChange' => 'required',
            'totalG4SDeposit2' => 'required',
            'changeFromBank' => 'required',
            'comments' => 'required',
        ]);

        recieptCashUpSummary::create($validatedData);

        $validatedData = $this->validate([
            'portableDevice' => 'required',
            'innovation' => 'required',
        ]);

        cardStatementCheck::create($validatedData);

        return redirect()->to('/store/cashupform');
    }

    public function render()
    {
        return view('livewire.store-cash-up-form-component');
    }
}
