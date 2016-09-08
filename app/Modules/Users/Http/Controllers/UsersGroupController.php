<?php


namespace App\Modules\Users\Http\Controllers {

    use App\Http\Controllers\Controller;
    use App\Modules\Admin\Models\Role;
    use Illuminate\Http\Request;
    use App\Modules\Users\Models\User;
    use Auth;
    use Illuminate\Contracts\Validation\Validator;

    class UsersGroupController extends Controller
    {

        public function SignUp()
        {


            return view('users::users.group.signup');
        }


        public function signin()
        {

            return view('users::users.group.userlogin');
        }


        public function dashboard()
        {
            return view('users::users.group.dashboard');

        }

    }

}

