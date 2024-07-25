<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdf;
use setasign\Fpdi\Fpdi;

class IMGController extends Controller
{
    public function index()
    {   
        $fpdf = new FPDI();
        $fpdf->SetSourceFile('sertifikat.PDF');
        $template = $fpdf->ImportPage('1');
        $size = $fpdf->getTemplateSize($template);
        $fpdf->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdf->useTemplate($template);
        $fpdf->SetFont('Arial', '', 24);
        $top = 93;
        $left = 35;
        $fpdf->SetXY($left, $top);
        $fpdf->MultiCell(230, 20, 'Dr. Muhammad Setya Jenaka S.Pd M.Si', 0, 'C', 0);
        $fpdf->Output();  
        exit;
    }
}
