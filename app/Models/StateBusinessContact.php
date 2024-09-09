<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateBusinessContact extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "state_business_contacts";

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
        "state" => null,
        "contact" => null
    ];
}
