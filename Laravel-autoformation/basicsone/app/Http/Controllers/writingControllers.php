<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class writingControllers extends Controller
{
    
  public function showMSG() {
    return 'Basic controller DEMO.'; 
  }

  public function __invoke()
  {
      return 'Invoke function'; 
  }

}
