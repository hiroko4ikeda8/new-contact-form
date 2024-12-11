<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('category_id');
                $table->string('first_name', 255); // 名
                $table->string('last_name', 255); // 姓
                $table->tinyInteger('gender')->default(1)->comment('1: 男性, 2: 女性, 3: その他');// 性別
                $table->string('email', 255); // メールアドレス
                $table->string('tel', 255); // 電話番号
                $table->string('address', 255); // 住所
                $table->string('building', 255)->nullable(); // 建物名
                $table->text('detail'); // お問合せ内容
                $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
