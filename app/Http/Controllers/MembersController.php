<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembersController extends Controller
{
    public $roles = [
        'name'                                           =>['required', 'string'],
        'email'                                          =>['required', 'string'],
        'phone'                                          =>['required', 'digits:11'],
        'university'                                     =>['required', 'string'],
        'faculty'                                        =>['required', 'string'],
        'department'                                     =>['required', 'string'],
        'academic_year'                                  =>['required', 'integer'],
        'facebook_profile_link'                          =>['required', 'string'],
        'living_area'                                    =>['required', 'string'],
        'first_question'                                 =>['required', 'string'],
        'second_question'                                =>['required', 'string'],
        'first_preference_committee'                     =>['required', 'string'],
        'first_preference_committee_first_question'      =>['required', 'string'],
        'first_preference_committee_second_question'     =>['required', 'string'],
        'second_preference_committee'                    =>['required', 'string'],
        'second_preference_committee_first_question'     =>['required', 'string'],
        'second_preference_committee_second_question'    =>['required', 'string'],
    ];

    public $messages = [
        'name.required'                                                  =>'Field is required',
        'name.string'                                                    =>'Field must be a string',
        'email.required'                                                 =>'Field is required',
        'email.string'                                                   =>'Field must be a string',
        'phone.required'                                                 =>'Field is required',
        'phone.digits'                                                   =>'Field must be 11 digits',
        'university.required'                                            =>'Field is required',
        'university.string'                                              =>'Field must be a string',
        'faculty.required'                                               =>'Field is required',
        'faculty.string'                                                 =>'Field must be a string',
        'department.required'                                            =>'Field is required',
        'department.string'                                              =>'Field must be a string',
        'academic_year.required'                                         =>'Field is required',
        'academic_year.integer'                                          =>'Field must be an integer',
        'facebook_profile_link.required'                                 =>'Field is required',
        'facebook_profile_link.string'                                   =>'Field must be a string',
        'living_area.required'                                           =>'Field is required',
        'living_area.string'                                             =>'Field must be a string',
        'first_question.required'                                        =>'Field is required',
        'first_question.string'                                          =>'Field must be a string',
        'second_question.required'                                       =>'Field is required',
        'second_question.string'                                         =>'Field must be a string',
        'first_preference_committee.required'                            =>'Field is required',
        'first_preference_committee.string'                              =>'Field must be a string',
        'first_preference_committee_first_question.required'             =>'Field is required',
        'first_preference_committee_first_question.string'               =>'Field must be a string',
        'first_preference_committee_second_question.required'            =>'Field is required',
        'first_preference_committee_second_question.string'              =>'Field must be a string',
        'second_preference_committee.required'                           =>'Field is required',
        'second_preference_committee.string'                             =>'Field must be a string',
        'second_preference_committee_first_question.required'            =>'Field is required',
        'second_preference_committee_first_question.string'              =>'Field must be a string',
        'second_preference_committee_second_question.required'           =>'Field must be a string',
        'second_preference_committee_second_question.string'             =>'Field must be a string',

    ];

    public function showAllMembers() {
        $members = Member::all();
        return view('members.allMembers', ['members'=>$members]);
    }

    public function showAddMemberForm() {
        return view('members.addMemberForm');
    }

    public function addMember(Request $request) {
        $validator = Validator::make($request->all(), $this->roles, $this->messages);
        if($validator->fails()) {
            return redirect('/members/addMemberForm')->withErrors($validator, 'memberErrors');
        }
        $member = Member::create($request->all());
        if($member) {
            return view('success', ['success'=>'Your application has been added successfully']);
        }
    }
}
