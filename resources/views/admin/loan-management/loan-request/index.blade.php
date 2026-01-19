@extends('admin.layouts.app')

@section('content')
  <div class="custom-page-content">
    <div class="row">
      <div class="col-xl-12 mx-auto position-relative">
        <h4 class="mb-0 text-uppercase">Account Information</h4>
        <hr>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="row">

                   <x-common.input
                    label="Loan Number"
                    column="3"
                    name="loan_number"
                    :required="true"
                  />

                  <x-common.input
                    label="Loan Open Date"
                    column="3"
                    name="loan_open_date"
                    type="date"
                    :required="true"
                    class="datepicker"
                    
                  />

                  <x-common.select
                    label="Job Type"
                    column="3"
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
                  {{-- <x-common.select
                      label="Loan Type"
                      column="3"
                      name="loan_type_id"
                      :required="true"
                      :value="'Accounts Type'"
                      class="single-select"
                      :options="[
                          'loan_type' => 'Loan Type',
                          'business' => 'Business',
                          'job' => 'Job Holder',
                          'education' => 'Education',
                          'student' => 'Student'
                      ]"
                  /> --}}
                    
              </div>
              <div class="card radius-10">
                <div class="card-body p-0">
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
                                    label="Loan Apply Name"
                                    column="3"
                                    name="acc_name"
                                    :required="true"
                                  />
                                  <x-common.input
                                    label="Age"
                                    column="3"
                                    name="member_age"
                                   :required="true"
                                  />
                                  <x-common.input
                                    label="Saving Accounts No"
                                    column="3"
                                    name="member_age"
                                    :required="true"
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
                          PRESENT ADDRESS
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                              <div class="pl-2">
                                <div class="border p-3 rounded-1">
                                  <div class="col-xl-12">
                                    <div class="row">
                                        
                                        <x-common.input
                                          label="Address"
                                          column="3"
                                          name="acc_name"
                                        />
                                        
                                        <x-common.input
                                          label="Mobile No"
                                          column="3"
                                          name="acc_name"
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
                          Permanent Address
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                              <div class="pl-2">
                                <div class="border p-3 rounded-1">
                                  <div class="col-xl-12">
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
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          Office Information
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                              <div class="pl-2">
                                <div class="border p-3 rounded-1">
                                  <div class="col-xl-12">
                                    <div class="row">

                                        <x-common.select
                                          label="Job Type"
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
                                        <x-common.input
                                          label="Designation"
                                          column="2"
                                          name="designation"
                                          :required="true"
                                        />
                                        <div class="col-xl-4">
                                            <div class="mb-3 nid-group">
                                              <label class="form-label">NID No. <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control nid_number" placeholder="NID No." required>
                                              
                                                  <div class="nid-upload mb-3 mt-3">
                                                    <p class="mb-1">Upload</p>
                                                    <div class="d-flex chose-file">
                                                      <label for="fileupload">
                                                      <input type="file" id="fileupload" accept=".jpg, .jpeg, .png">
                                                      </label>
                                                      <div class="img-box">
                                                          <span>X</span>
                                                      </div>
                                                  </div>
                                                
                                              </div>
                                            </div>
                                        </div>
                                        <x-common.input
                                          label="Office Phone No"
                                          column="2"
                                          name=""
                                        />
                                        
                                        <x-common.input
                                          label="Office Name & Address"
                                          column="2"
                                          name=""
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
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          Income Information (Sub-Table with multiple entry)
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                              <div class="pl-2">
                                <div class="border p-3 rounded-1">
                                  <div class="col-xl-12">
                                    <div class="row">
                                        <x-common.input
                                              label="Name"
                                              column="2"
                                              name="name"
                                          />

                                          <x-common.input
                                              label="Job"
                                              column="2"
                                              name="job"
                                          />

                                          <x-common.input
                                              label="Relation"
                                              column="2"
                                              name="relation"
                                          />

                                            <x-common.input
                                              label="Organization Name & Address"
                                              column="3"
                                              name="Organization_Name_Address"
                                          />

                                            <x-common.input
                                              label="Amount"
                                              column="2"
                                              name="amount"
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
                      <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                           Monthly Expense Information
                        </button>
                      </h2>
                      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                                <div class="pl-2">
                                  <div class="border p-3 rounded-1">
                                    <div class="col-xl-12">
                                      <div class="row">
                                          <x-common.input
                                              label="House Rent"
                                              column="2"
                                              name="name"
                                              :required="true"
                                          />

                                          <x-common.input
                                              label="Fooding Expence"
                                              column="2"
                                              name="job"
                                              :required="true"
                                          />

                                          <x-common.input
                                              label="Education Expence"
                                              column="2"
                                              name="education"
                                              :required="true"
                                          />

                                            <x-common.input
                                              label="Transport Expence"
                                              column="3"
                                              name="Organization_Name_Address"
                                              :required="true"
                                          />

                                            <x-common.input
                                              label="Medical Expence"
                                              column="2"
                                              name="amount"
                                              :required="true"
                                          />
                                        
                                      </div>
                                      <div class="row">
                                        <x-common.input
                                              label="Loan Instalment with Interest (Personal)"
                                              column="3"
                                              name="amount"
                                              :required="true"
                                          />
                                          <x-common.input
                                              label="Loan Instalment with Interest (Family)"
                                              column="3"
                                              name="amount"
                                              :required="true"
                                          />
                                      </div>
                                      <div class="row">
                                        <x-common.input
                                              label="Others Expense"
                                              column="3"
                                              name="amount"
                                              :required="true"
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
                      <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                          Loan Information
                        </button>
                      </h2>
                      <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                              <div class="pl-2">
                                <div class="border p-3 rounded-1">
                                  <div class="col-xl-12">
                                    <div class="row">
                                       <x-common.input
                                              label="Others Expense"
                                              column="3"
                                              name="amount"
                                              :required="true"
                                        />

                                         <x-common.input
                                              label="Amount in Word"
                                              column="3"
                                              name="amount"
                                              :required="true"
                                          />
                                    </div>
                                    <div class="row">
                                      <x-common.input
                                              label="Self Share Amount (Current)"
                                              column="3"
                                              name="amount"
                                              :required="true"
                                        />

                                         <x-common.input
                                              label="6/5/4/3 Previous Month Amount"
                                              column="3"
                                              name="intro_account_name_2"
                                              :required="true"
                                        />
                                       
                                        <x-common.input
                                              label="Loan Reason"
                                              column="3"
                                              name="intro_account_name_2"
                                              :required="true"
                                        />
                                        <div class="col-xl-3">
                                          <div class="mb-3 loantype">
                                            <div class="form-check form-check-inline me-2">
                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                              <label class="form-check-label" for="inlineCheckbox1">General</label>
                                            </div>
                                            <div class="form-check form-check-inline me-2">
                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                              <label class="form-check-label" for="inlineCheckbox1">Special</label>
                                            </div>
                                            <div class="form-check form-check-inline me-2">
                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                              <label class="form-check-label" for="inlineCheckbox1">Education</label>
                                            </div>
                                            <div class="form-check form-check-inline me-2">
                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                              <label class="form-check-label" for="inlineCheckbox1">Solvency</label>
                                            </div>
                                          </div>
                                        </div>
                                         <x-common.input
                                            label="How many times has the Loan already taken?"
                                            column="3"
                                            name="intro_account_name_2"
                                          />
                                          <x-common.input
                                            label="Is Payment Regular?"
                                            column="3"
                                            name="intro_account_name_2"
                                          />
                                          <x-common.input
                                            label="How many Installments do you want to pay?"
                                            column="3"
                                            name="intro_account_name_2"
                                            :required="true"
                                          />
                                           <x-common.input
                                            label="First Instalment Month"
                                            column="3"
                                            name="intro_account_name_2"
                                            :required="true"
                                          />
                                           <x-common.input
                                            label="Signature Terms:"
                                            column="3"
                                            name="intro_account_name_2"
                                            readonly
                                          />
                                          <x-common.input
                                            label="Age Terms:"
                                            column="3"
                                            name="intro_account_name_2"
                                            readonly
                                          />
                                    </div>
                                    <div class="row">
                                        <x-common.input
                                          label="Loan Guarantee Details without Interest Terms:"
                                          column="6"
                                          name="intro_account_name_2"
                                          readonly
                                        />
                                    </div>
                                    <div class="row">
                                        <x-common.input
                                          label="Name"
                                          column="3"
                                          name=""
                                          :required="true"
                                         
                                        />
                                        <x-common.input
                                          label="Member No"
                                          column="3"
                                          name=""
                                          :required="true"
                                   
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
                      <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                          For Office Use
                        </button>
                      </h2>
                      <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                                <div class="pl-2">
                                  <div class="border p-3 rounded-1">
                                    <div class="col-xl-12">
                                      <div class="row">
                                          <x-common.textarea
                                            label="Comments/Description"
                                            column="3"
                                            name="comments_description"
                                            rows="1"
                                          />
                                        
                                          <x-common.input
                                            label="Membership Date"
                                            column="3"
                                            type="date"
                                            name="accounts_open_date"
                                            placeholder="dd-mm-yyyy"
                                             class="datepicker"
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
                </div>
              </div>
              <div class="submit-button">
                  <button type="button" class="btn btn-primary px-5">Back</button>
                  <button type="button" class="btn btn-success px-5">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection