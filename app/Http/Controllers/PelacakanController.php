<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelacakan;

class PelacakanController extends Controller
{
    public function lacak($id)
    {
        $data = Pelacakan::where('nomor_transaksi', $id)->first();
        
        if($data) {
            return response()->json([
                'success' => true, 
                'data' => $data
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan'
        ]);
    }
}
