<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancies;
use App\Skill;
class HomeController extends Controller
{
    //
    public function index()
    {
        $data_vacancies = Vacancies::all();
        $data_skills = Skill::all();
        return view('index', [
            'data_vacancies' => $data_vacancies,
            'data_skills' => $data_skills,
            'title' => 'Dashboard | Home',
            'pageTitle' => 'Dashboard',
            'subPageNav' => 'Home',
            'subPageTitle' => 'Dashboard',         
        ]);
    }
}
