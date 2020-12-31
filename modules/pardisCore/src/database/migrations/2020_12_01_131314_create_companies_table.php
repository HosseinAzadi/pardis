<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);
            $table->string('slug', 256)->nullable();
            $table->string('approved')->default('awaiting_approved');
            $table->integer('approved_by')->default(0);
            $table->string('registration_number')->default(0);
            $table->string('company_nid')->default(0);
            $table->string('company_financial_code')->default(0);
            $table->string('phone', 11)->default(0);
            $table->string('fax', 11)->nullable();
            $table->integer('province_id')->default(0);
            $table->string('city', 128)->nullable();
            $table->string('postal_code', 10)->default(0);
            $table->string('address', 256)->nullable();
            $table->boolean('is_knowledge_base')->default(0);
            $table->string('knowledge_base_type')->nullable();
            $table->boolean('is_member_of_pardis_tech_park')->default(0);
            $table->boolean('is_member_of_pardis_tech_area')->default(0);
            $table->boolean('apply_for_mahamax_membership')->default(0);
            $table->boolean('apply_for_tamadkala_membership')->default(0);
            $table->string('manager', 256)->nullable();
            $table->string('foundation_year', 32)->nullable();
            $table->text('company_introduction')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
