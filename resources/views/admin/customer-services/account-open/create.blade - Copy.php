@extends('admin.layouts.app')

@section('content')
  <div class="custom-page-content">
    <div class="row">
      <div class="col-xl-12 mx-auto position-relative">
        <h4 class="mb-0 text-uppercase">Account Information</h4>
        <hr>
        <div class="card">
          <div class="card-body">
            <form action="{{ route('admin.customer-services.account-open.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">

                <div class="col-xl-12 mb-3">
                  <x-common.input
                    label="Accounts Open Date"
                    :showSymbol="false"
                    type="date"
                    name="accounts_open_date"
                    :required="true"
                    placeholder="dd-mm-yyyy"
                    class="datepicker"
                  />
                </div>
                <div class="col-xl-12 mb-3">
                    <x-common.input
                      label="Accounts No"
                      name="accounts_id"
                      :required="true"
                      :showSymbol="false"
                      
                    />
                </div>
                <div class="col-xl-12 mb-3">
                    <x-common.select
                          label="Accounts Type"
                          name="accounts_type_id"
                          :required="true"
                          :value="'Accounts Type'"
                          class="single-select"
                          :options="[
                              '' => 'Accounts Type',
                              '' => 'Business',
                              '' => 'Job Holder',
                              '' => 'Education',
                              '' => 'Student'
                          ]"
                    />
                  </div>
                  <div class="col-xl-3">
                      <div class="mb-3">
                            <p class="mb-1">Upload Images</p>
                            <div class="d-flex chose-file">
                              <label for="fileupload">
                                <input type="file" id="photo" accept=".jpg, .jpeg, .png">
                              </label>
                              <div class="img-box">
                                  <span>X</span>
                              </div>
                          </div>
                      </div>
                  </div>
                    <div class="col-xl-3">
                      <div class="mb-3">
                        <p class="mb-1">Signature</p>
                        <div class="d-flex chose-file">
                            <label for="fileupload">
                            <input type="file" id="signature" accept=".jpg, .jpeg, .png">
                            </label>
                            <div class="img-box">
                                <span>X</span>
                            </div>
                        </div>							
                      </div>
                  </div>
              </div>
             
              <div class="submit-button">
                  <button type="button" class="btn btn-primary px-5">Back</button>
                  <button type="submit" class="btn btn-success px-5">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


 {{-- <div class="card radius-10">
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
                            
                                <div class="row">
                                  <div class="col-lg-12 mb-3">
                                      <x-common.input
                                          label="Document No"
                                          placeholder="Document No"
                                          name="document_no"
                                          :showSymbol="false" 
                                          :readonly="true"
                                          class="form-control"
                                          type="text"
                                      />
                                  </div>
                                  <div class="col-lg-12 mb-3">
                                      <x-common.input
                                          label="Member No"
                                          placeholder="Member No"
                                          name="document_ref_no"
                                          :showSymbol="false" 
                                          :readonly="true"
                                          class="form-control"
                                          type="text"
                                      />
                                  </div>
                                 
                                  <div class="col-xl-1">
                                      <div class="qr-code text-xl-center">
                                         <img src="{{ asset('assets/images/qr.png') }}" alt="Qr Code" class="img-fluid rounded">
                                      </div>
                                  </div>
                                  <div class="col-xl-2">
                                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">ID CARD</button>
                                      <!-- Modal -->
                                      <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Modal title</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-success">Save</button>
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
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Personal Information
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="border p-3 rounded-1">
                            
                                <div class="row">
                                    
                                    <div class="col-lg-12 mb-3">
                                       
                                      <x-common.input
                                          label="Accounts Name"
                                          placeholder="Accounts Name"
                                          name="acc_name"
                                          :showSymbol="false" 
                                          :required="true"
                                          class="form-control"
                                          type="text"
                                      />
                                    </div>
                                    
                                    <x-common.input
                                      label="Account Name (Bangla)"
                                      column="3"
                                      name="acc_name_bn"
                                      :required="true"
                                      :showSymbol="false"
                                    />

                                    <x-common.input
                                      label="Father’s Name"
                                      column="3"
                                      name="father_name"
                                    />

                                      <x-common.input
                                      label="Mother's Name"
                                      column="3"
                                      name="mother_name"
                                    />

                                      <x-common.input
                                      label="Spouse Name"
                                      column="3"
                                      name="spouse_name"
                                    />

                                    <x-common.select
                                        label="Marital Status"
                                        column="2"
                                        name="marital_status_id"
                                        :required="true"
                                        :value="'Marital Status'"
                                        class="single-select"
                                        :options="[
                                            'marital_status' => 'Marital Status',
                                            'married' => 'Married',
                                            'un_married' => 'Unmarried',
                                            'Divorce' => 'divorce',
                                        ]"
                                    />
                                    

                                    <x-common.select
                                        label="Gender"
                                        column="3"
                                        name="gender_id"
                                        :required="true"
                                        :value="'Gender'"
                                        class="single-select"
                                        :options="[
                                            'gender' => 'Gender',
                                            'man' => 'Man',
                                            'women' => 'Women',
                                            'other' => 'Other',
                                        ]"
                                    />
                                    <x-common.input
                                      label="Date of Birth"
                                      type="date"
                                      name="date_of_birth"
                                      :required="true"
                                      class="datepicker"
                                      :showSymbol="false"
                                    />
                                    
                                      <x-common.input
                                        label="Nationality"
                                        column="3"
                                        name="nationality"
                                        :required="true"
                                      />
                                      
                                    <div class="col-xl-3">
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
                                        label="Govt. B.C.No"
                                        column="3"
                                        name="birth_certificate_no"
                                      />

                                      <x-common.input
                                      label="Blood Group"
                                      column="3"
                                      name="blood_group"
                                      :required="true"
                                    />

                                    <x-common.input
                                      label="mobile No"
                                      column="3"
                                      name="mobile"
                                      :required="true"
                                    />

                                      <x-common.input
                                      label="Fax"
                                      column="3"
                                      name="fax"
                                    />

                                      <x-common.input
                                      label="Email"
                                      column="3"
                                      name="email"
                                    />
                                    
                                    <x-common.input
                                      label="Religion"
                                      column="3"
                                      name="religion_id"
                                    />

                                    <x-common.input
                                      label="Domination"
                                      column="3"
                                      name="domination_id"
                                    />

                                    <x-common.input
                                      label="Church Name/Area"
                                      column="3"
                                      name="church_name_area"
                                    />

                                    <x-common.input
                                      label="Church Phone"
                                      column="3"
                                      name="church_phone"
                                    />

                                    <x-common.input
                                      label="Occupation Type"
                                      column="3"
                                      name="occupation_type_id"
                                    />

                                    <x-common.input
                                      label="designation"
                                      column="3"
                                      name="designation"
                                    />
                                    
                                    <x-common.input
                                      label="Office Name & Address"
                                      column="3"
                                      name="office_name_address"
                                    />
                                    
                                    <x-common.input
                                      label="Office Phone No"
                                      column="3"
                                      name="office_phone_no"
                                    />
                                    
                                </div>
                              
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Other Co-Op/Union Information
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
                                          label="Union Name"
                                          column="3"
                                          name="union_name"
                                        />

                                        <x-common.input
                                          label="Union Phone No"
                                          column="3"
                                          name="union_phone_no"
                                        />

                                        <x-common.textarea
                                          label="Comments/Description"
                                          column="3"
                                          name="comments_description"
                                          rows="1"
                                        />

                                        <x-common.input
                                          label="Union Accounts No"
                                          column="3"
                                          name="union_accounts_no"
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
                          Present Address
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="row">
                              <div class="pl-2">
                                <div class="border p-3 rounded-1">
                                  <div class="col-xl-12">
                                    <div class="row">
                                      
                                        <x-common.input
                                          label="House No"
                                          column="3"
                                          name="present_address_hn"
                                        />

                                        <x-common.input
                                          label="Village"
                                          column="3"
                                          name="present_address_vil"
                                       />
                                        
                                        <x-common.input
                                          label="Police Station"
                                          column="3"
                                          name="present_address_ps"
                                        />

                                        <x-common.input
                                          label="Post Code"
                                          column="3"
                                          name="present_address_pc"
                                        />

                                        <x-common.input
                                          label="Road No"
                                          column="3"
                                          name="present_address_rd"
                                        />

                                        <x-common.input
                                          label="Post Office"
                                          column="3"
                                          name="present_address_po"
                                        />

                                         <x-common.input
                                          label="District"
                                          column="3"
                                          name="present_address_dist"
                                        />


                                         <x-common.input
                                          label="Home Phone"
                                          column="3"
                                          name="present_address_hp"
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
                          Permanent Address
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
                                          label="House No"
                                          column="3"
                                          name="permanent_address_hn"
                                        />

                                        <x-common.input
                                          label="Village"
                                          column="3"
                                          name="permanent_address_vil"
                                      />

                                      <x-common.input
                                          label="Police Station"
                                          column="3"
                                          name="permanent_address_ps"
                                      />

                                      <x-common.input
                                          label="Post Code"
                                          column="3"
                                          name="permanent_address_pc"
                                      />

                                      <x-common.input
                                          label="Road No"
                                          column="3"
                                          name="permanent_address_rd"
                                      />
                                    
                                      <x-common.input
                                          label="Post Office"
                                          column="3"
                                          name="permanent_address_po"
                                      />

                                      <x-common.input
                                          label="District"
                                          column="3"
                                          name="permanent_address_dist"
                                      />
                                      <x-common.input
                                          label="Home Phone"
                                          column="3"
                                          name="permanent_address_hp"
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
                          Nominee Information
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
                                              label="1. Nominee Name"
                                              column="3"
                                              name="nominee_name_1"
                                          />

                                          <x-common.input
                                              label="Father’s Name"
                                              column="3"
                                              name="nom_fathers_name_1"
                                          />

                                          <x-common.input
                                              label="Mother’s Name"
                                              column="3"
                                              name="nom_mothers_name_1"
                                          />

                                            <x-common.input
                                              label="Address"
                                              column="3"
                                              name="nom_address_1"
                                          />

                                            <x-common.input
                                              label="Age"
                                              column="3"
                                              name="nom_age_1"
                                          />

                                          <div class="col-xl-3">
                                            <div class="mb-3">
                                                <p class="mb-1">Nominee Photo</p>
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
                                        <div class="col-xl-3">
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
                                              label="Relation"
                                              column="3"
                                              name="nom_relation_1"
                                          />
                                      </div>

                                      <div class="row">

                                        <x-common.input
                                              label="2. Nominee Name"
                                              column="3"
                                              name="nominee_name_2"
                                          />

                                          <x-common.input
                                              label="Father’s Name"
                                              column="3"
                                              name="nom_fathers_name_2"
                                          />

                                          <x-common.input
                                              label="Mother’s Name"
                                              column="3"
                                              name="nom_mothers_name_2"
                                          />

                                            <x-common.input
                                              label="Address"
                                              column="3"
                                              name="nom_address_2"
                                          />

                                            <x-common.input
                                              label="Age"
                                              column="3"
                                              name="nom_age_2"
                                          />
                                          
                                        <div class="col-xl-3">
                                            <div class="mb-3">
                                                <p class="mb-1">Nominee Photo</p>
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
                                        
                                        <div class="col-xl-3">
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
                                              label="Relation"
                                              column="3"
                                              name="nom_relation_2"
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
                          Introducer Information
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
                                              label="1. Introducer ID"
                                              column="4"
                                              name="introducer_id_1"
                                        />

                                         <x-common.input
                                              label="Account Name"
                                              column="4"
                                              name="intro_account_name_1"
                                        />
                                       
                                        <x-common.select
                                            label="Accounts Type"
                                            column="4"
                                            name="intro_accounts_type_id_1"
                                            :required=true
                                            :value="'Gender'"
                                            :options="[
                                                'business' => 'Business',
                                                'student' => 'Student',
                                                'employee' => 'Employee',
                                            ]"
                                        />
                                    </div>
                                    <div class="row">
                                      <x-common.input
                                              label="2. Introducer ID"
                                              column="4"
                                              name="introducer_id_1"
                                        />

                                         <x-common.input
                                              label="Account Name"
                                              column="4"
                                              name="intro_account_name_2"
                                        />
                                       
                                        <x-common.select
                                            label="Accounts Type"
                                            column="4"
                                            name="intro_accounts_type_id_2"
                                            :required=true
                                            :value="'Gender'"
                                            class="single-select"
                                            :options="[
                                                'business' => 'Business',
                                                'student' => 'Student',
                                                'employee' => 'Employee',
                                            ]"
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
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
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
                                            type="date"
                                            column="3"
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
              </div> --}}