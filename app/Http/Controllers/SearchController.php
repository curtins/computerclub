<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\membership;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        //$data = membership::select("last_name as name")->where("last_name","LIKE","%{$request->input('query')}%")->get();

        //var_dump($request);

        $sql = "SELECT memberships.id, memberships.last_name, memberships.first_name, gvr_number FROM memberships 
		 
        WHERE last_name LIKE '%".$request['q']."%'
		LIMIT 10"; 
        $result = $mysqli->query($sql);

        $json = [];
        while($row = $result->fetch_assoc()){
            $json[] = ['id'=>$row['id'], 'text'=>$row['id'] . ' - ' . $row['last_name'] . ', ' . $row['first_name'] . ' - ' . $row['gvr_number']        ];
        }


        return response()->json($json);


        //return response()->json($data);
    }
}