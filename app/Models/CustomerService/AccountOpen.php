<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

// class AccountOpen extends Model
// {
//     use HasFactory;

//     protected $guarded = ['id'];
// }



namespace App\Models\CustomerService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountOpen extends Model
{
    use HasFactory;

    protected $fillable = [
        'accounts_open_date',
        'accounts_id',
        'accounts_type_id',
        'photo',
        'signature',
        'document_no',
        'document_ref_no',
        'acc_name',
        'acc_name_bn',
        'father_name',
        'mother_name',
        'spouse_name',
        'marital_status_id',
        'gender_id',
        'date_of_birth',
        'nationality',
        'nid',
        'birth_certificate_no',
        'blood_group',
        'mobile',
        'alternative_contact_no',
        'fax',
        'email',
        'religion_id',
        'domination_id',
        'church_name_area',
        'church_phone',
        'occupation_type_id',
        'designation',
        'office_name_address',
        'office_phone_no',
        'union_name',
        'union_phone_no',
        'comments_description',
        'union_accounts_no',

        // Present Address
        'present_address_hn',
        'present_address_vil',
        'present_address_ps',
        'present_address_pc',
        'present_address_rd',
        'present_address_po',
        'present_address_dist',
        'present_address_hp',

        // Permanent Address
        'permanent_address_hn',
        'permanent_address_vil',
        'permanent_address_ps',
        'permanent_address_pc',
        'permanent_address_rd',
        'permanent_address_po',
        'permanent_address_dist',
        'permanent_address_hp',

        // Nominee 1
        'nominee_name_1',
        'nom_fathers_name_1',
        'nom_mothers_name_1',
        'nom_address_1',
        'nom_age_1',
        'nom_photo_1',
        'nom_nid_1',
        'nom_relation_1',

        // Nominee 2
        'nominee_name_2',
        'nom_fathers_name_2',
        'nom_mothers_name_2',
        'nom_address_2',
        'nom_age_2',
        'nom_photo_2',
        'nom_nid_2',
        'nom_relation_2',

        // Introducers
        'introducer_id_1',
        'intro_account_name_1',
        'intro_accounts_type_id_1',
        'intro_introducer_id_2',
        'intro_account_name_2',
        'intro_accounts_type_id_2',

        // Others
        'description',
        'membership_date',
        'checked_by',
        'checked_date',
        'approved_by',
        'approved_date',
        'approver_comments',
        'document_status',
        'status',
        'priority',
    ];


}
