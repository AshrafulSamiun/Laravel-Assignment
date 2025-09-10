<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        //Auth::loginsingId(3);
        // Validate the request data

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !password_verify($request->password, $user->password)) {
            return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
        Auth::login($user, $request->boolean('remember-me', false));
        $user->load('roles', 'permissions');

        return redirect()->intended('dashboard');

        // $data = [
        //     'user' => $user,
        //     'roles' => $user->roles->pluck('name'),
        //     'permissions' => $user->allPermissions()->pluck('name')

        // ];

        // // Redirect to the intended page or dashboard with data
        // return redirect()->intended('dashboard');
        // return redirect()->intended('dashboard',$data);

        // $request->validate([
        //     /// 'email' => 'required|email|exists:users,email',
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        // // Attempt to log the user in
        // if (auth()->attempt($request->only('email', 'password'))) {
        //     // Redirect to the intended page or dashboard
        //     return redirect()->intended('dashboard');
        // }

    }


    public function logout(Request $request)
    {
        auth()->logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Regenerate the CSRF token
        $request->session()->regenerateToken();
        // Redirect to the login page or home page
        return redirect()->route('home')->with('status', 'You have been logged out successfully.');
        // return redirect()->route('login.show');
        // return redirect()->back();
    }

    public function createRole(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'display_name' => 'required|string|max:255',
            'description' => 'required|string|max:255'

        ]);

        $role = Role::create($data);
        return response()->json(['message' => "Role created successfully", 'data' => $role]);

    }

    public function createPermission(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'display_name' => 'required|string|max:255',
            'description' => 'required|string|max:255'

        ]);

        $permission = Permission::create($data);
        return response()->json(['message' => "Permission created successfully", 'data' => $permission]);

    }

    public function AssignPermissionToRole(Request $request)
    {

        $data = $request->validate([
            'role' => 'required',
            'permission' => 'required'
        ]);

        try {
            $role = Role::where('name', $data['role'])->first();

            $role->givePermission($data['permission']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }


        return response()->json(['message' => "Permission assigned successfully"]);

    }

    public function AssignRoleToUser(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'role' => 'required'
        ]);

        $user = User::where('id', $data['user_id'])->first();
        $user->addRole($data['role']);
        return response()->json(['message' => "Role assigned successfully"]);
    }

}
