<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact.index')
                ->withErrors($validator)
                ->withInput();
        }

        // Queue email to admin
        try {
            $adminEmail = config('mail.from.address', 'info@nava.com');

            Mail::to($adminEmail)->queue(new ContactFormMail(
                name: $request->name,
                email: $request->email,
                phone: $request->phone,
                subject: $request->subject,
                message: $request->message
            ));
        } catch (\Exception $e) {
            // Log error but don't show to user
            Log::error('Failed to queue contact form email to admin: ' . $e->getMessage());

            // Still show success message to user
        }

        // Queue confirmation email to user
        try {
            Mail::to($request->email)->queue(new ContactConfirmationMail(
                name: $request->name,
                subject: $request->subject,
                message: $request->message
            ));
        } catch (\Exception $e) {
            // Log error but don't show to user
            Log::error('Failed to queue confirmation email to user: ' . $e->getMessage());

            // Still show success message to user
        }

        return redirect()->route('contact.index')
            ->with('success', 'Thank you for contacting us! We will get back to you as soon as possible.');
    }

    /**
     * Test email sending (for development/testing only).
     */
    public function testEmail()
    {
        try {
            $adminEmail = config('mail.from.address', 'info@nava.com');

            // Queue test email
            Mail::to($adminEmail)->queue(new ContactFormMail(
                name: 'Test User',
                email: 'test@example.com',
                phone: '+62 812 3456 7890',
                subject: 'Test Email dari Contact Form',
                message: 'Ini adalah email uji coba dari sistem contact form. Jika Anda menerima email ini, berarti konfigurasi email berhasil!'
            ));

            return response()->json([
                'success' => true,
                'message' => 'Email test berhasil dikirim ke: ' . $adminEmail,
                'timestamp' => now()->format('Y-m-d H:i:s')
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send test email: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim email: ' . $e->getMessage(),
                'error' => $e->getMessage(),
                'timestamp' => now()->format('Y-m-d H:i:s')
            ], 500);
        }
    }
}

