<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\menu;
use App\Models\staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class staffController extends Controller
{
    public function addStaff()
    {
        return view('admin.crud.create_staff', [
            'staff' => staff::all(),
        ]);
    }

    public function storeStaff(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'nama' => 'required|string',
            'jabatan' => 'required|string',
        ]);

        staff::create([
            "username" => $validateData["username"],
            "password" => Hash::make($validateData["password"]),
            "nama" => $validateData["nama"],
            "jabatan" => $validateData["jabatan"],
        ]);

        return redirect()->route('admin.dashboard')->with(
            'success',
            'Data Staff Berhasil Ditambahkan',
        );
    }

    public function deleteStaff($id)
    {
        $staff = staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('admin.dashboard')->with(
            'success',
            'Data Staff Berhasil Dihapus',
        );
    }

    public function cariStaff(Request $request)
	{
		$search = $request->search;

        if($request){
            $staff = staff::where('nama','like',"%".$search."%")->get();
        } else {
            $staff = staff::all();
        }

        return view('admin.dashboard',[
            'staff' => $staff,
            'user' => User::all(),
            'menu' => menu::all(),
            'userCount' => User::count(),
            'menuCount' => menu::count(),
            'staffCount' => staff::count(),
        ]);
	}

}
