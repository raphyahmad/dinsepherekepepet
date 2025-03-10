<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul situs',
            'value' => 'web sederhana',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'alamat',
            'value' => 'Sleman, Yogyakarta, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_linkedin',
            'label' => 'linkedin',
            'value' => 'https://www.linkedin.com/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_personal_website',
            'label' => 'Personal Website',
            'value' => 'https://www.example.com/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'web sederhana, dengan admin filament, untuk memenuhi tugas paas',
            'type' => 'longtext',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
