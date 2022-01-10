<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Illuminate\Http\Request;
use Dflydev\DotAccessData\Data;
use App\Http\Controllers\Controller;

class StatistikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Datas::all();
        return view(
            'statistika.index',
            compact('datas'),
            [
                'title' => 'Semua data'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Data'
        ];
        return view('statistika.tambahData', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Datas::create(['skor' => $request->skor]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Datas::find($id);
        return view('statistika.editData', [
            'title' => 'Edit Data',
            'data' => $data

        ]);
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
        $data = Datas::find($id);
        $data->skor = $request->skor;
        $data->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Datas::find($id);
        $data->delete($data);
        return back();
    }

    public function dataBergolong()
    {
        $data = Datas::getBergolongTable();
        $rentangan = Datas::getRentangan();
        $kelas = Datas::getKelas();
        $interval = Datas::getInterval();
        return view('statistika.dataBergolong', [
            'title' => 'Data Bergolong',
            'r' => $rentangan,
            'k' => $kelas,
            'i' => $interval,
            'bergolongTabel' => $data
        ]);
    }
}
