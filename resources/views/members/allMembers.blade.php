@extends('app')
@section('title', 'Members')
@section('content')
   @if(count($members)>=1)
       <table class="table table-striped bg-light w-75 mx-auto my-5 text-center">
           <thead>
           <tr>
               <th scope="col"></th>
               <th scope="col">Name</th>
               <th scope="col">University</th>
               <th scope="col">Faculty</th>
               <th scope="col">Academic Year</th>
               <th scope="col">First Preference Committee</th>
               <th scope="col">Second Preference Committee</th>
           </tr>
           </thead>
           <tbody>
           @foreach($members as $key=>$member)
               <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                   <th scope="row">{{$key+1}}</th>
                   <td>{{$member->name}}</td>
                   <td>{{$member->university}}</td>
                   <td>{{$member->faculty}}</td>
                   <td>{{$member->academic_year}}</td>
                   <td>{{$member->first_preference_committee}}</td>
                   <td>{{$member->second_preference_committee}}</td>
               </tr>
           @endforeach
           </tbody>
       </table>
   @else
       <h1 class="text-center text-info my-5">There is not any applications</h1>
   @endif
@endsection
