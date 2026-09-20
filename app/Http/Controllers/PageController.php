<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the Home Page
     */
    public function home()
    {
        return view('home', [
            'activeNav' => 'home',
        ]);
    }

    /**
     * Display the Our Service Page
     */
    public function services()
    {
        return view('services', [
            'activeNav' => 'services',
        ]);
    }

    /**
     * Display the Our Team & Organization Page
     */
    public function team()
    {
        return view('team', [
            'activeNav' => 'team',
        ]);
    }

    /**
     * Display the Activity Gallery Page
     */
    public function gallery()
    {
        return view('gallery', [
            'activeNav' => 'gallery',
        ]);
    }

    /**
     * Display the Contact Us Page
     */
    public function contact()
    {
        return view('contact', [
            'activeNav' => 'contact',
        ]);
    }

    /**
     * Handle Seafarer Application / Contact Submission with PDF Upload
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'crew_type' => 'required|string',
            'address' => 'required|string|max:500',
            'message' => 'nullable|string|max:2000',
            'pdf_file' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        // In a production app, we would store the PDF and send email notifications.
        // For now, flash a success message with seafarer / inquiry reference ID.
        $refId = 'BKS-'.strtoupper(substr(uniqid(), -6));

        return redirect()->route('contact')->with('success', [
            'ref' => $refId,
            'name' => $validated['name'],
            'message_id' => 'Terima kasih, '.$validated['name'].'! Pengajuan dan data Anda telah berhasil diterima oleh tim PT. BAHTERA KESELAMATAN SENTOSA.',
            'message_en' => 'Thank you, '.$validated['name'].'! Your application and documents have been successfully received by PT. BAHTERA KESELAMATAN SENTOSA crewing team.',
        ]);
    }
}
