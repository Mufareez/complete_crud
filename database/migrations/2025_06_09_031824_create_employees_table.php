<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("eid")->unique();
            $table->date("dob");
            $table->string("gender");
            $table->string("nic");
            $table->text("address");
            $table->text("number");
            $table->string("email")->unique();
            $table->date("doj");
            $table->string("department");
            $table->string("role");
            $table->string("type");
            $table->string("branch");
            $table->string("experience");
            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
