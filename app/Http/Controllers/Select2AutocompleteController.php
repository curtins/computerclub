<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\membership;
use App\transaction;
use App\attendance;
 

class Select2AutocompleteController extends Controller
{
        /**
        * Show the application layrout.
        *
        * @return \Illuminate\Http\Response
        */
        public function layout()
        {
            return view('select2');
        }

        public function edit()
        {
             
            return view('edit');
        }

            /**
            * Show the application dataAjax.
            *
            * @return \Illuminate\Http\Response
            */
            public function dataAjax(Request $request)
            {
                $data = [];

                //Log::info('This is some useful information.');
                if (!is_numeric($request->q))  {

                // Search By Last Name
                
                    if($request->has('q')){
                        $search = $request->q;
                        $data = DB::table("memberships")
                                ->select("id","last_name","first_name","gvr_number","membership_type")
                                ->where('last_name','LIKE',"$search%")
                                ->orderBy('last_name')
                                ->get();
                        }

                }

                // Search By GVR Number

                if (is_numeric($request->q))  {

                    if($request->has('q')){
                        $search = $request->q;
                        $data = DB::table("memberships")
                                ->select("id","last_name","first_name","gvr_number","membership_type")
                                ->where('gvr_number','LIKE',"$search%")
                                ->orderBy('last_name')
                                ->get();
                        }

                }

                    return response()->json($data);
            }

             



            public function getMember(Request $request)
            {



                //Log::info('getMemberFunction.');

                //if($request->has('id')){

                //Log::info( 'found');

                //$id = $request->input('id');

                $members = membership::find($request->input('id'));

                $attendance1 = membership::find($request->input('id'))->attendance->take(10);

                $attendancecount = membership::find($request->input('id'))->attendance->count();

                $attendancesummary = DB::table("attendances")
                        ->select(DB::raw("year(date_attended) as yr,month(date_attended) as mn,COUNT(*) as count_row"))
                        ->where('membership_id',$request->input('id'))
                        ->groupBy(DB::raw("year(date_attended),month(date_attended)"))
                        ->orderBy(DB::raw("year(date_attended),month(date_attended)"))
                        ->get();


                 //$attendancesummary = Reserve::all()->groupBy('day')->count();







                //$attendance1 = attendance::find($request->input('id'));

                $transaction1 = membership::find($request->input('id'))->transaction;

               //echo attendance::where('membership_id',$request->input('id'));

               //dd($transaction1, $membership1, $attendance1);

               //$yearexpired =  date('Y',strtotime($members->EXPIRE_DATE));
               //$curyear = date('Y');
              


                $expirestatus = (date('Y',strtotime($members->EXPIRE_DATE))) == date('Y') ? true : false;

               
                
               

               //dd($expirestatus);



               // $data = array($members);               
 
               //dd($members);

               $familyprimary1 = membership::where('GVR_NUMBER', $members->PRIMARY_MEMBER)->get();

               
               // Log::info( 'before view');

               //dd($familyprimary);

               //return view('selectall')->with(compact('members'))->with(compact('familyprimary'));

               //dd( $transaction->count());

               //dd($attendance1);

               //dd($attendancecount);

               //dd($attendancecount);
               return view('selectall')->with('members',$members) 
                                       ->with('attendance', $attendance1) 
                                       ->with('attendancecount', $attendancecount) 
                                       ->with('attendancesummary', $attendancesummary) 
                                       ->with('renewalstatus', $expirestatus) 
                                       ->with('memberid', $request->input('id')) 
                                       ->with('familyprimary', $familyprimary1) 
                                       ->with('transaction', $transaction1);



                                       
                
               
               
               //compact('attendance'),compact('$transaction'));

              

               

            
            }

           
} 