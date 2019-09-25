<?php

namespace App\Http\Controllers;

use App\Student;
use App\survey;
use http\Env\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DemoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewFormSurvey(){
        return view("formSurvey");
    }

    public function addSurvey(\Illuminate\Http\Request $request){

        $message = [
            "required" => "không được để trống",
            "min" => "không được nhập số nhỏ hơn 0",
            "unique" => "đã tồn tại giá trị này",
            "max" => "Tối đa 255 ký tự",
            "numeric" => "Phải nhập một số"
        ];
        $ruler = [
            "studentName" => "required|string|",
            "email"  => "required|string|min:0",
            "telephone" => "required|numeric|min:0",
            "feedback" => "string",
        ];

        $this ->validate($request,$ruler,$message);

        try{
            survey::create([
                "studentName"=> $request->get("studentName"),
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone"),
                "feedback" => $request->get("feedback"),
            ])->save();
        }catch (\Exception $e){
             return redirect("/form-survey")->withErrors(["fail"=>$e->getMessage()]);
        }

        return redirect("/form-survey")->with("success"," send successfully");
    }


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
