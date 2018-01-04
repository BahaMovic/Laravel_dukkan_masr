<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Specialty;
class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::get();

        return view('admin.pages.doctor.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Specialty::get();
        return view('admin.pages.doctor.add',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $week = "";

        if(isset($request['sat']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }

         if(isset($request['sun']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }


         if(isset($request['mon']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }

         if(isset($request['tue']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }

         if(isset($request['wed']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }
         if(isset($request['thu']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }
         if(isset($request['fri']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }
        Doctor::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'age'=>$request['age'],
            'holidays'=>$week,
            'gender'=>$request['gender'],
            'specialty_id'=>$request['specialty_id']
        ]);

        return redirect('admin/show/doctors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $datas = Specialty::get();
        $data = Doctor::where('id','=',$id)->get()->first();
        return view('admin.pages.doctor.edit',compact('data','datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $week = "";

        if(isset($request['sat']))
        {
            $week .= "1;";
            echo "SAT".$request['sat'];
        }else
        {
            $week .= "0;";
            echo "0";
        }

         if(isset($request['sun']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }


         if(isset($request['mon']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }

         if(isset($request['tue']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }

         if(isset($request['wed']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }
         if(isset($request['thu']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }
         if(isset($request['fri']))
        {
            $week .= "1;";
        }else
        {
            $week .= "0;";
        }
        $data = Doctor::where('id','=',$id)->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'address'=>$request['address'],
            'age'=>$request['age'],
            'holidays'=>$week,

            'specialty_id'=>$request['specialty_id']
        ]);

       return redirect('admin/show/doctors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Doctor::where('id','=',$id)->delete();
       return redirect('admin/show/doctors');
    }
}
