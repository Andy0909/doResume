<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{
    public function submitResume(Request $request)
    {
        set_time_limit(300); // 設置為 300 秒
        
        // 驗證用戶輸入
        $validated = $request->validate([
            'name'  => 'required|string|max:4',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'linkedin' => 'nullable|string',
            'github' => 'nullable|string',
            'education' => 'nullable|array',
            'education.*' => 'nullable|string',
            'workExperience' => 'nullable|array',
            'workExperience.*' => 'nullable|string',
            'projects' => 'nullable|array',
            'projects.*' => 'nullable|string',
            'hobbies' => 'nullable|array',
            'hobbies.*' => 'nullable|string',
        ]);

        // 生成 PDF
        $pdf = PDF::loadView('resumeExport', $validated);

        // 返回 PDF 文件給用戶下載
        return $pdf->download('resume.pdf');
    }
}
