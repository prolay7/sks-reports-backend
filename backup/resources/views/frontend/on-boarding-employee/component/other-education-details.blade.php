<div class="row">
    <div class="col-lg-12">
        <strong>Other Education</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Course Name</label>
            
        </div>
        
        <input  id="other_course_name" name="other_course_name" type="text" 
            class="form-control round-input" placeholder="Course name" value="@if(isset($other_academic_details)) {{$other_academic_details->course_name}} @else {{old('other_course_name')}}    @endif" />

            <div class="invalid-feedback">
                Please enter course name
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Board/Certification Body</label>
            
        </div>
        
        <input  id="other_board_name" name="other_board_name" type="text" 
            class="form-control round-input" placeholder="Board name" value="@if(isset($other_academic_details)) {{$other_academic_details->board_name}} @else {{old('other_board_name')}}    @endif" />

            <div class="invalid-feedback">
                Please enter Board/Institute name
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Course Duration</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
            <select class="form-control js-example-basic-single" name="other_course_duration" id ="other_course_duration">
                <option value="">Select course duration</option>
                @for($i=1;$i<7;$i++)
                <option value="{{$i}}" @if(isset($other_academic_details)) @if($other_academic_details->course_duration == $i ) selected="selected"  @endif @else @if(old('other_course_duration') == $i ) selected="selected" @endif    @endif >{{$i}} Year</option>  
                @endfor
            </select>

            <div class="invalid-feedback">
                Please select course duration
            </div> 
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Passing Year</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-control js-example-basic-single" name="other_passing_year" id ="other_passing_year">
            <option value="">Select passing year</option>
            @for($i=date('Y') ;$i>1910; $i--)
                <option value="{{$i}}" @if(isset($other_academic_details)) @if($other_academic_details->year_of_passing == $i ) selected="selected"  @endif @else @if(old('other_passing_year') == $i ) selected="selected" @endif    @endif >{{$i}}</option>  
            @endfor
         </select>
            <div class="invalid-feedback">
                Please select passing year
             </div>     

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Total Marks</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="other_total_marks" name="other_total_marks" type="number"  redobly="readonly" 
            class="form-control round-input " placeholder="Total Marks" value="@if(isset($other_academic_details)) {{$other_academic_details->total_marks}} @else {{old('other_total_marks')}}    @endif" />

            <div class="invalid-feedback">
                Please enter total marks
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Marks Obtain</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="other_marks_obtain" name="other_marks_obtain" type="number"  
            class="form-control round-input " placeholder="Other Marks obtain" value="@if(isset($other_academic_details)) {{$other_academic_details->marks_obtain}} @else {{old('other_marks_obtain')}}    @endif" />

            <div class="invalid-feedback">
                Please enter marks obtain
             </div>    

        </div>
    </div>

   

    

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD MARKSHEET</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="other_marksheet" name="other_marksheet" type="file"  onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_other_marksheet">
                @if(isset($other_academic_details))
                    @if($other_academic_details->uploaded_marksheet !='' || $other_academic_details->uploaded_marksheet != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/other_markshett/'.$other_academic_details->uploaded_marksheet) }}" >Previous uploaded marksheet</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please select  marksheet
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD CERTIFICATE</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="other_certificate" name="other_certificate" type="file"  onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_other_certificate">
                @if(isset($other_academic_details))
                    @if($other_academic_details->uploaded_certificate !='' || $other_academic_details->uploaded_certificate != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/other_certificate/'.$other_academic_details->uploaded_certificate) }}" >Previous uploaded certificate</a>
                    @endif
                @endif
            </span>

            <div class="invalid-feedback">
                Please select certificate
             </div>    

        </div>
    </div>


</div>