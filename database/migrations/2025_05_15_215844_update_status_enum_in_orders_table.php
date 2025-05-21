<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateStatusEnumInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // เพิ่มค่า 'unavailable' ใน ENUM column status
        DB::statement("ALTER TABLE orders MODIFY COLUMN status ENUM('pending', 'success', 'unavailable') DEFAULT 'pending'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                // อัพเดทข้อมูลที่มีค่า 'unavailable' ให้เป็น 'pending' ก่อน
        DB::statement("UPDATE orders SET status = 'pending' WHERE status = 'unavailable'");

        // แก้ไขคอลัมน์กลับไปใช้ค่าเดิม
        DB::statement("ALTER TABLE orders MODIFY COLUMN status ENUM('pending', 'success') DEFAULT 'pending'");
    }
}
