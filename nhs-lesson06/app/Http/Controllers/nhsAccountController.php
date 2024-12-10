<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhsAccountController extends Controller
{
    //#form login - get
    public function nhsLogin(){
        return view('nhs-login');
    }

    //#FORM LOGIN - post(Khi đăng nhập)
    /*
        Kiểm tra email, mật khẩu không để trống
        Nếu email = nhs@gmail.com và pass=123456a@ thì lưu thông tin vào session
         với tên ví dự trước
    */
    public function nhsLoginSumit(Request $request)
    {
        // valodation
        $validation = $request->validate([
            'nhsEmail' => 'required|email',
            'nhsPass'  => 'required|min:6'
        ]);
        // check login -> store session -> redirect home
        $nhsEmail = $request->input('nhsEmail');
        $nhsPass  = $request->input('nhsPass');

        $nhsLoginSession = [
            'nhsEmail'=>$nhsEmail,
            'nhsPass' =>$nhsPass
        ];
 
        $nhsjson = json_code($nhsLoginSession);
        if($nhsEmail == "nhs@gmail.com" && $nhsPass=="123456a@")
        {
            // Lưu session
            $request->session()->put('K23CNT4-NguyenHaiSon',$nhsEmail);
            return redirect('/');
        }

        return redirect()->back()->with('nhs-error', 'Lỗi đăng nhập');


    }

}
