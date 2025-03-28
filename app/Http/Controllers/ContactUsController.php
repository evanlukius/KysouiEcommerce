<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
        ]);

        // Send email
        Mail::to('your-email@example.com')  // replace with your actual email address
            ->send(new ContactUsMail($validatedData));

        // Return response
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
