@extends('app')
@section('title', 'Members')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
            <h1 class="font" style="color:#4d9dc0;font-size: calc(10px + 1.9vw);">{{\Illuminate\Support\Facades\Session::get('success')}}</h1>
            <p class="text-dark" style="font-size: calc(10px + 0.9vw);">Please, Follow your mail to know the date of your interview.</p>
        </div>
    @else
        <form action="{{route('addMember')}}" method="POST" class="felx flex-column w-50 mx-auto my-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Name <span class="text-danger">*</span></label>
                <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="Enter your name"/>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">E-mail <span class="text-danger">*</span></label>
                <input value="{{old('email')}}" type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email address"/>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Phone Number(what'sApp available) <span class="text-danger">*</span></label>
                <input value="{{old('phone')}}" type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"/>
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="university" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">University or School <span class="text-danger">*</span></label>
                <input value="{{old('university')}}" type="text" class="form-control" id="university" name="university" placeholder="Enter your university or school name"/>
                @error('university')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="faculty" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Faculty</label>
                <input value="{{old('faculty')}}" type="text" class="form-control" id="faculty" name="faculty" aria-describedby="emailHelp" placeholder="Enter your faculty name"/>
                @error('faculty')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="department" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Department</label>
                <input value="{{old('department')}}" type="text" class="form-control" id="department" name="department" placeholder="Enter your department name"/>
                @error('department')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="academic_year" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Academic Year <span class="text-danger">*</span></label>
                <input value="{{old('academic_year')}}" type="number" class="form-control" id="academic_year" name="academic_year" aria-describedby="emailHelp" placeholder="Enter your academic year"/>
                @error('academic_year')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="facebook_profile_link" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">facebook profile link <span class="text-danger">*</span></label>
                <input value="{{old('facebook_profile_link')}}" type="url" class="form-control" id="facebook_profile_link" name="facebook_profile_link" placeholder="Enter the link of your facebook profile"/>
                @error('facebook_profile_link')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="living_area" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Living Area <span class="text-danger">*</span></label>
                <input value="{{old('living_area')}}" type="text" class="form-control" id="living_area" name="living_area" placeholder="Enter your living area"/>
                @error('living_area')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="first_question" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">What do you know about Pixels? <span class="text-danger">*</span></label>
                <input value="{{old('first_question')}}" type="text" class="form-control" id="first_question" name="first_question" placeholder="Enter your answer"/>
                @error('first_question')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="first_preference_committee" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">First Preference Committee <span class="text-danger">*</span></label>
                <select value="{{old('first_preference_committee')}}" class="form-control" id="first_preference_committee" name="first_preference_committee">
                    <option value="" style="color:	#B0B0B0;" disabled selected>Select a choice...</option>
                    <option value="IT">IT</option>
                    <option value="PR">PR</option>
                    <option value="FR">FR</option>
                    <option value="MM">Media</option>
                    <option value="AC">AC</option>
                    <option value="GM">Geeky Media</option>
                    <option value="Proj">Projects</option>
                </select>
                @error('first_preference_committee')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3" style="display: none;">
                <label for="second_question" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">Why do you want to join this committee? <span class="text-danger">*</span></label>
                <input value="{{old('second_question')}}" type="text" class="form-control" id="second_question" name="second_question" placeholder="Enter your answer">
                @error('second_question')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3" style="display: none;">
                <label for="first_preference_committee_first_answer" id="first_preference_committee_first_question" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);"></label>
                <input value="{{old('first_preference_committee_first_question')}}" type="text" class="form-control" id="first_preference_committee_first_answer" name="first_preference_committee_first_question" placeholder="Enter your answer">
                @error('first_preference_committee_first_question')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3" style="display: none;">
                <label for="first_preference_committee_second_answer" id="first_preference_committee_second_question" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);"></label>
                <input value="{{old('first_preference_committee_second_question')}}" type="text" class="form-control" id="first_preference_committee_second_answer" name="first_preference_committee_second_question" placeholder="Enter your answer"/>
                @error('first_preference_committee_second_question')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3" style="display: none;">
                <label for="second_preference_committee" class="form-label text-capitalize font-weight-bold" style="color: #4d9dc0; font-size: calc(10px + 0.9vw);">second Preference Committee <span class="text-danger">*</span></label>
                <select value="{{old('second_preference_committee')}}" class="form-control" id="second_preference_committee" name="second_preference_committee">
                    <option value="" style="color:	#B0B0B0;" disabled selected>Select a choice...</option>
                    <option value="IT">IT</option>
                    <option value="PR">PR</option>
                    <option value="FR">FR</option>
                    <option value="MM">Media</option>
                    <option value="AC">AC</option>
                    <option value="GM">Geeky Media</option>
                    <option value="Proj">Projects</option>
                </select>
                @error('second_preference_committee')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-25 py-3 w-100 d-block mx-auto text-center" style="font-size: calc(10px + 0.6vw);">Submit</button>
        </form>
    @endif

    <script>
        const secondQuestion = document.getElementById('second_question');
        const selectInput1 = document.getElementById('first_preference_committee');
        const selectInput2 = document.getElementById('second_preference_committee');
        const firstCommitteeFirstQuestion = document.getElementById('first_preference_committee_first_question');
        const firstCommitteeSecondQuestion = document.getElementById('first_preference_committee_second_question');

        selectInput1.addEventListener('change', function (e) {
            let options = Array.prototype.slice.call( selectInput2.children, 0 );
            for (const option of options ) {
                option.disabled = false;
                option.style = '';
            }
            let option = options.filter((option)=>option.value===e.target.value)[0];
            option.disabled = true;
            option.style = 'color:#C0C0C0;';
            selectInput2.parentElement.style = 'display:block;';
            secondQuestion.parentElement.style = 'display:block;';
            firstCommitteeFirstQuestion.parentElement.style = 'display:block;';
            firstCommitteeSecondQuestion.parentElement.style = 'display:block;';
            switch(e.target.value) {
                case 'IT':
                    firstCommitteeFirstQuestion.innerHTML = `Are you a flexible person? <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `What is your expectation about IT? <span class="text-danger">*</span>`;
                    break;
                case 'PR':
                    firstCommitteeFirstQuestion.innerHTML = `Are you sociable ?! <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `In your opinion, who is the PR person? and what are his skills? <span class="text-danger">*</span>`;
                    break;
                case 'FR':
                    firstCommitteeFirstQuestion.innerHTML = `Are you a flexible person? <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `What do you know about (FR)? <span class="text-danger">*</span>`;
                    break;
                case 'MM':
                    firstCommitteeFirstQuestion.innerHTML = `What are your previous experiences? <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `Did you use any designing/marketing tools? if yes state them. <span class="text-danger">*</span>`;
                    break;
                case 'AC':
                    firstCommitteeFirstQuestion.innerHTML = `Why did you choose Ac committee? <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `What track are you interested in? <span class="text-danger">*</span>`;
                    break;
                case 'GM':
                    firstCommitteeFirstQuestion.innerHTML = `Do you have the creative mindset of video editing? <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `What is your expectation about Geeky media? <span class="text-danger">*</span>`;
                    break;
                case 'Proj':
                    firstCommitteeFirstQuestion.innerHTML = `What field are you most interested in? (choose between: Robotics-mechanics, Robotics-control, Programming ) <span class="text-danger">*</span>`;
                    firstCommitteeSecondQuestion.innerHTML = `What are your technical skills, and what are your previous experiences? <span class="text-danger">*</span>`;
                    break;
            }
        });

    </script>
@endsection
