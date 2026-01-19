@extends('admin.layouts.app')

@section('content')

 <div class="custom-page-content">
    <div class="row">
      <div class="col-xl-12 mx-auto position-relative">
        <h4 class="mb-0 text-uppercase">Collection All</h4>
        <hr>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="row">

                <x-common.input
                    label="Receipt No."
                    column="2"
                    name="loan_number"
                    :required="true"
                />

                <x-common.input
                    label="Member Account No"
                    column="2"
                    name=""
                    readonly
                />
                <x-common.input
                    label="Accounts Date"
                    column="2"
                    name=""
                    type="date"
                    readonly
                    class="datepicker"
                />
                <x-common.select
                    label="Member ID"
                    column="2"
                    name=""
                    :required="true"
                    :value="'Job Type'"
                    class="single-select"
                    :options="[
                        'job_type' => 'Job Type',
                        'business' => 'Business',
                        'job' => 'Job Holder',
                        'education' => 'Education',
                        'student' => 'Student'
                    ]"
                />
                <x-common.select
                    label="Accounts Type"
                    column="2"
                    name=""
                   
                    :value="'Job Type'"
                    class="single-select"
                    :options="[
                        'job_type' => 'Job Type',
                        'business' => 'Business',
                        'job' => 'Job Holder',
                        'education' => 'Education',
                        'student' => 'Student'
                    ]"
                />
                <div class="col-xl-2">
                    <div class="mb-3">
                        <label class="form-label">Members Image</label>
                        <div>
                              <img class="rounded-3" src="{{ asset('assets/images/avatars/avatar-8.png') }}" alt="Qr Code" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="accordion accordion-flush custom-accordion" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Member Information
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <div class="border p-3 rounded-1">
                            <div class="col-xl-12">
                            <div class="row">
                                <x-common.input
                                    label="User Name"
                                    column="3"
                                    name=""
                                    readonly
                                />
                                <x-common.input
                                    label="Fathers Name"
                                    column="3"
                                    name=""
                                    readonly
                                />
                                <x-common.input
                                    label="Period"
                                    column="3"
                                    name=""
                                    readonly
                                />
                                <x-common.input
                                label="Member No"
                                column="3"
                                name="member_age"
                                
                                />

                                <x-common.input
                                label="Father’s Name"
                                column="3"
                                name="acc_name"
                                
                                />
                                <x-common.input
                                label="Mother's Name"
                                column="3"
                                name="member_age"
                                
                                />
                                <x-common.input
                                label="Mother's Member No"
                                column="3"
                                name="member_age"
                                
                                />
                                <x-common.select
                                    label="Marital Status"
                                    column="3"
                                    name="loan_type_id"
                                    :required="true"
                                    :value="'Marital Status'"
                                    class="single-select"
                                    :options="[
                                        'marital_Status' => 'Marital Status',
                                        'business' => 'Business',
                                        'job' => 'Job Holder',
                                        'education' => 'Education',
                                        'student' => 'Student'
                                    ]"
                                />
                                <x-common.input
                                label="Spouse’s Name"
                                column="3"
                                name="member_age"
                                
                                />
                                <x-common.input
                                label="Spouse’s Member No"
                                column="3"
                                name="member_age"
                                
                                />
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                   Collection Line
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body p-0">
                        <div class="border pl-2 p-3 rounded-1">
                            <div class="row">
                               <div class="col-lg-6">
                                    <div class="rounded-2 p-3 border">
                                        <div class="row">
                                            <x-common.input
                                            label="Transaction Account"
                                            column="6"
                                            name=""
                                            />
                                            <x-common.input
                                                label="Share"
                                                column="6"
                                                name="acc_name"
                                            />
                                            <x-common.input
                                                label="Loan Refund"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="Loan Interest"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="Interest Fine"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="LPS"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="LPS Renual Fee"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="Account Close Fee"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="Total Amount"
                                                column="6"
                                                name=""
                                            />
                                        </div>
                                    </div>
                               </div>
                               <div class="col-lg-6">
                                    <div class="rounded-2 p-3 border">
                                        <div class="row">
                                            <x-common.input
                                                label="Description"
                                                column="6"
                                                name=""
                                                required="true"
                                            />
                                            <div class="col-xl-3">
                                                <div class="mb-3">
                                                <label class="form-label">is in T/A<span class="text-danger">*</span></label>
                                                    <div class="form-check mt-2 mx-auto">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="flexCheckChecked" value="option1">
                                                        <label class="form-check-label" for="flexCheckChecked">Light</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="mb-3">
                                                <label class="form-label">is Defaulter</label>
                                                    <div class="form-check mt-2 mx-auto">
                                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="flexCheckChecked" value="option1">
                                                    <label class="form-check-label" for="flexCheckChecked">Light</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <x-common.input
                                                label="Default Months"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="Loan Outstanding"
                                                column="6"
                                                name=""
                                            />
                                            <x-common.input
                                                label="Dues"
                                                column="6"
                                                name=""
                                                required="true"
                                            />
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Due Info
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-0">
                        <div class="border pl-2 p-3 rounded-1">
                            <div class="row">

                                <x-common.input
                                    label="Village"
                                    column="3"
                                    name="village"
                                />

                                <x-common.input
                                    label="Police Station"
                                    column="3"
                                    name="police_station"
                                />

                                <x-common.input
                                    label="Post Office"
                                    column="3"
                                    name="post_office"
                                />

                                <x-common.input
                                    label="District"
                                    column="3"
                                    name="district"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection