<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Http\Response;

class CompanyCRUDController extends Controller
{
    //Create Index
    public function index() {
        $data['companies'] = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', $data);
    }
                                                                                             
    //Create resource
    public function create(Request $request, Response $response) {
        return view('companies.create');
    }

}
