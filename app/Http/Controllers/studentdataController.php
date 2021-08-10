<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Validator;

class studentdataController extends Controller
{
     public function index()
    {
        return User::all();
     
    }

    // public function destroy(Request $id)
    // {
    //     $data=User::find($id);
    //     $data->delete();

    //     return response(['message' => 'Deleted']);
    // }
}
