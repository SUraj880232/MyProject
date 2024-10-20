<?php


    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
     
    class LoginController extends Controller
    {
        // Handle the login request
        public function login(Request $request)
        {
            // Validate the form data
            $request->validate([ 
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/import'); // Redirect to intended page
            }
    
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    
        // Handle the logout request
        public function logout(Request $request)
        {
            Auth::logout();
            return redirect('/login'); // Redirect to login page after logout
        }
    }
    