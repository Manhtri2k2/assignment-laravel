<?php


namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function signup()
    {
        return view('users.signup');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::signup($data);
        echo "success signup";


        $this->validate($request,
            [
                'indentityNumber' => 'required|min:10',
                'firstName' => 'required',
                'lastName' => 'required',
                'phone' => 'required',
            ],

            [
                'required' => ':required',
            ],

        );

    }

}
