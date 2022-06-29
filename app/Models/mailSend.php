<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mailSend extends Model
{
    use HasFactory;

    protected $table = 'mail_sends';
    protected $guarded = [];
}
