<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiStepFormController extends Controller
{
    // Step 1 - Informasi Pribadi
    public function showStep1()
    {
        return view('multistep.step1', [
            'step' => 1,
            'progress' => 0
        ]);
    }

    public function storeStep1(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:200',
        ]);

        // Simpan data ke session
        session(['step1_data' => $validated]);

        return redirect()->route('multistep.step2');
    }

    // Step 2 - Informasi Pendidikan
    public function showStep2()
    {
        if (!session('step1_data')) {
            return redirect()->route('multistep.step1');
        }

        return view('multistep.step2', [
            'step' => 2,
            'progress' => 33
        ]);
    }

    public function storeStep2(Request $request)
    {
        $validated = $request->validate([
            'education' => 'required|string|max:50',
            'institution' => 'required|string|max:100',
            'graduation_year' => 'required|integer|min:1900|max:' . date('Y'),
            'major' => 'required|string|max:100',
        ]);

        session(['step2_data' => $validated]);

        return redirect()->route('multistep.step3');
    }

    // Step 3 - Pengalaman Kerja
    public function showStep3()
    {
        if (!session('step1_data') || !session('step2_data')) {
            return redirect()->route('multistep.step1');
        }

        return view('multistep.step3', [
            'step' => 3,
            'progress' => 66
        ]);
    }

    public function storeStep3(Request $request)
    {
        $validated = $request->validate([
            'current_job' => 'nullable|string|max:100',
            'company' => 'nullable|string|max:100',
            'experience_years' => 'required|integer|min:0|max:50',
            'skills' => 'required|string|max:200',
        ]);

        session(['step3_data' => $validated]);

        return redirect()->route('multistep.summary');
    }

    // Summary - Ringkasan Data
    public function showSummary()
    {
        $step1Data = session('step1_data');
        $step2Data = session('step2_data');
        $step3Data = session('step3_data');

        if (!$step1Data || !$step2Data || !$step3Data) {
            return redirect()->route('multistep.step1');
        }

        return view('multistep.summary', [
            'step' => 4,
            'progress' => 100,
            'step1Data' => $step1Data,
            'step2Data' => $step2Data,
            'step3Data' => $step3Data
        ]);
    }

    // Complete - Proses Final
    public function complete(Request $request)
    {
        // Di sini Anda bisa menyimpan data ke database
        // Untuk demo, kita hanya akan menampilkan pesan sukses

        $allData = [
            'personal' => session('step1_data'),
            'education' => session('step2_data'),
            'experience' => session('step3_data')
        ];

        // Hapus session data
        $request->session()->forget(['step1_data', 'step2_data', 'step3_data']);

        return view('multistep.complete', [
            'data' => $allData
        ]);
    }
}
