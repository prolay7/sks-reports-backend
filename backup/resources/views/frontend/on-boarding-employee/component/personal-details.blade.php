<form action="{{ route('save-personal-details')}}" method="post" enctype="multipart/form-data" class="needs-validation @if ($errors->any()) was-validated @endif" novalidate>
    @csrf
<div class="row">
    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Candidate Name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input style="background-color: #D0D0D0" required="required" id="candidate_name" name="candidate_name" type="text"
              class="form-control round-input " placeholder="Candidate name" readonly="readonly" value="@if(isset($personal_details->candidate_name)){{$personal_details->candidate_name}} @endif" />

              <div class="invalid-feedback">
                  Please enter candidate name .
              </div>
              @if ($errors->has('candidate_name'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('candidate_name') }}
                </div>
            @endif

        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Father's Name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
              <input required="required" id="father_name" name="father_name" type="text"
                class="form-control round-input " placeholder="Father's name" value="@if(isset($personal_details->fathers_name)){{$personal_details->fathers_name}}@else {{ old('father_name') }} @endif" />

                <div class="invalid-feedback">
                    Please enter father's name.
                </div>

                @if ($errors->has('father_name'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('father_name') }}
                </div>
                @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Mother's Name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
              <input required="required" id="mother_name" name="mother_name" type="text"
                class="form-control round-input " placeholder="Mother's name" value="@if(isset($personal_details->mothers_name)){{$personal_details->mothers_name}}@else {{ old('mother_name') }} @endif" />

            <div class="invalid-feedback">
                    Please enter mother's name.
            </div>

            @if ($errors->has('mother_name'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('mother_name') }}
                </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Date of Birth</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
              <input required="required" id="dob" name="dob" type="date"
                class="form-control round-input " placeholder="Date of birth" value="@if(isset($personal_details->candidate_name)){{$personal_details->candidate_name}}@else {{ old('dob') }} @endif" />

            <div class="invalid-feedback">
                    Please enter date of birth.
            </div>

            @if ($errors->has('dob'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('dob') }}
                </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Place of Birth</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
              <input required="required" id="birth_place" name="birth_place" type="text"
                class="form-control round-input " placeholder="Place of birth" value="@if(isset($personal_details->candidate_name)){{$personal_details->candidate_name}}@else {{ old('father_name') }} @endif" />

            <div class="invalid-feedback">
                    Please enter date of birth.
            </div>

            @if ($errors->has('birth_place'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('birth_place') }}
                </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Gender</label>
                  
            </div>
              
            <select class="form-select round-input" id="gender"  name="gender" required="">
                <option value="">Select Gender</option>
                
                <option value="Male" @if(($personal_details->gender == 'Male')) selected="selected" @else @if(old('gender') == 'Male') selected="selected" @endif @endif>Male</option>
                <option value="Female" @if(($personal_details->gender == 'Female')) selected="selected" @else @if(old('gender') == 'Female') selected="selected" @endif @endif>Female</option>
                <option value="Others" @if(($personal_details->gender == 'Others')) selected="selected" @else @if(old('gender') == 'Others') selected="selected" @endif @endif>Others</option>
                
            </select>

            @if ($errors->has('gender'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('gender') }}
                </div>
            @endif
                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Blood Group</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
            <select class="form-select round-input" id="blood_group"  name="blood_group" required="required">
                <option value="">Select Blood Group</option>
                
                <option value="A+" @if(($personal_details->blood_group == 'A+')) selected="selected" @else @if(old('blood_group') == 'A+') selected="selected" @endif @endif>A+</option>
                <option value="A-" @if(($personal_details->blood_group == 'A-')) selected="selected" @else @if(old('blood_group') == 'A-') selected="selected" @endif @endif>A-</option>
                <option value="B+" @if(($personal_details->blood_group == 'B+')) selected="selected" @else @if(old('blood_group') == 'B+') selected="selected" @endif @endif>B+</option>
                <option value="B-" @if(($personal_details->blood_group == 'B-')) selected="selected" @else @if(old('blood_group') == 'B-') selected="selected" @endif @endif>B-</option>
                <option value="AB+"@if(($personal_details->blood_group == 'AB+')) selected="selected" @else @if(old('blood_group') == 'AB+') selected="selected" @endif @endif>AB+</option>
                <option value="AB-"@if(($personal_details->blood_group == 'AB-')) selected="selected" @else @if(old('blood_group') == 'AB-') selected="selected" @endif @endif>AB-</option>
                <option value="O+" @if(($personal_details->blood_group == 'O+')) selected="selected" @else @if(old('blood_group') == 'O+') selected="selected" @endif @endif>O+</option>
                <option value="O-" @if(($personal_details->blood_group == 'O-')) selected="selected" @else @if(old('blood_group') == 'O-') selected="selected" @endif @endif>O-</option>
                
            </select>

            <div class="invalid-feedback">
                    Please select blood group.
            </div>

            @if ($errors->has('blood_group'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('blood_group') }}
                </div>
            @endif
                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Maritial Status</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
            <select class="form-select round-input" id="martial_status"  name="martial_status" required="required">
                <option value="">Select Martial Status</option>
                
                <option value="Married" @if(($personal_details->martial_status == 'Married')) selected="selected" @else @if(old('martial_status') == 'Married') selected="selected" @endif @endif>Married</option>
                <option value="Not Married" @if(($personal_details->martial_status == 'Not Married')) selected="selected" @else @if(old('martial_status') == 'Not Married') selected="selected" @endif @endif>Not Married</option>
                <option value="Separation" @if(($personal_details->martial_status == 'Separation')) selected="selected" @else @if(old('martial_status') == 'Separation') selected="selected" @endif @endif>Separation</option>
                
                
            </select>

            <div class="invalid-feedback">
                    Please select martial status
            </div>

            @if ($errors->has('martial_status'))
                                
                <div class="invalid-feedback"  >
                    {{ $errors->first('martial_status') }}
                </div>
            @endif
                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Spouce Name</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
              <input  id="spouce_name" name="spouce_name" type="text"
                class="form-control round-input " placeholder="Spouce Name" value="@if(isset($personal_details->candidate_name)){{$personal_details->candidate_name}}@else {{ old('father_name') }} @endif" />

                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Nationality</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
            <select class="form-select round-input" id="nationality"  name="nationality" required="required">
                
                
                <option value="Indian" selected>Indian</option>
                
            </select>

            <div class="invalid-feedback">
                    Please select nationality
            </div>
                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Religion</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
            <select class="form-select round-input" id="religion"  name="religion" required="required">
                <option value="">Religion</option>
                
                <option value="Hinduism" @if(($personal_details->religion == 'Hinduism')) selected="selected" @else @if(old('religion') == 'Hinduism') selected="selected" @endif @endif>Hinduism</option>
                <option value="Islam" @if(($personal_details->religion == 'Islam')) selected="selected" @else @if(old('religion') == 'Islam') selected="selected" @endif @endif>Islam</option>
                <option value="Christianity" @if(($personal_details->religion == 'Christianity')) selected="selected" @else @if(old('religion') == 'Christianity') selected="selected" @endif @endif>Christianity</option>
                <option value="Sikhism" @if(($personal_details->religion == 'Sikhism')) selected="selected" @else @if(old('religion') == 'Sikhism') selected="selected" @endif @endif>Sikhism</option>
                <option value="Buddhism" @if(($personal_details->religion == 'Buddhism')) selected="selected" @else @if(old('religion') == 'Buddhism') selected="selected" @endif @endif>Buddhism</option>
                <option value="Jains" @if(($personal_details->religion == 'Jains')) selected="selected" @else @if(old('religion') == 'Jains') selected="selected" @endif @endif>Jains</option>
                
            </select>

            <div class="invalid-feedback">
                    Please select nationality
            </div>

            @if ($errors->has('religion'))
                                
                <div class="invalid-feedback">
                    {{ $errors->first('religion') }}
                </div>
            @endif
                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                  <label for="forl-label">Cast</label>
                  <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
              
            <select class="form-select round-input" id="cast"  name="cast" required="required">
                <option value="">Cast</option>
                
                <option value="General" @if(($personal_details->cast == 'General')) selected="selected" @else @if(old('cast') == 'General') selected="selected" @endif @endif>General</option>
                <option value="OBC-A" @if(($personal_details->cast == 'OBC-A')) selected="selected" @else @if(old('cast') == 'OBC-A') selected="selected" @endif @endif>OBC-A</option>
                <option value="OBC-B" @if(($personal_details->cast == 'OBC-B')) selected="selected" @else @if(old('cast') == 'OBC-B') selected="selected" @endif @endif>OBC-B</option>
                <option value="SC" @if(($personal_details->cast == 'SC')) selected="selected" @else @if(old('cast') == 'SC') selected="selected" @endif @endif>SC</option>
                <option value="ST" @if(($personal_details->cast == 'ST')) selected="selected" @else @if(old('cast') == 'ST') selected="selected" @endif @endif>ST</option>
                
                
            </select>

            <div class="invalid-feedback">
                    Please select nationality
            </div>

            @if ($errors->has('cast'))
                                
                <div class="invalid-feedback">
                    {{ $errors->first('cast') }}
                </div>
            @endif
                

        </div>
    </div>
    <div class="col-lg-12">
        <strong>
                Present Address
        </strong>
    </div>

