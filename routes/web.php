<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dachpord', function () {
    $tasks = DB::table('tasks')->get();

    return view('index' , compact('tasks'));
});

Route::post('insert', function () {
    DB::table('tasks')->insert([
        'name' => $_POST['name'],
        // 'phone' => '3647436',
        'created_at' => now(),
        'updated_at' => now()
    ]);
    return redirect()->back();   // عشان يعمل تحديث على الصفحة عند الاضافة
});

Route::post('delete/{id}', function ($id) {
    DB::table('tasks')->where('id' , $id)->delete();
    return redirect()->back();   // عشان يعمل تحديث على الصفحة عند الاضافة

});

Route::post('update/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->update([
                'name' => $_POST['name']
            ]);
    return redirect()->back();   // عشان يعمل تحديث على الصفحة عند الاضافة
});

Route::get('about', function () {
    $name = 'MOMEN';
    //return view('about', ['name' => $name]);
    // return view('about')->with('name', $name);  // with('var',value)->with('var2',value) لكل متغير تحتاج اضافة
    return view('about', compact('name'));  // compact('var','var2',...) تعتبر افضلهن واسرعهن فقط نضع اسم المتغير ويرسلها مباشرة
});

Route::get('aboutnew', function () {
    $name1 = 'ALI No';
    $name2 = request('name');  // Form هنا ياخذ القيمة من الرابط اي من الجدول المرسل عن طريق
    // return view('aboutnew',['name1' => $name1]);
    // return view('aboutnew')->with('name1',$name1); // with('var',value)->with('var2',value) لكل متغير تحتاج اضافة
    return view('aboutnew', compact('name1','name2')); // compact('var','var2',...) تعتبر افضلهن واسرعهن فقط نضع اسم المتغير ويرسلها مباشرة
});

Route::post('store', function () {
    $name = request('name');  // Form هنا ياخذ القيمة من الرابط اي من الجدول المرسل عن طريق
    return view('aboutnew', compact('name')); // compact('var','var2',...) تعتبر افضلهن واسرعهن فقط نضع اسم المتغير ويرسلها مباشرة
});

// فيديو تمرير المصوفات في لارفل

Route::get('tasks', function () {
    $tasks = ['Task', 'Task 2', 'Task 3'];
    return view('tasks', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    // $tasks = ['Task', 'Task 2', 'Task 3']; // عشان نفس الاسم تعت المصفوفة الثنائية في الفيديو الثاني تم حذفها وتوحيد المصوفة لتكون ثنائية
    // $tasks = [
    //     'first-task'=>'Task',
    //     'second-task'=>'Task 2',
    //     'third-task'=>'Task 3'];
    // $task = $tasks[$id];
    // $tasks = DB::table('tasks')->get();
    $tasks = DB::table('tasks')->where('name' , 'like' , 'task 1%')->get();
    return view('show',compact('task'));
});

// فيديو تمرير المصفوفات الثانئية والتعامل معها في لارفيل

Route::get('tasks', function () {
    // $tasks = [
    //     'first-task'=>'Task',
    //     'second-task'=>'Task 2',
    //     'third-task'=>'Task 3'];
    $tasks = DB::table('tasks')->where('id' , '=>' , 2)->get();
    return view('tasks', compact('tasks'));
});

// rout of front

Route::get('/' , function(){
    return view('layout.front.index');
});

Route::get('about' , function(){
    return view('layout.front.about');
});

Route::get('servece' , function(){
    return view('layout.front.servece');
});

