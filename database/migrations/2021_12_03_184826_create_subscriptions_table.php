<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('url');
            $table->boolean('is_processed')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('topic')
                ->references('slug')
                ->on('topics')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['topic', 'url'], 'topic_url_pair');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
