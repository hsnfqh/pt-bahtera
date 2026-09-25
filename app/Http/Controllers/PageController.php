<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Target recipient email address
     */
    protected string $adminEmail = 'bahasmaryo@gmail.com';

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
     * Handle Seafarer Application / Contact Submission with PDF Upload and Real Email Delivery
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

        $refId = 'BAS-'.strtoupper(substr(uniqid(), -6));
        $validated['ref'] = $refId;

        $storedFilePath = null;
        $originalFileName = null;

        // Handle PDF upload
        if ($request->hasFile('pdf_file') && $request->file('pdf_file')->isValid()) {
            $file = $request->file('pdf_file');
            $originalFileName = $file->getClientOriginalName();
            $fileName = $refId . '_' . time() . '.' . $file->getClientOriginalExtension();
            
            // Store file safely in storage/app/berkas_pelaut
            $destinationPath = storage_path('app/berkas_pelaut');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            
            $file->move($destinationPath, $fileName);
            $storedFilePath = $destinationPath . DIRECTORY_SEPARATOR . $fileName;

            $validated['has_file'] = true;
            $validated['original_filename'] = $originalFileName;
        } else {
            $validated['has_file'] = false;
        }

        // Send Real Email Notification to Maryo
        try {
            Mail::to(
                new \Illuminate\Mail\Mailables\Address($this->adminEmail, 'Maryo - PT. Bahtera Anugerah Sentosa')
            )->send(
                new ContactSubmissionMail($validated, $storedFilePath, $originalFileName)
            );
            Log::info("Email pendaftaran pelaut Ref: {$refId} berhasil dikirim ke Maryo ({$this->adminEmail})");
        } catch (\Exception $e) {
            // Log error if SMTP is not yet configured, but continue smoothly for user
            Log::error("Gagal mengirim email pendaftaran pelaut Ref: {$refId} ke {$this->adminEmail}. Error: " . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', [
            'ref' => $refId,
            'name' => $validated['name'],
            'message_id' => 'Terima kasih, '.$validated['name'].'! Pengajuan dan berkas Anda telah berhasil dikirim ke email tim manajemen PT. BAHTERA ANUGERAH SENTOSA ('.$this->adminEmail.').',
            'message_en' => 'Thank you, '.$validated['name'].'! Your application and documents have been successfully forwarded to PT. BAHTERA ANUGERAH SENTOSA management team.',
        ]);
    }
}
