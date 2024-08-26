<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage()
    {
        return view("login");
    }
    public function home()
    {
        if (session()->has("id")) {

            return view("home");
        }
        return redirect("/")->with("error", "You are not Loggin!");

    }
    public function dashboard()
    {
        if (session()->has("id")) {
            return view("dashboard");

        }
        return redirect("/")->with("error", "You are not Loggin!");

    }

    public function logout()
    {
        session()->forget("id");
        session()->forget("type");
        return redirect("/");
    }
    public function registerPage()
    {
        return view("register");
    }

    //Registration code
    public function register(Request $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = "user";
        if ($user->save()) {

            return redirect("/")->with("success", "You have Registered Successfully!");
        }
        return redirect("/")->with("error", "You are not Registered !");

    }

    //Loggin code
    public function login(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if ($user) {
            session()->put("id", $user->id);
            session()->put("type", $user->type);
            if ($user->type == "user") {
                return redirect("/home");
            } else if ($user->type == "admin") {
                return redirect("/dashboard");
            } 
        }
        else {
            return redirect("/")->with("error", "You are not Registered!");
        }
    }
}