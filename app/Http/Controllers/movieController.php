<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\register;
use App\Models\booking;

class movieController extends Controller
{
    public function movie()
    {
        return view('/movie');
    }
    public function register()
    {
        return view('register');
    }
    public function registeraction(Request $req)
    {

        $name = $req->input('name');
        $email = $req->input('email');
        $phneno = $req->input('phneno');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $username = $req->input('username');
        $password = $req->input('password');
        $data = [
            'name' => $name,
            'email' => $email,
            'phneno' => $phneno,
            'gender' => $gender,
            'address' => $address,
            'username' => $username,
            'password' => $password
        ];
        register::insert($data);
        return redirect('/register');
    }
    public function login()
    {
        return view('/login');
    }

    public function loginaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $data = register::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sessid' => $data->id));
            return redirect('/userhome');
        } else {
            return redirect('/booking');
        }
    }

    public function userhome()
    {
        return view('/userhome');
    }

    public function booking()
    {
        return view('/booking');
    }
    public function bookingaction(Request $req)
    {

        $moviename = $req->input('name');
        $date = $req->input('date');
        $time = $req->input('time');
        $theatername = $req->input('tname');
        $seattype = $req->input('seat');
        $noofseat = $req->input('num');
        $id = session('sessid');

        $data = [
            'name' => $moviename,
            'date' => $date,
            'time' => $time,
            'tname' => $theatername,
            'seat' => $seattype,
            'num' => $noofseat,
            'userid' => $id

        ];
        booking::insert($data);
        return redirect('/userhome');
    }

    public function viewbooking()
    {
        $id = session('sessid');
        $data['res'] = booking::where('userid', $id)->get();
        return view('viewbooking', $data);
    }


    public function edit($id)
    {
        $data['reg'] = booking::where('id', $id)->get();
        return view('edit', $data);
    }
    public function updateaction(Request $req, $id)
    {
        $moviename = $req->input('name');
        $date = $req->input('date');
        $time = $req->input('time');
        $theatername = $req->input('tname');
        $seattype = $req->input('seat');
        $noofseat = $req->input('num');


        $data = [
            'name' => $moviename,
            'date' => $date,
            'time' => $time,
            'tname' => $theatername,
            'seat' => $seattype,
            'num' => $noofseat,


        ];
        booking::where('id', $id)->update($data);
        return redirect('/viewbooking');
    }
    public function delete($id)
    {
        booking::where('id', $id)->delete();
        return redirect('/viewbooking');
    }
    public function viewprofile()
    {
        $id = session('sessid');
        $data['res'] = register::where('id', $id)->get();
        return view('viewprofile', $data);
    }
    public function edits($id)
    {
        $data['reg'] = register::where('id', $id)->get();
        return view('edits', $data);
    }
    public function updatesaction(Request $req, $id)
    {

        $name = $req->input('name');
        $email = $req->input('email');
        $phneno = $req->input('phneno');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $username = $req->input('username');
        $password = $req->input('password');
        $data = [
            'name' => $name,
            'email' => $email,
            'phneno' => $phneno,
            'gender' => $gender,
            'address' => $address,
            'username' => $username,
            'password' => $password
        ];
        register::where('id', $id)->update($data);
        return redirect('/viewprofile');
    }
    public function adminhome()
    {
        return view('/adminhome');
    }
    public function adminview()
    {
        $data['res'] = register::get();
        return view('/adminview', $data);
    }
    public function adminviewbooking()
    {
        $data['res'] = booking::get();
        return view('/adminviewbooking', $data);
    }

    public function confirm($id)
    {
        $data = ['status' => "confirm"];
        booking::where('id', $id)->update($data);
        return redirect('/adminviewbooking');
    }
    public function decline($id)
    {
        $data = ['status' => "decline"];
        booking::where('id', $id)->update($data);
        return redirect('/adminviewbooking');
    }
    public function adminlogout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }
    public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }
}
