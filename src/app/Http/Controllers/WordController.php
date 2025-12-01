<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Writer\HTML;
use Illuminate\Http\Request;

class WordController extends Controller
{
   public function uploadForm()
    {
        return view('upload');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx'
        ]);

        $file = $request->file('file');

        $phpWord = IOFactory::load($file->getPathName());

        // ตั้งค่า HTML writer ให้ support UTF-8
        $writer = new HTML($phpWord);
        $html = $writer->getContent();

        return view('result', compact('html'));
    }
}
