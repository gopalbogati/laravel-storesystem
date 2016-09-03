<?php

namespace App\Modules\Auth\Http\Controllers {

    //use App\Modules\Auth\Models\auth;
    use Illuminate\Support\Facades\Auth;
    use Validator;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Input;
    use App\Modules\Users\Models\User;
    use Illuminate\Support\Facades\Session;


    class AuthController extends Controller
    {

        public function checkSignin(Request $requests)
        {
            if (Auth::attempt(['email' => $requests['email'], 'password' => $requests['password']])) {
                // return redirect('dashboard');
                Session::flash('success', 'Welcome to Admin Dashboard');
                return redirect()->route('admin::dashboard');
            } else
                return redirect()->back();
        }

        public function storeSignup(Request $requests)
        {
            //   code for validation of field with table name
            $validator = Validator::make($requests->all(), [
                'email' => 'required|unique:users|max:255',
                'name' => 'required',
                'password' => 'required|min:4',
            ]);
            if ($validator->fails()) {
                return redirect()->route('users::signup')
                    ->withErrors($validator)
                    ->withInput();
            } else {
            }
            $email = $requests['email'];
            $name = $requests['name'];
            $password = bcrypt($requests['password']);//for encrypt  password

            $user = new User();
            $user->email = $email;
            $user->name = $name;
            $user->password = $password;

            if ($user->save()) {
                Session::flash('success', 'You have successfully signup ');
                return view('admin::dashboard.adminlogin');
                Auth::login($user);
            }


        }

        public function getLogout()
        {
            /*auth()->logout();
            return view('users::users.group.userlogin');
            Session::flush();*/
        }


    }


}