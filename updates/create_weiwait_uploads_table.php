<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeiwaitUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('weiwait_uploads')) {
            Schema::create('weiwait_uploads', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->comment('文件');
                $table->string('disk')->nullable()->comment('磁盘');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weiwait_uploads');
    }
}
