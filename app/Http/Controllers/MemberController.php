<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // this method will return all the data from members table through API

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
    // this method will add a new member to member table through post API

    function addMember(Request $req)
    {
           $member=new Member();
           $member->name=$req->name;
           $member->email=$req->email;
           $member->password=$req->password;
           $member->blood_group=$req->blood_group;
           $member->age=$req->age;
           $member->address=$req->address;

           $response=$member->save();

           if($response)
           {
               return "Member has added successfully";
           }
           else
           {
            return "Failed";
           }
    }

    /// update 

    function update(Request $req)
    {
       $member=Member::find($req->id);
       $member->name=$req->name;
           $member->email=$req->email;
           $member->password=$req->password;
           $member->blood_group=$req->blood_group;
           $member->age=$req->age;
           $member->address=$req->address;

           $response=$member->save();

           if($response)
           {
               return "Member has added successfully";
           }
           else
           {
            return "Failed";
           }

    }
}
