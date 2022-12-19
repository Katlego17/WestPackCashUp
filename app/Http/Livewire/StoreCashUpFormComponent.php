<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\recieptCashUpSummary;
use App\Models\cardStatementCheck;
use App\Models\cashOfficeTotals;
use App\Models\eftDetails;
use App\Models\pettyCashReconciliation;
use App\Models\totalsPerCashier;

class StoreCashUpFormComponent extends Component
{
    //Top Row Steez
    public $totalG4SDeposit1,$looseChange,$totalG4SDeposit2,$changeFromBank,$comments,$portableDevice,$innovation;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $test;
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

    //Mid Row Steez
    public $cashier,$cash,$cheques,$EFT,$midinnovation,$midPortableDevice;

    public $midUpdateMode = false;
    public $midInputs = [];
    public $midi = 1;
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function midAdd($midi)
    {
        $midi = $midi + 1;
        $this->midi = $midi;
        array_push($this->midInputs ,$midi);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function midRemove($midi)
    {
        unset($this->midInputs[$midi]);
    }

    //Last Row Steez
    public $supplier,$explainExpense,$approvedSlipAttached,$amount;
    public $dateOfPayment,$salesOrderNumber,$eftamount;

    public $pettyUpdateMode = false;
    public $eftUpdateMode = false;
    public $pettyInputs = [];
    public $eftInputs = [];
    public $pettyi = 1;
    public $efti = 1;
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function pettyAdd($pettyi)
    {
        $pettyi = $pettyi + 1;
        $this->pettyi = $pettyi;
        array_push($this->pettyInputs ,$pettyi);
    }
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function eftAdd($efti)
    {
        $efti = $efti + 1;
        $this->efti = $efti;
        array_push($this->eftInputs ,$efti);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function pettyRemove($pettyi)
    {
        unset($this->pettyInputs[$pettyi]);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function eftRemove($efti)
    {
        unset($this->eftInputs[$efti]);
    }
    //*********************************************************************************** */
    public function submit()
    {
        //Top Row Steez
        //SECTION 1
        $validatedData = $this->validate([
            'totalG4SDeposit1' => 'required',
            'looseChange' => 'required',
            'totalG4SDeposit2' => 'required',
            'changeFromBank' => 'required',
            'comments' => 'required',
        ]);

        recieptCashUpSummary::create($validatedData);
        //SECTION 2
        $validatedDate = $this->validate([
                'portableDevice' => 'required',
                'innovation' => 'required',
            ]
        );
        foreach ($this->portableDevice as $key => $value) {
            cardStatementCheck::create([
                'portableDevice' => $this->portableDevice[$key],
                'innovation' => $this->innovation[$key]
            ]);
        }

        //Second Row Steez totalsPerCashier
        //Section 1 public $cashier,$cash,$cheques,$EFT,$midinnovation,$midPortableDevice;
        $validatedDate = $this->validate([
            'cashier' => 'required',
            'cash' => 'required',
            'cheques' => 'required',
            'EFT' => 'required',
            'midinnovation' => 'required',
            'midPortableDevice' => 'required',
        ]
        );
        foreach ($this->cashier as $key => $value) {
            totalsPerCashier::create([
                'cashier' => $this->cashier[$key],
                'cash' => $this->cash[$key],
                'cheques' => $this->cheques[$key],
                'EFT' => $this->EFT[$key],
                'innovation' => $this->midinnovation[$key],
                'portableDevices' => $this->midPortableDevice[$key]
            ]);
        }


        //petty cash recon public $supplier,$explainExpense,$approvedSlipAttached,$amount;
        $validatedData = $this->validate([
                'supplier' => 'required',
                'explainExpense' => 'required',
                'approvedSlipAttached' => 'required',
                'amount' => 'required',
            ]
        );

        foreach ($this->supplier as $key => $value) {
            pettyCashReconciliation::create([
                'supplier' => $this->supplier[$key],
                'explainExpense' => $this->explainExpense[$key],
                'approvedSlipAttached' => $this->approvedSlipAttached[$key],
                'amount' => $this->amount[$key]
            ]);
        }

        //eft details public $dateOfPayment,$salesOrderNumber,$eftamount;
        $validatedData = $this->validate([
            'dateOfPayment' => 'required',
            'salesOrderNumber' => 'required',
            'eftamount' => 'required',
            ]
        );

        foreach ($this->dateOfPayment as $key => $value) {
            eftDetails::create([
                'dateOfPayment' => $this->dateOfPayment[$key],
                'salesOrderNumber' => $this->salesOrderNumber[$key],
                'eftamount' => $this->eftamount[$key]
            ]);
        }

        //Needed methods for all my inputs below
        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Info Created Successfully.');
    }

    public $renderedPortableDevices;
    public $renderedInnovation;
    public function render()
    {
        if ($this->portableDevice)
        {
            foreach ($this->portableDevice as $key => $value)
            {
                $this->renderedPortableDevices = $this->portableDevice[$key];
                //$this->renderedInnovation = $this->innovation[$key];
            }
        }

        #dd($this->renderedPortableDevices);
        return view('livewire.store-cash-up-form-component',[
            'tests'=>$this->renderedPortableDevices
        ]);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    private function resetInputFields(){
        $this->portableDevice = '';
        $this->innovation = '';
        $this->totalG4SDeposit1 = '';
        $this->looseChange = '';
        $this->totalG4SDeposit2 = '';
        $this->changeFromBank = '';
        $this->comments = '';
        $this->cashier = '';
        $this->cash = '';
        $this->cheques = '';
        $this->EFT = '';
        $this->midinnovation = '';
        $this->midPortableDevice = '';
        $this->supplier = '';
        $this->explainExpense = '';
        $this->approvedSlipAttached = '';
        $this->amount = '';
        $this->dateOfPayment = '';
        $this->salesOrderNumber = '';
        $this->eftamount = '';
    }

}
