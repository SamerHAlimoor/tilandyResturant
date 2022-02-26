<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Inquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiriyController extends Controller
{
    //
    public function store(Request $request)
    {

       // return $request;
        DB::beginTransaction();
        try {
            $Inquiry = new Inquiries();
            $Inquiry->fullName = $request->fullName;
            $Inquiry->inquiry = $request->inquiry;
            $Inquiry->phone = $request->phone;
            $Inquiry->save();

            DB::commit(); 
            toastr()->success('تم إضافة طلبك بنجاح');

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->error('فشلت العملية الاضافة');

            return redirect()->back();
        }
       
    }
}
