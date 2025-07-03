<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    public function getContactInfo()
    {
        return $this->all();
    }

    public function storeContact($data)
    {
        return $this->create($data);
    }
}
