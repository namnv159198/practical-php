<?php

namespace App\Http\Controllers;

use App\Student;
use http\Env\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DemoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewIndex(){
        $students = Student::paginate(5);
        return view("index",compact("students"));
    }

    public function saveStudent(){
        return view("addStudent");
    }

    public function updateStudent(\Illuminate\Http\Request $request){

        $message = [
            "required" => "không được để trống",
            "min" => "không được nhập số nhỏ hơn 0",
            "unique" => "đã tồn tại giá trị này",
            "max" => "Tối đa 255 ký tự",
            "numeric" => "Phải nhập một số"
        ];
        $ruler = [
            "name" => "required|string|unique:student",
            "age"  => "required|numeric|min:0",
            "address" => "required|string|max:255",
            "telephone" => "required|numeric|min:0",
        ];

        $this ->validate($request,$ruler,$message);

        try{
            Student::create([
                "name"=> $request->get("name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
            ])->save();
        }catch (\Exception $e){
            die($e->getMessage());
        }

        return redirect("/index");
    }
}
