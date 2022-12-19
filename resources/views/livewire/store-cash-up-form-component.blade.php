<div>
    <form wire:submit.prevent="submit">
        @csrf
        <div>
            <div class="container" style="text-align: center">
                <!--first row-->
                  <div class="row">
                    <div class="col  border">
                      Franchise Logo
                      <br>
                      Franchise Name
                      <br>

                    </div>
                    <div class="col border">
                      Daily Cash Up Summary
                      <br>
                      *To Be Completed At Store Level*
                      <hr>
                      Comments
                      <input type="textarea" class="form-control" wire:model="comments" style="">
                    </div>
                    <div class="col border">
                      Receipt Cash Up Summary
                      <!--First form-->
                      <div class="row">
                        <div class="col ">
                          Total G4S Deposit1
                        </div>
                        <div class="col ">
                            <input type="text" class="form-control" wire:model="totalG4SDeposit1" style="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Loose Change
                        </div>
                        <div class="col ">
                            <input type="text" class="form-control" wire:model="looseChange" style="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Total G4S Deposit2
                        </div>
                        <div class="col ">
                            <input type="text" class="form-control" wire:model="totalG4SDeposit2" style="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Chanage From Bank
                        </div>
                        <div class="col ">
                            <input type="text" class="form-control" wire:model="changeFromBank" style="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Petty Cash
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Cheques
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Coin/Gift vouchers
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Return Vouchers
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Promotional Vouchers
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          EFT
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          Total Cards
                        </div>
                        <div class="col ">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col border">
                          Store Total
                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>

                    </div>
                    <div class="col border">
                      Card Statement Check
                      <!--Second form-->
                      <div class="row">
                        <div class="col border">
                          Portable device
                        </div>
                        <div class="col border">
                          Innervation
                        </div>
                      </div>
                      <div class="row">
                        <div class="col border">

                        </div>
                        <div class="col border">

                        </div>
                      </div>
                      <!--START-->
                      @foreach($inputs as $key => $value)
                        <div class="row">
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="portableDevice.{{$value}}" style="">
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="innovation.{{$value}}" style="">
                            </div>
                            <div class="col">
                                <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
                            </div>
                      </div>
                      @endforeach
                      <div class="">
                        <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
                        </div>
                      <!--END-->
                      <div class="row">
                        <div class="col border">
                          R {{$tests}}
                        </div>
                        <div class="col border">
                         R 0
                        </div>
                      </div>
                      <div class="row">
                        <div class="col border">
                         R 0
                        </div>
                        <div class="col border">
                         R 0
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--MID-->
                  <div class="row">
                    <div class="col  border">
                      DATE
                      <br>
                      Totals per cashier
                      <div class="row">
                        <div class="col  border">
                          Cashier
                        </div>
                        <div class="col border">
                          Cash
                        </div>
                        <div class="col  border">
                          Cheques
                        </div>
                        <div class="col border">
                          EFT
                        </div>
                        <div class="col  border">
                          Portable Devices
                        </div>
                        <div class="col border">
                          Innervation
                        </div>
                      </div>
                      <!--START-->
                      @foreach($midInputs as $key => $value)
                        <div class="row">
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="cashier.{{$value}}" style="">
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="cash.{{$value}}" style="">
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="cheques.{{$value}}" style="">
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="EFT.{{$value}}" style="">
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="midinnovation.{{$value}}" style="">
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control" wire:model="midPortableDevice.{{$value}}" style="">
                            </div>
                            <div class="col">
                                <button class="btn btn-danger btn-sm" wire:click.prevent="midRemove({{$key}})">Remove</button>
                            </div>

                      </div>
                      @endforeach
                      <div class="">
                        <button class="btn text-white btn-info btn-sm" wire:click.prevent="midAdd({{$midi}})">Add</button>
                        </div>
                      <!--END-->

                      <div class="row">
                        <div class="col  border">
                         Total
                        </div>
                        <div class="col border">
                          R
                        </div>
                        <div class="col  border">
                          R
                        </div>
                        <div class="col border">
                          R
                        </div>
                        <div class="col  border">
                          R
                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>
                    </div>
                    <div class="col border">
                      <div class="row">
                        <div class="col  border">
                          Cash/Card payments for vouchers
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                          More contents to come on vouchers
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END-->
                  <div class="row">
                    <div class="col  border">
                      Physical Cash Check
                      <div class="row">
                        <div class="col  border">
                          Total G4S Deposits
                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col  border">
                          Loose Change
                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col  border">
                          Total cash per summary
                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col  border">
                          Total cash per cashier
                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>
                      <div class="row">
                        <div class="col  border">
                          Difference
                        </div>
                        <div class="col border">
                         R
                        </div>
                      </div>
                    </div>
                    <div class="col border">
                        Petty Cash Reconciliation
                        <div class="row">
                            <div class="col  border">
                            t
                            </div>
                            <div class="col border">
                            t
                            </div>

                            <div class="col  border">
                            t
                            </div>
                            <div class="col border">
                            t
                            </div>
                        </div>
                        <!--START-->
                        @foreach($pettyInputs as $key => $value)
                            <div class="row">
                                <div class="col  border">
                                    <input type="text" class="form-control" wire:model="supplier.{{$value}}" style="">
                                </div>
                                <div class="col border">
                                    <input type="text" class="form-control" wire:model="explainExpense.{{$value}}" style="">
                                </div>
                                <div class="col  border">
                                    <input type="text" class="form-control" wire:model="approvedSlipAttached.{{$value}}" style="">
                                </div>
                                <div class="col border">
                                    <input type="text" class="form-control" wire:model="amount.{{$value}}" style="">
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-sm" wire:click.prevent="pettyRemove({{$key}})">Remove</button>
                                </div>
                            </div>
                        @endforeach
                        <button class="btn text-white btn-info btn-sm" wire:click.prevent="pettyAdd({{$pettyi}})">Add</button>
                        <!--END--->
                      <div class="row">
                        <div class="col  border">
                          Total
                        </div>
                        <div class="col border">

                        </div>
                        <div class="col  border">

                        </div>
                        <div class="col border">
                          R
                        </div>
                      </div>
                    </div>
                    <div class="col border">
                      EFT Details
                      <div class="row">
                        <div class="col  border">
                          Date of Payments
                        </div>
                        <div class="col border">
                          Sales order number
                        </div>
                        <div class="col  border">
                          Amount
                        </div>
                      </div>
                      <!--START-->
                      @foreach($eftInputs as $key => $value)
                      <div class="row">
                          <div class="col  border">
                              <input type="text" class="form-control" wire:model="dateOfPayment.{{$value}}" style="">
                          </div>
                          <div class="col border">
                              <input type="text" class="form-control" wire:model="salesOrderNumber.{{$value}}" style="">
                          </div>
                          <div class="col  border">
                              <input type="text" class="form-control" wire:model="eftamount.{{$value}}" style="">
                          </div>
                          <div class="col">
                              <button class="btn btn-danger btn-sm" wire:click.prevent="eftRemove({{$key}})">Remove</button>
                          </div>
                      </div>
                  @endforeach
                  <button class="btn text-white btn-info btn-sm" wire:click.prevent="eftAdd({{$efti}})">Add</button>
                  <!--END--->
                      <div class="row">
                        <div class="col  border">
                          Total
                        </div>
                        <div class="col border">

                        </div>
                        <div class="col  border">
                          R
                        </div>
                      </div>
                    </div>
                    <div class="col border">
                      <div class="row">
                        <div class="col  border">
                          Cash Office totals
                          <div class="row">
                            <div class="col  border">
                              Floats Total
                            </div>
                            <div class="col border">
                              -
                            </div>
                          </div>
                          <div class="row">
                            <div class="col  border">
                              Change Boxes
                            </div>
                            <div class="col border">
                              -
                            </div>
                          </div>
                          <div class="row">
                            <div class="col  border">
                              Cash on hand
                            </div>
                            <div class="col border">
                              -
                            </div>
                          </div>
                          <div class="row">
                            <div class="col  border">
                              Total cash at store
                            </div>
                            <div class="col border">
                              R
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col  border">
                         User Details
                          <div class="row">
                            <div class="col  border">
                              Cash Up Details
                            </div>
                            <div class="col border">
                              -
                            </div>
                          </div>
                          <div class="row">
                            <div class="col  border">
                              Counting/Banking
                            </div>
                            <div class="col border">
                              -
                            </div>
                          </div>
                          <div class="row">
                            <div class="col  border">
                              Cash Up Summary
                            </div>
                            <div class="col border">
                              -
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div style="text-align: center; margin:1%;">
            <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
          </div>
        </div>
        </div>

    </form>
</div>
