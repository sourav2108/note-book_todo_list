<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
     public function complet($id)
    {
       $val=Todo::find($id);
       if($val->completed)
       {
           Todo::where('id',$id)->update(['completed'=>false]);
           return redirect()->back()->with('message','Task unmark successful');
       }
       else
       {
            Todo::where('id',$id)->update(['completed'=>true]);
            return redirect()->back()->with('message','Task Mark as Done');
       }
    }
}
