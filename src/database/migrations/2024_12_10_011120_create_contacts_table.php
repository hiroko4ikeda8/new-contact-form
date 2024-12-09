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
                $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // 外部キー
                $table->string('first_name', 255); // 名
                $table->string('last_name', 255); // 姓
                $table->tinyInteger('gender'); // 性別
                $table->string('email', 255); // メールアドレス
                $table->string('tel', 255); // 電話番号
                $table->string('address', 255); // 住所
                $table->string('building', 255)->nullable(); // 建物名
                $table->text('detail'); // お問合せ内容
                $table->timestamps(); // created_at, updated_at
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
