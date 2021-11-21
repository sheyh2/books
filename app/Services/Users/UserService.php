<?php

namespace App\Services\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserService
{
    private $rules = [
        'name' => 'required'
    ];

    public function validateRequest(Request $request){
        $validator = Validator::make();
    }
}
