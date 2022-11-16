<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\recieptCashUpSummary;
use App\Models\cardStatementCheck;

class StoreCashUpFormComponent extends Component
{
    //Top Row Steez
    public $totalG4SDeposit1,$looseChange,$totalG4SDeposit2,$changeFromBank,$comments,$portableDevice,$innovation;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function submit()
    {
        $validatedDate = $this->validate([
                'portableDevice' => 'required',
                'innovation' => 'required',
            ],
            [
                'portableDevice.0.required' => 'portableDevice field is required',
                'innovation.0.required' => 'innovation field is required',
                'portableDevice.*.required' => 'portableDevice field is required',
                'innovation.*.required' => 'innovation field is required',
            ]
        );

        foreach ($this->portableDevice as $key => $value) {
            cardStatementCheck::create(['portableDevice' => $this->portableDevice[$key], 'innovation' => $this->innovation[$key]]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Contact Has Been Created Successfully.');
    }

    public function render()
    {
        return view('livewire.store-cash-up-form-component');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    private function resetInputFields(){
        $this->name = '';
        $this->phone = '';
    }
}
