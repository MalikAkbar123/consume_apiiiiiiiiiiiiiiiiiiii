<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class StudentController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/students');
        $student = $data->json();

        for ($i=0; $i > count($student); $i++) {
            $student[$i]['image_path'] = env('API_HOST') . 'storage/' . $student[$i]['image'];
        }

        return view ('students.index')->with('students', $student['data']);
    }

    public function create()
    {
        return view('students.create'); 
    }
    public function store(Request $request)
    {

        if($request->file('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $newName = $request->nis.'-'.now()->timestamp.'.'.$extension;
            $request->file('file')->move(public_path('/storage/'), $newName);
         }

        $upload = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'tgl_lahir' => $request->tgl_lahir,
        ];

        $baseapi = new Baseapi;
        $response  = $baseapi->create('api/students/store', $upload);
        return redirect('/students');
    }

    public function show($id){
        $data = (new BaseApi)->detail('/api/students', $id);
        $student = $data->json();
        return view ('students.show')->with('students', $student['data']);
    }

    public function edit($id){
        $data = (new BaseApi)->detail('/api/students', $id);
        $student = $data->json();
        return view ('students.edit')->with('students', $student['data']);
    }

    public function update(Request $request, $id){
        $upload = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'tgl_lahir' => $request->tgl_lahir,
        ];

        $baseapi = new Baseapi;
        $response  = $baseapi->update('/api/students/update',$id, $upload);
        return redirect('/students');
    }

    public function destroy(Request $request, $id){
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/students/delete', $id);
        return redirect ('students');
    }
}
    