<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function index()
    {
        $link = null;
        return view('certificates', ['link' => $link]);
    }
    
    public function show(Request $request)
    {
        $request->validate([
            'code' => 'required|min:8|max:8|alpha_num',
        ],
        [
            'code.required' => 'Error: Please enter the certificate ID!',
            'code.min' => 'Error: The certificate ID is too short!',
            'code.max' => 'Error: The certificate ID is too long!',
            'code.alpha_num' => 'Error: Invalid certificate ID format!',
        ]);
        
        $code_in = $request->input('code');
        $certificate = Certificate::where('code', $code_in)->first();
        if (!$certificate) {
            return back()->withErrors([
                'code' => 'Certificate does not exist.',
                'link' => null
            ]);
        }
        $link = asset('images/certificates/Explaining_Strategy_Certificate_' . $certificate->code . '.jpg');
        
        return view('certificates', ['link' => $link]);
    }
}
