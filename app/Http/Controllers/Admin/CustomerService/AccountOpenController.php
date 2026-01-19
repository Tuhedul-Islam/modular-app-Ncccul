<?php

namespace App\Http\Controllers\Admin\CustomerService;

use App\Http\Controllers\Controller;
use App\Models\Administrative\Gender;
use App\Models\Administrative\MaritalStatus;
use App\Models\CustomerService\AccountOpen;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Throwable;

class AccountOpenController extends Controller
{
    public function index()
    {
        $account_opens = AccountOpen::latest()->get();
        $max_accounts_id = (AccountOpen::max('accounts_id') ?? 0) + 1;
        $maritalStatuses = MaritalStatus::pluck('name', 'id');
        $genders = Gender::pluck('name', 'id');

        return view('admin.customer-services.account-open.index', compact('account_opens', 'maritalStatuses', 'genders', 'max_accounts_id')
        );
    }

     public function list()
     {
         $account_opens = AccountOpen::latest()->get();
         $system_date=date("d-m-Y",time());
         return view('admin.customer-services.account-open.acc_list', compact('account_opens','system_date'));
     }

    public function store(Request $request)
    {
        try {
            $request->validate([
                // Basic Account Info
                'accounts_open_date' => 'required|date',
                'accounts_id'        => 'required|integer',
                'accounts_type_id'   => 'required|integer',

                'photo'              => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'signature'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

                'document_no'        => 'nullable|string|max:100',
                'document_ref_no'    => 'nullable|string|max:100',

                'acc_name'           => 'required|string|max:255',
                'acc_name_bn'        => 'nullable|string|max:255',

                'father_name'        => 'nullable|string|max:255',
                'mother_name'        => 'nullable|string|max:255',
                'spouse_name'        => 'nullable|string|max:255',

                'marital_status_id'  => 'nullable|integer',
                'gender_id'          => 'nullable|integer',

                'date_of_birth'      => 'nullable|date',
                'nationality'        => 'nullable|string|max:100',

                'nid'                => 'nullable|string|max:20',
                'birth_certificate_no'=> 'nullable|string|max:30',

                'blood_group'        => 'nullable|string|max:10',

                'mobile'             => 'required|string|max:20',
                'alternative_contact_no' => 'nullable|string|max:20',

                'fax'                => 'nullable|string|max:50',
                'email'              => 'nullable|email|max:255',

                'religion_id'        => 'nullable|integer',
                'domination_id'      => 'nullable|integer',

                'church_name_area'   => 'nullable|string|max:255',
                'church_phone'       => 'nullable|string|max:20',

                'occupation_type_id' => 'nullable|integer',
                'designation'        => 'nullable|string|max:255',

                'office_name_address'=> 'nullable|string|max:255',
                'office_phone_no'    => 'nullable|string|max:20',

                'union_name'         => 'nullable|string|max:255',
                'union_phone_no'     => 'nullable|string|max:20',

                'comments_description'=> 'nullable|string',
                'union_accounts_no'  => 'nullable|string|max:50',

                // Present Address
                'present_address_hn' => 'nullable|string|max:50',
                'present_address_vil'=> 'nullable|string|max:255',
                'present_address_ps' => 'nullable|string|max:255',
                'present_address_pc' => 'nullable|string|max:20',
                'present_address_rd' => 'nullable|string|max:255',
                'present_address_po' => 'nullable|string|max:255',
                'present_address_dist'=> 'nullable|string|max:255',
                'present_address_hp' => 'nullable|string|max:20',

                // Permanent Address
                'permanent_address_hn' => 'nullable|string|max:50',
                'permanent_address_vil'=> 'nullable|string|max:255',
                'permanent_address_ps' => 'nullable|string|max:255',
                'permanent_address_pc' => 'nullable|string|max:20',
                'permanent_address_rd' => 'nullable|string|max:255',
                'permanent_address_po' => 'nullable|string|max:255',
                'permanent_address_dist'=> 'nullable|string|max:255',
                'permanent_address_hp' => 'nullable|string|max:20',

                // Nominee 1
                'nominee_name_1'     => 'nullable|string|max:255',
                'nom_fathers_name_1' => 'nullable|string|max:255',
                'nom_mothers_name_1' => 'nullable|string|max:255',
                'nom_address_1'      => 'nullable|string',
                'nom_age_1'          => 'nullable|integer',
                'nom_photo_1'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'nom_nid_1'          => 'nullable|string|max:20',
                'nom_relation_1'     => 'nullable|string|max:100',

                // Nominee 2
                'nominee_name_2'     => 'nullable|string|max:255',
                'nom_fathers_name_2' => 'nullable|string|max:255',
                'nom_mothers_name_2' => 'nullable|string|max:255',
                'nom_address_2'      => 'nullable|string',
                'nom_age_2'          => 'nullable|integer',
                'nom_photo_2'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'nom_nid_2'          => 'nullable|string|max:20',
                'nom_relation_2'     => 'nullable|string|max:100',

                // Introducers
                'introducer_id_1'        => 'nullable|integer',
                'intro_account_name_1'  => 'nullable|string|max:255',
                'intro_accounts_type_id_1'=> 'nullable|integer',

                'intro_introducer_id_2' => 'nullable|integer',
                'intro_account_name_2'  => 'nullable|string|max:255',
                'intro_accounts_type_id_2'=> 'nullable|integer',

                // Others
                'description'        => 'nullable|string',
                'membership_date'    => 'nullable|date',

                'checked_by'         => 'nullable|integer',
                'checked_date'       => 'nullable|date',

                'approved_by'        => 'nullable|integer',
                'approved_date'      => 'nullable|date',

                'approver_comments'  => 'nullable|string',

                'document_status'    => 'nullable|integer',

                'status'             => 'required|integer',
                'priority'           => 'required|integer|min:1',
            ]);

            // PHOTO UPLOAD
            if ($request->hasFile('photo')) {
                $data['photo'] = $request->file('photo')->store('account/photos', 'public');
            }

            // SIGNATURE UPLOAD
            if ($request->hasFile('signature')) {
                $data['signature'] = $request->file('signature')->store('account/signatures', 'public');
            }

            AccountOpen::create([
            'accounts_open_date' => $request->accounts_open_date,
            'accounts_id'        => $request->accounts_id,
            'accounts_type_id'   => $request->accounts_type_id,

            // 'photo'              => $data['photo'] ?? null,
            // 'signature'          => $data['signature'] ?? null,

            'document_no'        => $request->document_no,
            'document_ref_no'    => $request->document_ref_no,

            'acc_name'           => $request->acc_name,
            'acc_name_bn'        => $request->acc_name_bn,

            'father_name'        => $request->father_name,
            'mother_name'        => $request->mother_name,
            'spouse_name'        => $request->spouse_name,

            'marital_status_id'  => $request->marital_status_id,
            'gender_id'          => $request->gender_id,

            'date_of_birth'      => $request->date_of_birth,
            'nationality'        => $request->nationality,

            'nid'                => $request->nid,
            'birth_certificate_no'=> $request->birth_certificate_no,
            'blood_group'        => $request->blood_group,

            'mobile'             => $request->mobile,
            'alternative_contact_no' => $request->alternative_contact_no,

            'fax'                => $request->fax,
            'email'              => $request->email,

            'religion_id'        => $request->religion_id,
            'domination_id'      => $request->domination_id,

            'church_name_area'   => $request->church_name_area,
            'church_phone'       => $request->church_phone,

            'occupation_type_id' => $request->occupation_type_id,
            'designation'        => $request->designation,

            'office_name_address'=> $request->office_name_address,
            'office_phone_no'    => $request->office_phone_no,

            'union_name'         => $request->union_name,
            'union_phone_no'     => $request->union_phone_no,

            'comments_description'=> $request->comments_description,
            'union_accounts_no'  => $request->union_accounts_no,

            // Present Address
            'present_address_hn' => $request->present_address_hn,
            'present_address_vil'=> $request->present_address_vil,
            'present_address_ps' => $request->present_address_ps,
            'present_address_pc' => $request->present_address_pc,
            'present_address_rd' => $request->present_address_rd,
            'present_address_po' => $request->present_address_po,
            'present_address_dist'=> $request->present_address_dist,
            'present_address_hp' => $request->present_address_hp,

            // Permanent Address
            'permanent_address_hn' => $request->permanent_address_hn,
            'permanent_address_vil'=> $request->permanent_address_vil,
            'permanent_address_ps' => $request->permanent_address_ps,
            'permanent_address_pc' => $request->permanent_address_pc,
            'permanent_address_rd' => $request->permanent_address_rd,
            'permanent_address_po' => $request->permanent_address_po,
            'permanent_address_dist'=> $request->permanent_address_dist,
            'permanent_address_hp' => $request->permanent_address_hp,

            // Nominee 1
            'nominee_name_1'     => $request->nominee_name_1,
            'nom_fathers_name_1' => $request->nom_fathers_name_1,
            'nom_mothers_name_1' => $request->nom_mothers_name_1,
            'nom_address_1'      => $request->nom_address_1,
            'nom_age_1'          => $request->nom_age_1,
            // 'nom_photo_1'        => $data['nom_photo_1'] ?? null,
            'nom_nid_1'          => $request->nom_nid_1,
            'nom_relation_1'     => $request->nom_relation_1,

            // Nominee 2
            'nominee_name_2'     => $request->nominee_name_2,
            'nom_fathers_name_2' => $request->nom_fathers_name_2,
            'nom_mothers_name_2' => $request->nom_mothers_name_2,
            'nom_address_2'      => $request->nom_address_2,
            'nom_age_2'          => $request->nom_age_2,
            // 'nom_photo_2'        => $data['nom_photo_2'] ?? null,
            'nom_nid_2'          => $request->nom_nid_2,
            'nom_relation_2'     => $request->nom_relation_2,

            // Introducers
            'introducer_id_1'    => $request->introducer_id_1,
            'intro_account_name_1'=> $request->intro_account_name_1,
            'intro_accounts_type_id_1'=> $request->intro_accounts_type_id_1,

            'intro_introducer_id_2'=> $request->intro_introducer_id_2,
            'intro_account_name_2'=> $request->intro_account_name_2,
            'intro_accounts_type_id_2'=> $request->intro_accounts_type_id_2,

            // Others
            'description'        => $request->description,
            'membership_date'    => $request->membership_date,

            'checked_by'         => $request->checked_by,
            'checked_date'       => $request->checked_date,

            'approved_by'        => $request->approved_by,
            'approved_date'      => $request->approved_date,

            'approver_comments'  => $request->approver_comments,
            'document_status'    => $request->document_status,

            // 'status'             => $request->status,
            // 'priority'           => $request->priority,
        ]);

            Toastr::success('Account Open Data Added Successfully');
            return redirect()->back();

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $account_opens = AccountOpen::where('id',$id)->get();
        return view('admin.customer-services.account-open.edit', compact('account_opens', 'id'));
    }

    public function update(Request $request, $id)
    {
        $account_open = AccountOpen::findOrFail($id);

        //dd('ok...');
        try {
            $request->validate([
                'acc_name'     => 'required|string|max:255', //|unique:account_opens,acc_name
                'mobile'   => 'required|string',
                'photo'    => 'nullable|image|max:2048',
                'signature' => 'nullable|image|max:2048',
            ]);


            $data = array_merge(
                $request->except('_token'),
                [
                    'accounts_open_date' => Carbon::parse($request->accounts_open_date)->format('Y-m-d'),
                    'date_of_birth' => Carbon::parse($request->date_of_birth)->format('Y-m-d'),
                ]
            );

            // PHOTO UPLOAD
            if ($request->hasFile('photo')) {
                $data['photo'] = $request->file('photo')->store('account/photos', 'public');
            }

            // SIGNATURE UPLOAD
            if ($request->hasFile('signature')) {
                $data['signature'] = $request->file('signature')->store('account/signatures', 'public');
            }

            $account_open->update($data);

            Toastr::success('Account Updated Successfully');
            return redirect()->route('account-open.list');

        } catch (Throwable $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $account_open = AccountOpen::findOrFail($request->id);
        $account_open->delete();

        return response()->json(['success' => true]);
    }
}
