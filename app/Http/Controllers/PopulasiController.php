<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Imports\PopulasiImport;
// use Maatwebsite\Excel\Facades\Excel;

// class PopulasiController extends Controller
// {
//     public function import(Request $request)
//     {
//         $request->validate([
//             'file' => 'required|mimes:xlsx,csv',
//         ]);

//         // Mengimpor data dari file Excel
//         Excel::import(new PopulasiImport, $request->file('file'));

//         return back()->with('success', 'Data populasi berhasil diimpor!');

//         $populasi = Populasi::all();  // Mengambil semua data populasi

    
//         // Kirim data populasi ke view
//         return view('landing', compact('populasi'));
//     }
    
// }
