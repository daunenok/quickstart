<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;

Route::get('/', function () {
    return view('tasks')->with("tasks", Task::all());
});

Route::post('/', function (Request $request) {
    $task = new Task();
    $task->name = Request::input('name');
    $task->save();
    return redirect("/");
});

Route::post('/task/{id}', function ($id) {
	DB::table('tasks')->where('id', '=', $id)->delete();
    return redirect('/');
});
