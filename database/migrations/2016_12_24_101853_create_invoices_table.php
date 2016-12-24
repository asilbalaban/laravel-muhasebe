<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->default(null);
            $table->boolean('is_sale');
            $table->string('invoice_number')->nullable()->default(null);
            $table->integer('invoice_type');
            $table->string('invoice_customer')->nullable()->default(null);
            $table->string('invoice_gsm')->nullable()->default(null);
            $table->text('invoice_address')->nullable()->default(null);
            $table->string('invoice_tax_office')->nullable()->default(null);
            $table->string('invoice_tax_number')->nullable()->default(null);
            $table->string('invoice_customer_identification_number')->nullable()->default(null);
            $table->date('invoice_date');
            $table->date('invoice_pay_date')->nullable()->default(null);
            $table->text('invoice_items')->nullable()->default(null);
            $table->decimal('invoice_total')->nullable()->default(null);
            $table->decimal('invoice_tax')->nullable()->default(null);
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
        Schema::dropIfExists('invoices');
    }
}
