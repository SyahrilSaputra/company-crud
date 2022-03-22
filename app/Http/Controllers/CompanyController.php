<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $data = [
            'company' => Company::all(),
        ];
        return view('index', $data);
    }
    public function addCompany()
    {
        return view('add');
    }
    public function save(Request $request)
    {
        $company = $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);
        Company::create($company);
        return redirect(route('index.company'));
    }
    public function edit(Company $company)
    {
        $data = [
            'company' => $company,
        ];
        return view('edit', $data);
    }
    public function update(Company $company, Request $request)
    {
        $comp = $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);
        Company::where('id', $company->id)->update($comp);
        return redirect(route('index.company'));
    }
    public function delete($id)
    {
        Company::where('id', $id)->delete();
        return redirect(route('index.company'));
    }
}
