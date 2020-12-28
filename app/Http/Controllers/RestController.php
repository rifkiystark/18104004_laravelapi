<?php

namespace App\Http\Controllers;

use App\PersonModel;
use Illuminate\Http\Request;

class RestController extends Controller
{
    function getAllPerson()
    {
        return response()->json(PersonModel::all(), 200);
    }

    function save(Request $request)
    {
        echo json_encode($request->asd);
    }
    function savePerson(Request $request)
    {
        $newPerson = new PersonModel;
        $newPerson->nik = $request->nik;
        $newPerson->nama = $request->nama;
        $newPerson->alamat = $request->alamat;
        $newPerson->umur = $request->umur;
        $newPerson->save();

        return response([
            'status' => true,
            'message' => "Simpan data person berhasil",
            'data' => $newPerson
        ], 200);
    }

    function updatePerson(Request $request, $id)
    {
        $person = PersonModel::find($id);

        if ($person) {
            $person->nik = $request->nik;
            $person->nama = $request->nama;
            $person->alamat = $request->alamat;
            $person->umur = $request->umur;
            $person->save();
            return response([
                'status' => true, 'message' => "Update data person berhasil",
                'data' => $person
            ], 200);
        } else {
            return response(['status' => false, 'message' => "Id tidak ditemukan", "data" => null], 404);
        }
    }

    function deletePerson($id)
    {
        $person = PersonModel::destroy($id);
        if ($person) {
            return response(['status' => true, 'message' => "Hapus person berhasil", "data" => null], 200);
        } else {
            return response(['status' => false, 'message' => "Id tidak ditemukan", "data" => null], 404);
        }
    }
}