</div>
<div class="row">    
    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">House no./Flat no./Building name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="house_name" name="house_name" type="text" required="required"
                class="form-control round-input " placeholder="House no./Flat no./Building name" value="@if(isset($personal_details->present_house_no)){{$personal_details->house_name}}@else {{ old('house_name') }} @endif" />

                <div class="invalid-feedback">
                   Enter House no/Flat no/Building name
                </div> 
                
                @if ($errors->has('house_name'))
                                
                <div class="invalid-feedback">
                    {{ $errors->first('house_name') }}
                </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Street name/Locality Name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="locality_name" name="locality_name" type="text" required="required"
                class="form-control round-input " placeholder="Street name/Locality Name" value="@if(isset($personal_details->present_locality_name)){{$personal_details->present_locality_name}}@else {{ old('locality_name') }} @endif" />

            <div class="invalid-feedback">
                Enter street name /Locality name
            </div> 
            
            @if ($errors->has('locality_name'))
                                
                <div class="invalid-feedback">
                    {{ $errors->first('locality_name') }}
                </div>
            @endif

        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Post Office</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="post_office" name="post_office" type="text" required="required"
                class="form-control round-input " placeholder="Post office" value="@if(isset($personal_details->present_post_office)){{$personal_details->present_post_office}}@else {{ old('post_office') }} @endif" />

                <div class="invalid-feedback">
                    Enter post office name
                 </div> 
                 
                 @if ($errors->has('post_office'))
                                
                    <div class="invalid-feedback">
                        {{ $errors->first('post_office') }}
                    </div>
                    @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Nearest Land Mark</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="nearest_land_mrk" name="nearest_land_mrk" type="text" required="required"
                class="form-control round-input " placeholder="Nearest land mark" value="@if(isset($personal_details->present_land_mark)){{$personal_details->present_land_mark}}@else {{ old('nearest_land_mrk') }} @endif" />

                <div class="invalid-feedback">
                    Enter nearest land mark
                 </div> 
                 
                 @if ($errors->has('nearest_land_mrk'))
                                
                 <div class="invalid-feedback">
                     {{ $errors->first('nearest_land_mrk') }}
                 </div>
                 @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">State</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <select class="form-select round-input" id="state_id"  name="state" required="required" onchange="getDistrict()">
                    <option value="">select state</option>
                    @foreach($state_list as $statel)
                    <option value="{{$statel->State}}" @if(($personal_details->present_state == $statel->State)) selected="selected" @else @if(old('state') == $statel->State) selected="selected" @endif @endif>{{$statel->State}}</option>
                    @endforeach
            </select> 
            
            <div class="invalid-feedback">
               Please select state
             </div>

             @if ($errors->has('state'))
                                
                 <div class="invalid-feedback">
                     {{ $errors->first('state') }}
                 </div>
                 @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">District</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <select class="form-select round-input" id="district_id"  name="district" required="required">
                <option value="">select district</option>

                @if(isset($personal_details->present_district))

                    @php($distict_present = DB::table('districts')->where('State',$personal_details->present_state)->get())
                    @foreach($distict_present as $diss)
                        <option value="{{$diss->District}}" @if($personal_details->present_district==$diss->District) selected="selected" @endif>{{$diss->District}}</option>
                    @endforeach               

                @elseif(old('district'))

                    @php($distict_old = DB::table('districts')->where('State',old('state'))->get())
                    @foreach($distict_old as $diss)
                        <option value="{{$diss->District}}" @if(old('district')==$diss->District) selected="selected" @endif>{{$diss->District}}</option>
                    @endforeach

                @endif
            </select> 
            
            <div class="invalid-feedback">
               Please select district
             </div>
             @if ($errors->has('district'))
                                
             <div class="invalid-feedback">
                 {{ $errors->first('district') }}
             </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Town</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="town" name="town" type="text" required="required"
                class="form-control round-input " placeholder="Enter City or Town name" value="@if(isset($personal_details->present_city)){{$personal_details->present_city}}@else {{ old('town') }} @endif" />

                <div class="invalid-feedback">
                    Please enter city/Town
                 </div> 
                 
                 @if ($errors->has('town'))
                                
                 <div class="invalid-feedback">
                     {{ $errors->first('town') }}
                 </div>
                 @endif

        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Pincode</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="pincode" name="pincode" type="number" required="required"
                class="form-control round-input " placeholder="Enter pincode" value="@if(isset($personal_details->present_pincode)){{$personal_details->present_pincode}}@else {{ old('pincode') }} @endif" />

                <div class="invalid-feedback">
                    Please enter pincode
                 </div>  
                 
                 @if ($errors->has('pincode'))
                                
                 <div class="invalid-feedback">
                     {{ $errors->first('pincode') }}
                 </div>
                 @endif


        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Police Station</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="police_station" name="police_station" type="town" required="required"
                class="form-control round-input " placeholder="Enter police station" value="@if(isset($personal_details->present_policestation)){{$personal_details->present_policestation}}@else {{ old('police_station') }} @endif" />

                <div class="invalid-feedback">
                    Please enter police station
                 </div> 
                 
                 @if ($errors->has('police_station'))
                                
                 <div class="invalid-feedback">
                     {{ $errors->first('police_station') }}
                 </div>
                 @endif

        </div>
    </div>

    <div class="col-lg-12">
        <strong>
            Permanent Address
        </strong>
    </div>

    <div class="col-lg-12">
        <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="same_as_present">
                <label class="form-check-label" for="flexCheckDefault">
                 Same as Present Address
                </label>
        </div>
    </div>

