<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\queue;

class questionController extends Controller
{
    public function add(Request $request){
        $validate=$request->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'ans'=>'required',
        ]);
        $q=new question();
        $q->question=$request->question;
        $q->a=$request->a;
        $q->b=$request->b;
        $q->c=$request->c;
        $q->d=$request->d;
        $q->ans=$request->ans;
        $q->save();
        Session::put("successfully");
        return redirect( to :'question');
    }
    public function show(){
        $qs=question::all();
        return view('question')->with(['question'=>$qs]);
    }
    public function delete(Request $request){
        ([
        'id' => 'required',
        

    ]);
    question::where('id',$request->id)->delete();
    return redirect( to :'question');
}
public function startquiz()
{
session::put("nextq", '1');
session::put("wrongans", '0');
session::put("correctans", '0');
$q = question::all()->first();
return view('answerDesk')->with(['question'=>$q]);
}
public function submitans(Request $request)
{
    $nextq=$nextq=session::get(key:'nextq');
    $wrongans=$nextq=session::get(key:'wrongans');
    $correctans=$nextq=session::get(key:'correctans');
    $validate=$request->validate([
        'ans'=>'required',
        'dbans'=>'required',
    ]);
    $nextq+=1;
    
    if($request->dbans==$request->ans){
        $correctans+=1;
    }else{
        $wrongans+=1;
    }
    session::put("nextq",$nextq);
    session::put("wrongans",$wrongans);
    session::put("correctans",$correctans);
    $i=0;
    $question=question::all();

    foreach($question as $question){
        $i++;
        if($question->count() < $nextq){
            return view('end');
            
        }if($i==$nextq){
            return view('answerDesk')->with(['question'=>$question]);
            
        }
    }
}
}