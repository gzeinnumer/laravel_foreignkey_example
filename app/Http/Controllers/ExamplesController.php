<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamplesController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from trans_h_data');
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]->detail = DB::select("select * from trans_d_data where id_data='" . $data[$i]->id . ";'");
        }

        // return $data;
        $sent = [
            'data' => $data,
        ];

        return view('example', $sent);
    }
}