</div>

<div class="row">
    
    <div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">House no./Flat no./Building name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
        
            <input  id="permanent_house_name" name="permanent_house_name" type="text" required="required"
            class="form-control round-input " placeholder="House no./Flat no./Building name" value="@if(isset($personal_details->permanent_house_no)){{$personal_details->permanent_house_no}}@else {{ old('permanent_house_name') }} @endif" />

            <div class="invalid-feedback">
               Enter House no/Flat no/Building name
            </div> 
            
            @if ($errors->has('permanent_house_name'))
                                
                 <div class="invalid-feedback">
                     {{ $errors->first('permanent_house_name') }}
                 </div>
            @endif


        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Street name/Locality Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="permanent_locality_name" name="permanent_locality_name" type="text" required="required"
            class="form-control round-input " placeholder="Street name/Locality Name" value="@if(isset($personal_details->permanent_locality_name)){{$personal_details->permanent_locality_name}}@else {{ old('permanent_locality_name') }} @endif" />

            <div class="invalid-feedback">
                Enter street name /Locality name
             </div> 
             
             @if ($errors->has('permanent_locality_name'))
                                
             <div class="invalid-feedback">
                 {{ $errors->first('permanent_locality_name') }}
             </div>
            @endif

        </div>
    </div>

    
    


    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Post Office</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="permanent_post_office" name="permanent_post_office" type="text" required="required"
            class="form-control round-input " placeholder="Post office" value="@if(isset($personal_details->permanent_post_office)){{$personal_details->permanent_post_office}}@else {{ old('permanent_post_office') }} @endif" />

            <div class="invalid-feedback">
                Enter post office name
             </div> 
             
             @if ($errors->has('permanent_post_office'))
                                
             <div class="invalid-feedback">
                 {{ $errors->first('permanent_post_office') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Nearest Land Mark</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="permanent_nearest_land_mrk" name="permanent_nearest_land_mrk" type="text" required="required"
            class="form-control round-input " placeholder="Nearest Land mark" value="@if(isset($personal_details->permanent_land_mark)){{$personal_details->permanent_land_mark}}@else {{ old('permanent_nearest_land_mrk') }} @endif" />

            <div class="invalid-feedback">
                Enter nearest land mark
             </div>   
             
             @if ($errors->has('permanent_nearest_land_mrk'))
                                
             <div class="invalid-feedback">
                 {{ $errors->first('permanent_nearest_land_mrk') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">State</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-select round-input" id="permanent_state"  name="permanent_state" required="required" onchange="getPermanentDistrict()">
            <option value="">select state</option>
                @foreach($state_list as $statel)
                <option value="{{$statel->State}}" @if(($personal_details->permanent_state == $statel->State)) selected="selected" @else @if(old('permanent_state') == $statel->State) selected="selected" @endif @endif>{{$statel->State}}</option>
                @endforeach
        </select> 
        
        <div class="invalid-feedback">
           Please select state
         </div>

            @if ($errors->has('permanent_state'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('permanent_state') }}
                </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">District</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-select round-input" id="permanent_district"  name="permanent_district" required="required">
            <option value="">select district</option>

                @if(isset($personal_details->permanent_district))

                    @php($distict_permanent = DB::table('districts')->where('State',$personal_details->permanent_state)->get())
                    @foreach($distict_permanent as $diss)
                        <option value="{{$diss->District}}" @if($personal_details->permanent_district==$diss->District) selected="selected" @endif>{{$diss->District}}</option>
                    @endforeach               

                @elseif(old('permanent_district'))

                    @php($distict_permanent_old = DB::table('districts')->where('State',old('permanent_state'))->get())
                    @foreach($distict_permanent_old as $diss)
                        <option value="{{$diss->District}}" @if(old('permanent_district')==$diss->District) selected="selected" @endif>{{$diss->District}}</option>
                    @endforeach

                @endif
        </select> 
        
        <div class="invalid-feedback">
           Please select district
         </div>

         @if ($errors->has('permanent_district'))
                                    
         <div class="invalid-feedback">
             {{ $errors->first('permanent_district') }}
         </div>
         @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Town</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="permanent_town" name="permanent_town" type="text" required="required"
            class="form-control round-input " placeholder="Enter City or Town name" value="@if(isset($personal_details->permanent_city)){{$personal_details->permanent_city}}@else {{ old('permanent_town') }} @endif" />

            <div class="invalid-feedback">
                Please enter city/Town
             </div>  
             
             @if ($errors->has('permanent_town'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('permanent_town') }}
                </div>
             @endif

        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Pincode</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="permanent_pincode" name="permanent_pincode" type="number" required="required"
            class="form-control round-input " placeholder="Enter pincode" value="@if(isset($personal_details->permanent_pincode)){{$personal_details->permanent_pincode}}@else {{ old('permanent_pincode') }} @endif" />

            <div class="invalid-feedback">
                Please enter pincode
             </div> 
             
             @if ($errors->has('permanent_pincode'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('permanent_pincode') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Police Station</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="permanent_police_station" name="permanent_police_station" type="text" required="required"
            class="form-control round-input " placeholder="Enter police station" value="@if(isset($personal_details->permanent_policestation)){{$personal_details->permanent_policestation}}@else {{ old('permanent_police_station') }} @endif" />

            <div class="invalid-feedback">
                Please enter Police Station
             </div>  
             
             @if ($errors->has('permanent_police_station'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('permanent_police_station') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">PAN Number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="pan_number" name="pan_number" type="text" required="required"
            class="form-control round-input " placeholder="PAN card number" value="@if(isset($personal_details->pan_number)){{$personal_details->pan_number}}@else {{ old('pan_number') }} @endif" />

            <div class="invalid-feedback">
                Please enter PAN Number
             </div> 
             
             @if ($errors->has('pan_number'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('pan_number') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">AADHAAR Number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="aadhaar" name="aadhaar" type="number" required="required"
            class="form-control round-input " placeholder="AADHAAR card Number" value="@if(isset($personal_details->adhaar_number)){{$personal_details->adhaar_number}}@else {{ old('aadhaar') }} @endif" />

            <div class="invalid-feedback">
                Please enter AADHAAR Number
             </div> 
             
             @if ($errors->has('aadhaar'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('aadhaar') }}
             </div>
            @endif

        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Mobile Number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input style="background-color: #D0D0D0"  id="mobile" name="mobile" type="text" required="required"
            class="form-control round-input " placeholder="10 digit mobile number" readonly="readonly" value="@if(isset($personal_details->mobile_number)){{$personal_details->mobile_number}} @endif" />

            <div class="invalid-feedback">
                Please enter 10 digit Mobile number
             </div>
             
             @if ($errors->has('mobile'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('mobile') }}
             </div>
            @endif

        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">E-mail</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input style="background-color: #D0D0D0"  id="email" name="email" type="email" required="required"
            class="form-control round-input " placeholder="Email address" readonly="readonly" value="@if(isset($personal_details->email_id)){{$personal_details->email_id}} @endif" />

            <div class="invalid-feedback">
                Please enter Email Address
             </div> 
             @if ($errors->has('email'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('email') }}
             </div>
            @endif
             

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Emergency Contact number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="emergency" name="emergency" type="number" required="required"
            class="form-control round-input " placeholder="Emergency contact number" value="@if(isset($personal_details->emergency_contact)){{$personal_details->emergency_contact}}@else {{ old('emergency') }} @endif" />
           
            <div class="invalid-feedback">
                Please enter Emergency contact number
             </div> 
             
             @if ($errors->has('emergency'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('emergency') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Parent's/Spouce Mobile Number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="spouce_number" name="spouce_number" type="number" required="required"
            class="form-control round-input " placeholder="Parent's/Spouce mobile number" value="@if(isset($personal_details->parent_spouce_contact)){{$personal_details->parent_spouce_contact}}@else {{ old('spouce_number') }} @endif" />

            <div class="invalid-feedback">
                Please enter Emergency contact number
             </div> 
             
             @if ($errors->has('spouce_number'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('spouce_number') }}
             </div>
            @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Reference person Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="reference_person" name="reference_person" type="text" required="required"
            class="form-control round-input " placeholder="Reference person name" value="@if(isset($personal_details->reference_person_name)){{$personal_details->reference_person_name}}@else {{ old('reference_person') }} @endif" />

            <div class="invalid-feedback">
                Please enter Reference Name
             </div>    
             @if ($errors->has('reference_person'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('reference_person') }}
             </div>
            @endif
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Reference Contact Number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="reference_contact_number" name="reference_contact_number" type="number" required="required"
            class="form-control round-input " placeholder="Reference person contact number" value="@if(isset($personal_details->reference_contact_no)){{$personal_details->reference_contact_no}}@else {{ old('reference_contact_number') }} @endif" />

            <div class="invalid-feedback">
                Please enter Reference Contact number
             </div>    
             @if ($errors->has('reference_contact_number'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('reference_contact_number') }}
             </div>
            @endif
        </div>
    </div>

    <div class="col-lg-12">
        <strong>
            Uploads Documents
        </strong><span style="color:#ea5c39;">(FILE SIZE 100KB, FILE FORMAT JPEG, PNG)</span>
    </div>

   

    
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD PAN CARD</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="upload_pan_card" name="upload_pan_card" type="file" @if(empty($personal_details->uploaded_pan_card)) required="required" @endif onchange="uploadFiles(this.id)"
            class="form-control round-input "/>
            <span class="text-primary" id="previous_upload_pan_card">
            @if($personal_details->uploaded_pan_card !='' || $personal_details->uploaded_pan_card != null )
                <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/personal_Details/pan_card/'.$personal_details->uploaded_pan_card) }}" >Previous uploaded PAN card</a>
            @endif

            </span>
            
            <div class="invalid-feedback">
                Please upload pan card
            </div>    
            
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD AADHAAR CARD</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="upload_adhaar_card" name="upload_adhaar_card" type="file" @if(empty($personal_details->uploaded_adhaar_card)) required="required" @endif onchange="uploadFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_adhaar_card">
                @if($personal_details->uploaded_adhaar_card !='' || $personal_details->uploaded_adhaar_card != null )
                    <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/personal_details/adhar_card/'.$personal_details->uploaded_adhaar_card) }}" >Previous uploaded ADHAAR card</a>
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload adhaar card
            </div> 
            
            

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD PHOTO</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>

        
        <input  id="upload_photo" name="upload_photo" type="file" @if(empty($personal_details->uploaded_photo)) required="required" @endif onchange="uploadFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_photo">
                @if($personal_details->uploaded_photo !='' || $personal_details->uploaded_photo != null )
                    <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/personal_details/photo/'.$personal_details->uploaded_photo) }}" >Previous uploaded photo</a>
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload your photo
            </div> 
            
           

        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <center>
            @if(empty($personal_details_step))
                <div class="form-group  pb-sm">
                    <div class="text-danger asterik text-end mb-0 pb-0 d-mobileNone "></div>
                    <button type="submit" class="btn btn-primary menu menu-big "
                    id="lead_callregister"> Save & Next </button>
                </div>
            @else           
                
                    <div class="form-group  pb-sm">
                        <div class="text-danger asterik text-end mb-0 pb-0 d-mobileNone "></div>
                        <button type="button" class="btn btn-primary menu menu-big "
                        id="lead_callregister"><a href="{{route('education-details')}}" style="text-decoration: none !important;color:white;">Next Step </a></button>
                    </div>
                
            @endif
        </center>
    </div>
  </div>
</form>

<script>
    function getDistrict(){
	   var state_name = $("#state_id").val();
  
	   //e.preventDefault();
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
	   
		$.ajax({
		  url: "{{ route('get-district-list') }}",
		  type: 'POST',
		  data: {
			state_name: $("#state_id").val(),
			
		   },
		 success: function(result){
		   
		  
  
		   if(result.success == 1){
			
			$("#district_id").html(result.data);
  
		   }else{
			
			$("#district_id").html(result.data);
			
  
		   }
  
		   
  
		 }});
	   
	}
    function getPermanentDistrict(){
	   var state_name = $("#permanent_state").val();
  
	   //e.preventDefault();
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
	   
		$.ajax({
		  url: "{{ route('get-district-list') }}",
		  type: 'POST',
		  data: {
			state_name: $("#permanent_state").val(),
			
		   },
		 success: function(result){
		   
		  
  
		   if(result.success == 1){
			
			$("#permanent_district").html(result.data);
  
		   }else{
			
			$("#permanent_district").html(result.data);
			
  
		   }
  
		   
  
		 }});
	   
	}

    function uploadFiles(id){
	   //var fileid = $(this).val();

       
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        if(id == 'upload_pan_card'){

            var filety = 'pan_card';
            var ff = 'PAN Card';
        }else if(id == 'upload_adhaar_card'){
            var filety = 'adhar_card';
            var ff = 'ADHAAR Card';

        }else if(id == 'upload_photo'){
            var filety = 'photo';

            var ff = 'Photo';

        }
       
  
	   // Get the selected file
       var files = $('#'+id)[0].files;

                if(files.length > 0){
                    var fd = new FormData();

                    // Append data 
                    fd.append('file',files[0]);
                    fd.append('_token',CSRF_TOKEN);
                    fd.append('filetype',filety);

                    // Hide alert 
                    $('#responseMsg').hide();

                    // AJAX request 
                    $.ajax({
                        url: "{{ route('uploadFile') }}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response){
                            
                            if(response.success == 1){


                                toastr.success(ff+" has been uploaded successfully", "Success", {
                                    positionClass: "toast-top-right",
                                    timeOut: 5e3,
                                    closeButton: !0,
                                    debug: !1,
                                    newestOnTop: !0,
                                    progressBar: !0,
                                    preventDuplicates: !0,
                                    onclick: null,
                                    showDuration: "300",
                                    hideDuration: "1000",
                                    extendedTimeOut: "1000",
                                    showEasing: "swing",
                                    hideEasing: "linear",
                                    showMethod: "fadeIn",
                                    hideMethod: "fadeOut",
                                    tapToDismiss: !1
                                })

                                $("#previous_"+id).html('<a style="text-decoration: none !important;" target="_blank" href="'+response.filepath+'">Previous uploaded '+ff+' </a>');

                            }else{

                                toastr.error(response.message, "Error!", {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })

                            $("#previous_"+id).html();
                            $('#'+id).val('');


                            }
                       },
                        error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                        }
                    });
                }else{
                    alert("Please select a file.");
                }

	   
	}

    
</script>