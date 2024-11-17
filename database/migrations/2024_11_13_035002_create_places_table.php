<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToPlacesTable extends Migration
{
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->string('place_id')->unique()->after('id');
            $table->text('description')->after('name');
            $table->string('location')->after('description');
            $table->string('district')->after('location');
            $table->unsignedBigInteger('suggested_by')->after('district');
            $table->enum('status', ['accepted', 'rejected', 'pending'])->default('pending')->after('suggested_by');

            $table->foreign('suggested_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->dropForeign(['suggested_by']);
            $table->dropColumn(['place_id', 'description', 'location', 'district', 'suggested_by', 'status']);
        });
    }
}
