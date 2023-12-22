<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function generateQRCode()
    {
        $image = QrCode::format('png')
                        ->merge('public/assets/images/logo.png', 0.3, true)
                        ->size(300)
                        ->backgroundColor(255, 255, 255)
                        ->color(0, 0, 0)
                        ->generate('Mettre ici le texte ou l’URL que vous souhaitez encoder');
        
        return response($image)->header('Content-type','image/png');
    }

}
