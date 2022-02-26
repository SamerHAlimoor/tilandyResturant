<?php

namespace App\Http\Controllers\Controllers;

use App\delivery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DeliverieyController extends Controller
{
    //

    public function store(Request $request)
    {

        //return $request;
         DB::beginTransaction();
         try {
             $delivery = new delivery();
             $delivery->fullName = $request->fullName;
             $delivery->nameofmeal = $request->nameofmeal;
             $delivery->amount = $request->amount;

             $delivery->details = $request->details;
             $delivery->address = $request->address;
             $delivery->dateofmeal = $request->dateofmeal;
             $delivery->phone = $request->phone;
             $delivery->save();
 
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
