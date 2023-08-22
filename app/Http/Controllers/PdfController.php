<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use setasign\Fpdi\Fpdi;

class PdfController extends Controller
{

    public function pdfView()
    {
        $filePath = public_path("sample2.pdf");
        $imagePath = public_path("user-image.jpg");
        $outputFilePath = public_path("sample_output.pdf");
        $this->fillPDFFile($filePath, $outputFilePath, $imagePath);

        return response()->file($outputFilePath);
    }


    public function fillPDFFile($file, $outputFilePath, $imagePath)
    {
        $fpdi = new FPDI;

        $count = $fpdi->setSourceFile($file);

        for ($i=1; $i<=$count; $i++) {


                $template = $fpdi->importPage($i);
                $size = $fpdi->getTemplateSize($template);
                $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
                $fpdi->useTemplate($template);

                $fpdi->SetFont("helvetica", "", 15);
                $fpdi->SetTextColor(153,0,153);

                $left = 10;
                $top = 10;
                $text = "https://sazzadbinashique.github.io";
                $fpdi->Text($left,$top,$text);

                ($i== 1)?$fpdi->Image($imagePath, 22, 20, '45','40'):'';
        }
        return $fpdi->Output($outputFilePath, 'F');
    }

    public function addImageToPdf(Request $request)
    {
        $pdfFile = $request->file('pdfFile');
        $imageFile = $request->file('imageFile');
        $outputPath = public_path('result.php');//'path/to/output/folder/result.pdf';

        $pdf = new Fpdi();
        $pdf->AddPage();

        $templateId = $pdf->importPage(1);
        $pdf->useTemplate($templateId, 0, 0);

        $image = Image::make($imageFile);
        $pdf->Image('@' . $image->encode('data-url'), 10, 10, 50);

        $pdf->Output($outputPath, 'F');

        return "Image added to PDF successfully!";
    }
}
