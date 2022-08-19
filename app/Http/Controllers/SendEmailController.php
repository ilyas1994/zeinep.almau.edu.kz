<?php

namespace App\Http\Controllers;

use App\Mail\SendMSG;
use App\Models\Data;
use App\Models\MainPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'number' => 'required|numeric'
        ]);

        $email = $request->input('email');
        $number = $request->input('number');
        $checkBox = $request->input('checkBox');
        if ($checkBox != null)
            $checkBox = 'Да';
            else $checkBox = 'Нет';



        try {
            Data::create([
                'email' => $email,
                'number' => $number,
                'campus' => $checkBox
            ]);
            Mail::to($email)->send(new SendMSG($email, $number, $checkBox));
            Mail::to('zeinepcollege@almau.edu.kz')->send(new SendMSG('zeinepcollege@almau.edu.kz', $number, $checkBox));
            DB::commit();

            return redirect()->back()->with('success', 'success');
        } catch (\Exception $exception) {
            DB::rollBack();
//            abort(404);
            dd($exception);
        }






    }
}
