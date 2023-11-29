<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Http\Request;
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
}
