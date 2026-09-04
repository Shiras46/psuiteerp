<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solutions', function (Blueprint $table) {
            $table->json('statistics')->nullable();
            $table->json('challenges')->nullable();
            $table->json('how_it_works')->nullable();
            $table->json('gallery')->nullable();
            $table->json('industries')->nullable();
            $table->json('demo_cta')->nullable();
            $table->json('contact_cta')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('seo_canonical')->nullable();
            $table->string('seo_og_image')->nullable();
            $table->text('seo_schema')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solutions', function (Blueprint $table) {
            $table->dropColumn([
                'statistics',
                'challenges',
                'how_it_works',
                'gallery',
                'industries',
                'demo_cta',
                'contact_cta',
                'seo_keywords',
                'seo_canonical',
                'seo_og_image',
                'seo_schema',
            ]);
        });
    }
};
