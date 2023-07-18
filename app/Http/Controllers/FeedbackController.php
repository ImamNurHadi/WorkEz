<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
    public function feedback_submit(Request $request)
    {
        // Validasi data dari form
        $request->validate([
            'instagram_id' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:200',
        ]);

        // Simpan data feedback ke database
        Feedback::create([
            'instagram_id' => $request->input('instagram_id'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back()->with('success', 'Feedback berhasil disimpan!');
    }
}
