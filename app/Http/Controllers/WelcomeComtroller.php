<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeComtroller extends Controller
{
    public function hello() {
        return 'Hello world';
    }

    public function greeting(){
        return view('blog.hello') ->with('name','Nahdia')
        ->with('occupation','Astronaut');
        }
       }
       
