@extends('app')
@section('title', 'Members')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$member->name}} Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>email:<span>{{$member->email}}</span></p>
                    <p>phone:<span>{{$member->phone}}</span></p>
                    <p>university:<span>{{$member->university}}</span></p>
                    <p>faculty:<span>{{$member->faculty}}</span></p>
                    <p>department:<span>{{$member->department}}</span></p>
                    <p>academic year:<span>{{$member->academic_year}}</span></p>
                    <p>facebook profile link:<a href="{{$member->facebook_profile_link}}">profile</a></p>
                    <p>living area:<span>{{$member->living_area}}</span></p>
                    <p>first question:<span>{{$member->first_question}}</span></p>
                    <p>second question:<span>{{$member->second_question}}</span></p>
                    <p>first preference committee:<span>{{$member->first_preference_committee}}</span></p>
                    <p>first preference committee first question:<span>{{$member->first_preference_committee_first_question}}</span></p>
                    <p>first preference committee second question:<span>{{$member->first_preference_committee_second question}}</span></p>
                    <p>second preference committee:<span>{{$member->second_preference_committee}}</span></p>
                    <p>second preference committee first question:<span>{{$member->second_preference_committee_first_question}}</span></p>
                    <p>second preference committee second question:<span>{{$member->second_preference_committee_second_question}}</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
