<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    public $status_model = array(
    	0 => 'Menu cha',
    	1 => 'Menu con',
    );
}
