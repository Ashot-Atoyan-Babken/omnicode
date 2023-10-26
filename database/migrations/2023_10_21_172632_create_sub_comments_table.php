<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_comments', function (Blueprint $table) {
            $table->id();
            $table->string('subcomment');
            $table->unsignedBigInteger('comment_id');
            $table->timestamps();

            $table->index('comment_id', 'comment_id_idx');
            $table->foreign('comment_id', 'comment_id_fk')->on('comments')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_comments');
    }
};
