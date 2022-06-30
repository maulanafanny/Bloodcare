<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function createPDF(User $user, PDF $dom)
    {
        // retrieve record from db
        $data = $user->find(Auth::user()->id);

        // share data to view
        view()->share('report', $data);
        view()->share('route', 'download pdf');
        $pdf = $dom->loadView('reportpdf', $data);

        // download PDF file with download method
        return $pdf->download('Hasil Tes Darah.pdf');
    }
}
