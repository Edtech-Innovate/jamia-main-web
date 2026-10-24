<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamiaFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamia_forms', function (Blueprint $table) {
            $table->id();
            $table->string('center_code');
            $table->string('pp_image');        
            $table->string('fresh_accredtation',255);
            $table->string('old_center_centercode',255);
            $table->string('old_center',255)->nullable();
            $table->string('postal_address_captital',255);
            $table->string('name_institution',255);
            $table->string('house_bulding_number',255);
            $table->string('road_street',255);
            $table->string('colony_locality',255);
            $table->string('post_office',255);
            $table->string('police_station_form',255);
            $table->string('landmark_form',255);
            $table->string('pincode_form',255);
            $table->string('district_form',255);
            $table->string('state',255);
            $table->string('mobile_form',255);
            $table->string('email_form',255);
            $table->string('name_center_incharge',255);
            $table->string('academic_qualification',255);
            $table->string('level_institution',255);
            $table->string('jamia_student',255);
            $table->string('medium_instution',255);
            $table->string('name_and_address_company',255);
            $table->string('company_register',255);
            $table->string('under_which_act',255);
            $table->string('year_registration',255);
            $table->string('registration_no',255);
            $table->string('name_designation',255);
            $table->string('aligarh',255);
            $table->string('affiliation_school_institution',255);
            $table->string('name_affiliation_body',255);
            $table->string('affiliation_year',255);
            $table->string('duration_affiation',255);
            $table->string('number_room',255);
            $table->string('buliding_institution',255);
            $table->string('institution_school',255);
            $table->string('existence_boundary',255);
            $table->string('institution_electrified',255);
            $table->string('availability_furniture',255);
            $table->string('availability_of_security',255);
            $table->string('availability_invigilator',255);
            $table->string('declaration_date',255);
            $table->string('declaration_place',255);
            $table->string('signature_center_incharge',255);
            $table->string('certificate_endorsement',255);
            $table->string('certificate_endorsement1',255);
            $table->string('endorsement_date',255);
            $table->string('endorsement_signature',255);
            $table->string('affidavit_name',255);                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jamia_forms');
    }
}
