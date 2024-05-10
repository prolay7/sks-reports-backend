<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visit_register_followups', function (Blueprint $table) {
            $table->id();
            $table->integer('visit_id');
            $table->date('followup_date');
            $table->enum('status',array('Positive Meeting','Very Interested','Interested But Not Sure','Asked to Visit Again','Not Interested','Next Follow up','Long Time Ph not Received','Appointment Booked','Visited','Re-Visit'));
            $table->longText('remarks')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visit_register_followups');
    }
};
