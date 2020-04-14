<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Contrack extends Model
{
    public function username(){
    	
    	$user = User::find($this->user_id);

    	return $user;
    }
}
