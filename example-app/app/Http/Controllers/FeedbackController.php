<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('feedback.form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);
    
        Feedback::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);
        // поменяйте ашапочта@email.ru' на тот адрес на который хотитте получать форму
        Mail::to('вашапочта@email.ru')->send(new FeedbackMail($request->all()));
    
        return redirect()->route('feedback.thankyou');
    }
    
    
    public function thankYou()
    {
        return view('feedback.thank-you');
    }
    public function list()
    {
        $feedbacks = Feedback::all();
        
        return view('feedback.list', compact('feedbacks'));
    }
}
