<?php

use App\Models\Announcement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->boolean('isActive')->default(false);
            $table->string('bannerText');
            $table->string('bannerColor');
            $table->string('titleText');
            $table->string('titleColor');
            $table->text('content');
            $table->string('buttonText');
            $table->string('buttonLink');
            $table->string('buttonColor');
            $table->string('imageUpload')->nullable();
            $table->string('imageUploadFilePond')->nullable();
            $table->timestamps();
        });

        Announcement::create([
            'isActive' => true,
            'bannerText' => 'This is the banner text',
            'bannerColor' => '#0000ff',
            'titleText' => 'This is the Title',
            'titleColor' => '#0000ff',
            'content' => 'This is the content',
            'buttonText' => 'Call to Action',
            'buttonLink' => 'https://laracasts.com',
            'buttonColor' => '#0000ff',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
};
