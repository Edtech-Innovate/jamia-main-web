<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('institute_name', 255);
            $table->string('region', 20);
            $table->string('email', 200);
            $table->string('mobile', 20);
            $table->string('country_code');
            $table->string('purpose_of_payment', 100);
            $table->string('txn_id', 200);
            $table->string('gateway_id', 200)->nullable();
            $table->integer('amount');
            $table->longText('response')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
