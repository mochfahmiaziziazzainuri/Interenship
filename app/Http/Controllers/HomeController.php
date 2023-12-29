<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
    * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = MenuModel::all();
        return view('home',compact('data'));
    }
    public function create(Request $request)
    {
        MenuModel::create($request->all());

        return redirect()->route('indexadmin')->with('pesan', 'Data anda telah ditambah');
    }
    public function edit(MenuModel $idedit)
    {
        $status = ['Aktif', 'Tidak Aktif'];
        return view('editMenu', compact(['idedit', 'status']));

    }
    public function update(Request $request,MenuModel $idedit)
    {
        $idedit->update($request->all());

        // dd($cek);

        return redirect()->route('indexadmin')->with('pesan', 'Data anda telah diubah');
    }   
    public function delete(Request $request,$iddelete)
    {
        $menu_delete = MenuModel::find($request->iddelete);
        
        if ($menu_delete !== null) {
            
            $menu_delete->delete();
            return redirect()->route('indexadmin')->with('success', 'Data anda berhasil dihapus');
        }
    }


    public function about()
    {
        return view('about');
    }
}
