<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PortalController extends Controller {

    public function getMasterStudents(){
        $data = DB::connection("mysql-portal")
        ->table("mahasiswa")
        ->select(
            'nim', 'nama', 'angkatan', 'prodi', 'dosen_pa'
        )
        ->where('angkatan', '!=', '-')
        ->orderBy('nim', 'desc')->get();

        $response['error'] = false;
        $response['message'] = 'Success';
        $response['total_data'] = count($data);
        $response['data'] = $data;
        return response()->json($response, 200);
    }

}
