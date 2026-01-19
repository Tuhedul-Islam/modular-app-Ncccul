<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('account_opens', function (Blueprint $table) {
            $table->id();
            $table->date('accounts_open_date')->nullable();
            $table->integer('accounts_id')->nullable();  // Making accounts_id unique
            $table->integer('accounts_type_id')->nullable();
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->integer('document_no')->nullable();
            $table->string('document_ref_no')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_name_bn')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->integer('marital_status_id')->nullable();
            $table->string('gender_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nid')->nullable();
            $table->string('birth_certificate_no')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('mobile')->nullable();
            $table->string('alternative_contact_no')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('religion_id')->nullable();
            $table->string('domination_id')->nullable();
            $table->string('church_name_area')->nullable();
            $table->string('church_phone')->nullable();
            $table->string('occupation_type_id')->nullable();
            $table->string('designation')->nullable();
            $table->text('office_name_address')->nullable();
            $table->string('office_phone_no')->nullable();
            $table->string('union_name')->nullable();
            $table->string('union_phone_no')->nullable();
            $table->text('comments_description')->nullable();
            $table->string('union_accounts_no')->nullable();
            $table->string('present_address_hn')->nullable();
            $table->string('present_address_vil')->nullable();
            $table->string('present_address_ps')->nullable();
            $table->string('present_address_pc')->nullable();
            $table->string('present_address_rd')->nullable();
            $table->string('present_address_po')->nullable();
            $table->string('present_address_dist')->nullable();
            $table->string('present_address_hp')->nullable();
            $table->string('permanent_address_hn')->nullable();
            $table->string('permanent_address_vil')->nullable();
            $table->string('permanent_address_ps')->nullable();
            $table->string('permanent_address_pc')->nullable();
            $table->string('permanent_address_rd')->nullable();
            $table->string('permanent_address_po')->nullable();
            $table->string('permanent_address_dist')->nullable();
            $table->string('permanent_address_hp')->nullable();
            $table->string('nominee_name_1')->nullable();
            $table->string('nom_fathers_name_1')->nullable();
            $table->string('nom_mothers_name_1')->nullable();
            $table->text('nom_address_1')->nullable();
            $table->string('nom_age_1')->nullable();
            $table->string('nom_photo_1')->nullable();
            $table->string('nom_nid_1')->nullable();
            $table->string('nom_relation_1')->nullable();
            $table->string('nominee_name_2')->nullable();
            $table->string('nom_fathers_name_2')->nullable();
            $table->string('nom_mothers_name_2')->nullable();
            $table->text('nom_address_2')->nullable();
            $table->string('nom_age_2')->nullable();
            $table->string('nom_photo_2')->nullable();
            $table->string('nom_nid_2')->nullable();
            $table->string('nom_relation_2')->nullable();
            $table->string('introducer_id_1')->nullable();
            $table->string('intro_account_name_1')->nullable();
            $table->integer('intro_accounts_type_id_1')->nullable();
            $table->string('intro_introducer_id_2')->nullable();
            $table->string('intro_account_name_2')->nullable();
            $table->integer('intro_accounts_type_id_2')->nullable();
            $table->text('description')->nullable();
            $table->date('membership_date')->nullable();
            $table->string('checked_by')->nullable();
            $table->date('checked_date')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('approved_date')->nullable();
            $table->text('approver_comments')->nullable();
            $table->integer('document_status')->nullable();
              $table->tinyInteger('status')->default(1)->comment('1=Active, 0=Inactive');
            $table->integer('priority')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_opens');
    }
};
