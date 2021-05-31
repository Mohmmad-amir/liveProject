<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('imagetwo');
            $table->string('imagethree');
            $table->string('imagefour');
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('price');
            $table->string('network_type');
            $table->string('speed');
            $table->string('edge');
            $table->string('body_dimensions');
            $table->string('body_weight');
            $table->string('build');
            $table->string('network_sim');
            $table->string('display_type');
            $table->string('display_size');
            $table->string('display_resolution');
            $table->string('display_multi_touch');
            $table->string('display_density');
            $table->string('operating_system');
            $table->string('os_version');
            $table->string('cpu');
            $table->string('chip_set');
            $table->string('memory_internal');
            $table->string('memory_external');
            $table->string('ram');
            $table->string('primary_camera');
            $table->string('secondary_camera');
            $table->string('camera_features');
            $table->string('video');
            $table->string('audio');
            $table->string('loudspeaker');
            $table->string('mm_jack');
            $table->string('wifi');
            $table->string('bluetooth');
            $table->string('nfc');
            $table->string('usb');
            $table->string('fm_radio');
            $table->string('gprs');
            $table->string('sensors');
            $table->string('browser');
            $table->string('java');
            $table->string('gps');
            $table->string('battery_type');
            $table->string('battery_capacity');
            $table->string('charging');
            $table->string('launch_date');
            $table->string('made_by');
            $table->string('body_color');
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
        Schema::dropIfExists('products');
    }
}
