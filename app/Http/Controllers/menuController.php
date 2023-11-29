<?php

namespace App\Http\Controllers;

use App\Exports\menuExport;
use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\menu;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use function Laravel\Prompts\error;

class menuController extends Controller
{
    public function exportExcelMenu()
    {
        return Excel::download(new menuExport, 'menu' . time() . '.xlsx');
    }

    public function addMenu()
    {
        return view('admin.crud.create_menu', [
            'kategoris' => kategori::all(),
        ]);
    }

    public function storeMenu(Request $request)
    {
        $nama_Menu = "";

        if ($request->gambar) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->gambar->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $nama_Menu = $randomNum . "." . $ekstensi;
            $request->gambar->move("assets/images/menu/", $nama_Menu);
        }

        $validateData = $request->validate([
            "nama" => "required|string|max:50",
            "stok" => "required|integer",
            "harga" => "required|integer",
            "kategori_id" => "required",
        ]);

        menu::create([
            "nama" => $validateData["nama"],
            "stok" => $validateData["stok"],
            "harga" => $validateData["harga"],
            "gambar" => $nama_Menu,
            "kategori_id" => $validateData["kategori_id"],
        ]);
        return redirect()->route('admin.dashboard')->with('Success', 'Data menu berhasil di tambahkan!');
    }

    public function editMenu($id)
    {
        return view('admin.crud.edit_menu', [
            'menu' => menu::all()
                ->where('id', $id)
                ->first(),
            'kategoris' => kategori::all()
        ]);
    }

    public function updateMenu(Request $request, $id)
    {
        $menu = menu::find($id);

        if ($request->gambar) {
            if ($menu->gambar != ''  && $menu->gambar != null) {
                $gambar_old = public_path('assets/images/menu/' . $menu->gambar);
                unlink($gambar_old);
            }

            $path = public_path() . '/assets/images/menu/';
            $file = $request->gambar;
            $filename = $file->getClientOriginalName();
            $request->gambar->move($path, $filename);
        }

        $request->validate([
            "nama" => "required|string|max:50",
            "stok" => "required|integer",
            "harga" => "required|integer",
            "kategori_id" => "required",
        ]);

        $menu = menu::findOrFail($id);
        $menu->update([
            "nama" => $request->nama,
            "stok" => $request->stok,
            "harga" => $request->harga,
            "gambar" => $filename,
            "kategori_id" => $request->kategori_id,
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Data menu Berhasil Diubah');
    }

    public function deleteMenu($id)
    {
        $menu = menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.dashboard')->with(
            'success',
            'Data menu Berhasil Dihapus',
        );
    }

    public function showMenuAdmin($id)
    {
        $menu = menu::findOrFail($id);
        $kategori = kategori::all();
        return view('admin.Menu', ['menu' => $menu, 'kategori' => $kategori]);
    }

    public function showMenuPengguna($id)
    {
        $menu = menu::findOrFail($id);
        $kategori = kategori::all();
        return view('user.menu', ['menu' => $menu, 'kategori' => $kategori]);
    }
}
