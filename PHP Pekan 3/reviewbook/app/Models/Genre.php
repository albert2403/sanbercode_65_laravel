<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description'); // wajib diisi, tidak nullable
            $table->timestamps();
        });
    }
}
