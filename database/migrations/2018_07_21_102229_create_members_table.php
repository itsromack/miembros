<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('church_id', 20)->nullable()->default(null);
            $table->bigInteger('locale_church_id')->nullable()->default(null);
            $table->date('baptised_at')->nullable()->default(null);
            $table->string('nick_name', 50)->nullable()->default(null);
            $table->string('first_name', 50);
            $table->string('middle_name', 30)->nullable()->default(null);
            $table->string('last_name', 30)->nullable()->default(null);
            $table->string('primary_address', 500)->nullable()->default(null);
            $table->string('secondary_address', 500)->nullable()->default(null);
            $table->string('provincial_address', 500)->nullable()->default(null);
            $table->json('contact_numbers')->nullable()->default(null);
            $table->string('civil_status', 20)->nullable()->default('single');
            $table->string('spouse_name', 100)->nullable()->default(null);
            $table->json('education')->nullable()->default(null);
            $table->json('work_background')->nullable()->default(null);
            $table->json('skills')->nullable()->default(null);
            $table->json('ministries')->nullable()->default(null);
            $table->json('relatives_in_church')->nullable()->default(null);
            $table->char('blood_type', 3)->nullable()->default(null);
            $table->string('former_religion', 100)->nullable()->default('roman catholic');
            $table->json('character_references')->nullable()->default(null);
            $table->string('philhealth_number', 30)->nullable()->default(null);
            $table->string('sss_number', 30)->nullable()->default(null);
            $table->boolean('is_active_voter')->default(true);
            $table->string('precint_number', 50)->default(true);
            $table->text('history')->nullable()->default(null);
            $table->text('progress_history')->nullable()->default(null);
            $table->text('medical_history')->nullable()->default(null);
            $table->string('picture', 500)->nullable()->default(null);
            $table->date('born_at')->nullable()->default(null);
            $table->string('active_status_level')->nullable()->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
