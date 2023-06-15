<?php

namespace App\Http\Controllers;

use App\Models\Siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('login');
        }


        $siswa = Siswas::select('id', 'nama', 'kelas', 'jurusan', 'created_at')->get();
        $data = [
            'siswa'=>$siswa
        ];
        return view('siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('login');
        }
   
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()) {
            return redirect('login');
        }


        Siswas::create([
            'nama'=>$request->input('nama'),
            'kelas'=>$request->input('kelas'),
            'jurusan'=>$request->input('jurusan'),
        ]);

        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
       

        $siswa = Siswas::SelectedbyId($id)
            ->first();
        $data = [
            'siswa' => $siswa
        ];

        return view('siswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }

        Siswas::SelectedbyId($id)->update([
            'nama'=>$request->input('nama'),
            'kelas'=>$request->input('kelas'),
            'jurusan'=>$request->input('jurusan')
        ]);


        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }


        Siswas::SelectedById($id)->delete();
        
        return redirect('siswa');
    }
}
