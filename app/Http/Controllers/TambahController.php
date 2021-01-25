<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TambahController;

class TambahController extends Controller
{
    public function tambahayam(){
        $ayam = 'Ayam';
        $itik = 'Itik';
        $total =  $ayam . $itik;

        // return $ayam+$itik;
        return view('jomain',[
            'ayam' => $ayam,
            'itik' => $itik,
            'total' => $total,
        ]);
    }
}