<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessContact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "business_contacts";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        "name" => "",
        "email" => "",
        "phone" => "",
        "url" => "",
        "company" => "",
        "role" => "",
    ];
}
