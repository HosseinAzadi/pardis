<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('category_type');
            $table->text('description');
            $table->integer('parent_id')->default(0)->comment('column:id, table:self');
            $table->integer('creator_id')->comment('column:id, table:users');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('categorizables', function (Blueprint $table) {
            $table->integer('category_id')->comment('column:id, table:categories');
            $table->integer('categorizable_id');
            $table->string('categorizable_type');
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
        Schema::dropIfExists('categorizables');
        Schema::dropIfExists('categories');
    }
}
