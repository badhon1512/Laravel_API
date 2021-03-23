<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //

    function getMembers()
    {
          $members=Member::all();

          if($members)
          {
              return $members;
          }
          else
        {
            return "Failed!!";
        }
    }
}
