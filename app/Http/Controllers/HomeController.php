<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }

    public function contact(){
        return view('pages.contact');
    }


    public function login(){
        return view('pages.login');
    }

    public function employees (){
        //-----------การอ่าน----------------//
//        $employees = DB::table('employees')->get(); //ความหมายคือ select * from employees ทั้งหมด
//        $employees = DB::table('employees')->first(); //ความหมายคือ อ่านข้อมูลแค่ record เดียว
//        $employees = DB::table('employees')->first(['fullname' , 'gender' , 'email']); //ความหมายคือ อ่านข้อมูลแค่บาง field
//        $employees = DB::table('employees')->where('id' , 3)->get(); //ความหมายคือ อ่านข้อมูลแค่ คนที่ 3 คนเดียว
//        $employees = DB::table('employees')->where('id' ,'>=', 2)->get(['id','fullname']);//ความหมายคือ อ่านข้อมูลค่าที่มากกว่า 2 เป็นต้นไป '>=' '<='
//        $employees = DB::table('employees')
//            ->where('id' , 2)
//            ->orwhere('status' , 1)
//            ->first(); //ความหมายคือ อ่านข้อมูลแบบหลายเงื่อนไข
//        $employees = DB::table('employees')->find(1); //ความหมายคือ ค้นหาระบุ
//        $employees = DB::table('employees')->count(); //นับจำนวนในฐานข้อมูล
//        $employees = DB::table('employees')->max('age');//อายุสูงสุด
//        $employees = DB::table('employees')->min('age');//อายุต่ำสุด
//        $employees = DB::table('employees')->avg('age'); //อายุเฉลี่ย
//        $employees = DB::table('employees')->orderByDesc('id')->get();
//        $employees = DB::table('employees')->orderByDesc('id')->get(); //เรียงแบบ Desc มากขึ้นก่อน
//        $employees = DB::table('employees')->orderByDesc('id')->limit(2)->get(); //จำกัดข้อมูล


        //-----------การเพิ่มข้อมูล----------------//
//        $data = array(
//            'fullname' => 'hacksssssss jatuporn',
//            'gender' => 'Male' ,
//            'email' => 'sakdaaaaaa.ja@kpsc.ac.th',
//            'tel' => '0878464418',
//            'age' => 66,
//            'address' => '17/1',
//            'avartar' => 'noavatar.jpg',
//            'status' => 1
//        );
//        $employees = DB::table('employees')->insert($data);

        //-----------การเเก้ไข----------------//
//        $data = array(
//            'fullname' => 'hacksssssss jatuporn',
//            'gender' => 'Male' ,
//            'email' => 'test3333@gmail.com',
//            'tel' => '0987655555',
//            'age' => 64
//        );
//        $employees = DB::table('employees')->where('id' , 4 )->update($data);

        //-----------การลบ----------------//
//        $employees = DB::table('employees')->where('id' , 4 )->delete();



        return $employees;
    }
/*------------------------------------------------------------------------------------------*/


    public function employeelist()
    {
        //อ่านข้อมูลแบบต้องใช้ Model
//        $employees = Employee::all(); //มีความหมาย Select * from employee
//        $employees = Employee::first(['id' , 'fullname']); //มีความหมาย ระบุที่ต้องการ
//        $employees = Employee::where('id' , 3 )->get();//ระบุ id


        //เพิ่ม----------------------------------------------------------------------
//        $data = array(
//            'fullname' => 'ครูศักดิ์ดา jatuporn',
//            'gender' => 'Male' ,
//            'email' => 'sstt.ja@kpsc.ac.th',
//            'tel' => '0878464418',
//            'age' => 66,
//            'address' => '17/1',
//            'avartar' => 'noavatar.jpg',
//            'status' => 1
//        );
//        $employees = Employee::create($data); //วิ่งไปที่ Model
//        return $employees;
//    }


    //แก้ไข----------------------------------------------------------------------
//            $data = array(
//            'fullname' => 'ครูแฮ็คส์ จตุพร',
//            'gender' => 'Male' ,
//            'email' => 'kkkk.ja@kpsc.ac.th',
//            'tel' => '7777777777',
//            'age' => 77
//
//            );
//            $employees = Employee::where('id',6)-> update($data); //วิ่งไปที่ Model
//            return $employees;
//    }

        //ลบ----------------------------------------------------------------------
//        $employees = Employee::where('id',6)-> delete(); //วิ่งไปที่ Model
//        return $employees;
        $employees = Employee::paginate(3);
        return view('pages.employeelist' , compact('employees'));

    }
}
