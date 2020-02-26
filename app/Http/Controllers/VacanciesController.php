<?php

namespace App\Http\Controllers;

use App\Vacancies;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_vacancies = Vacancies::all();
        $data = ['title' => 'Vacancies | Data',
                 'pageTitle' => 'Vacancies',
                 'subPageNav' => 'Data',
                 'subPageTitle' => 'Data Vacancies'];
        return view('vacancies.index', $data, ['data_vacancies' => $data_vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['title' => 'Create Vacancies | Data',
                 'pageTitle' => 'Create Vacancies',
                 'subPageNav' => 'Data',
                 'subPageTitle' => 'Create Data Vacancies'];
        return view('vacancies.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $vacancies = new vacancies;
    //    $vacancies->lokasi = $request->lokasi;
    //    $vacancies->type = $request->type;
    //    $vacancies->durasi = $request->durasi;
    //    $vacancies->rentangGaji = $request->rentangGaji;
    //    $vacancies->requirementSkill = $request->requirementSkill;
    //    $vacancies->save();

    // $vacancies = Vacancies::create([
    //             'lokasi' => $request->lokasi,
    //             'type' => $request->type, 
    //             'durasi' => $request->durasi, 
    //             'rentangGaji' => $request->rentangGaji, 
    //             'requirementSkill' => $request->requirementSkill 
    // ]);
        $request->validate([
            'lokasi' => 'required',
            'type' => 'required',
            'type' => 'required',
            'durasi' => 'required',
            'rentangGaji' => 'required',
            'requirementSkill' => 'required',
        ]);
       Vacancies::create($request->all());
       return redirect('/vacancies')->with('pesan', 'Data Vacancies Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancies $vacancies)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancies $vacancies)
    {
        $data = ['title' => 'Edit Vacancies | Data',
                 'pageTitle' => 'Edit Vacancies',
                 'subPageNav' => 'Data',
                 'subPageTitle' => 'Edit Data Vacancies'];
        return view('vacancies.edit', $data , compact('vacancies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancies $vacancies)
    {
        $request->validate([
            'lokasi' => 'required',
            'type' => 'required',
            'type' => 'required',
            'durasi' => 'required',
            'rentangGaji' => 'required',
            'requirementSkill' => 'required',
        ]);
       Vacancies::where('id', $vacancies->id)
                ->update(['lokasi'=> $request->lokasi,
                          'type' => $request->type,
                          'durasi' => $request->durasi,
                          'rentangGaji' => $request->rentangGaji,
                          'requirementSkill' => $request->requirementSkill
                        ]);
        return redirect('/vacancies')->with('pesan', 'Data Vacancies Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancies $vacancies)
    {
        // $vacancies = Vacancies::find($vacancies);
        // $vacancies->delete();
        Vacancies::destroy($vacancies->id);
        return redirect('/vacancies')->with('pesan', 'Data Vacancies Berhasil Dihapus!');
    }
}
