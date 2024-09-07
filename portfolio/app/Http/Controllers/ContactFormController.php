<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function sendEmail(Request $request)
    {
        $to = 'eloirdiwi@gmail.com';

        // Retrieve form data
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject', 'Contact Form Submission');
        $contactMessage = $request->input('message');

        // Set the email message body
        $message = "Email from: $name <br />";
        $message .= "Email address: $email <br />";
        $message .= "Message: <br />";
        $message .= nl2br($contactMessage);
        $message .= "<br /> ----- <br /> This email was sent from your site " . url('/') . " contact form. <br />";

        // Email Headers
        $headers = [
            'From' => $name . " <$email>",
            'Reply-To' => $email,
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/html; charset=ISO-8859-1',
        ];

        try {
            // Send the email
            Mail::to($to)->send(new \App\Mail\ContactFormMail($subject, $message, $headers));
            return "OK";
        } catch (\Exception $e) {
            return "Something went wrong. Please try again.";
        }
    }
}
