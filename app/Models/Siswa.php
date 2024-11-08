<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Siswa extends Model
{
    use HasFactory;
}
Schema::create('siswas', function (Blueprint $table) {
     $table->id();
     $table->string('nama');
     $table->string('kelas');
     $table->integer('umur');
     $table->timestamps();
     });
