<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_data', function (Blueprint $table) {
            $table->id();
            $table->integer('catalog_id')->index();
            $table->integer('vendor_code')->index();
            $table->string('name');
            $table->mediumText('description');
            $table->jsonb('options')->index();
            $table->jsonb('tags')->index();
            $table->integer('media');
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
        Schema::dropIfExists('catalog_data');
    }
};
