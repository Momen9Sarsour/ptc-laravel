<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('index' , compact('tasks'));
    }

    public function insert(Request $request){
        DB::table('tasks')->insert([
            // 'name' => $_POST['name'], // OBJ ويتم الاتسدعاء عن طريق ال  Request $request عشان الامان نستخدم السطر الي تحت وبالاضافة الى
            'name' => $request->name,
            // 'phone' => '3647436',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->back();   // عشان يعمل تحديث على الصفحة عند الاضافة
    }

    public function delete($id){ // عن طريق الرابط وهيك بنعرف العنصر المحدد للحذف Form المرسل من ال id يتم استقبال
        DB::table('tasks')->where('id' , '=' , $id)->delete();
        return redirect()->back();   // عشان يعمل تحديث على الصفحة عند الاضافة
    }

    public function update ($id) { // عن طريق الرابط وهيك بنعرف العنصر المحدد للتعديل على قيمته Form المرسل من ال id يتم استقبال
        $task = DB::table('tasks')->where('id',$id)->get();
        return view('layout.tasksUpdate', compact('task'));
    }

    public function updateid($id){
        DB::table('tasks') -> where('id',$id)-> update([
            'name' => $_POST['updatedName'],
        ]);
        $tasks = DB::table('tasks')->get();

        return view('index', compact('tasks'));
    }
}
