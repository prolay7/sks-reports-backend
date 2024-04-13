<div class="row">
    <div class="col-lg-12">
        <strong>Higher Education Details(Under Graduate)</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">University Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-control js-example-basic-single" name="under_graduate_board" id ="under_graduate_board" required="required">
            <option value="">Select university name</option>
            @foreach($university_list as $boards)
                <option value="{{$boards->id}}" @if(isset($ug_academic_details)) @if($ug_academic_details->board_name == $boards->id ) selected="selected"  @endif @else @if(old('under_graduate_board') == $boards->id ) selected="selected" @endif    @endif >{{$boards->University}}</option>  
            @endforeach
         </select>
            <div class="invalid-feedback">
                Please select university/board name
             </div>  
             
             @if ($errors->has('under_graduate_board'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_board') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Passing Year</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-control js-example-basic-single" name="under_graduate_passing_year" id ="under_graduate_passing_year" required="required">
            <option value="">Select passing year</option>
            @for($i=date('Y') ;$i>1910; $i--)
                <option value="{{$i}}" @if(isset($ug_academic_details)) @if($ug_academic_details->year_of_passing == $i ) selected="selected"  @endif @else @if(old('under_graduate_passing_year') == $i ) selected="selected" @endif    @endif >{{$i}}</option>  
            @endfor
         </select>
            <div class="invalid-feedback">
                Please enter passing year
             </div>   
             
             @if ($errors->has('under_graduate_passing_year'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_passing_year') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Total Marks</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="h_total_marks" name="under_graduate_total_marks" type="number" required="required" onblur="get_higher_percentage()"
            class="form-control round-input " placeholder="Total Marks" value="@if(isset($ug_academic_details)) {{$ug_academic_details->total_marks}} @else {{old('under_graduate_total_marks')}}    @endif" />

            <div class="invalid-feedback">
                Please enter total marks
             </div>   
             
             @if ($errors->has('under_graduate_total_marks'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_total_marks') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Marks obtain</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="h_marks_ontain" name="under_graduate_marks_obtain" type="number" required="required" onblur="get_higher_percentage()"
            class="form-control round-input " placeholder="Marks obtain" value="@if(isset($ug_academic_details)) {{$ug_academic_details->marks_obtain}} @else {{old('under_graduate_marks_obtain')}}    @endif" />

            <div class="invalid-feedback">
                Please enter marks obtain
             </div> 
             
             @if ($errors->has('under_graduate_marks_obtain'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_marks_obtain') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Percentage</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="h_percentage" name="under_graduate_percentage" type="text"  redobly="readonly" required="required"
            class="form-control round-input " placeholder="Percentage" value="@if(isset($ug_academic_details)) {{$ug_academic_details->percentage}} @else {{old('under_graduate_percentage')}}    @endif" />

            <div class="invalid-feedback">
                Please enter percentage
             </div>
             
             @if ($errors->has('under_graduate_percentage'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_percentage') }}
                </div>
             @endif

        </div>
    </div>

    

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Course</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-control js-example-basic-single" name="under_graduate_course" id ="course_name" required="required">
            <option value="">Select course name</option>
            @foreach($course_list as $course)
                <option value="{{$course->id}}"  @if(isset($ug_academic_details)) @if($ug_academic_details->course_name == $course->id) selected="selected"  @endif @else @if(old('under_graduate_course') == $course->id ) selected="selected" @endif    @endif >{{$course->course}}</option>  
            @endforeach
         </select>
        

            <div class="invalid-feedback">
                Please select course name
             </div> 
             
             
             @if ($errors->has('under_graduate_course'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_course') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Major Subject</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="reg_no" name="under_graduate_major_subject" type="text" required="required"
            class="form-control round-input " placeholder="Please type your major subject" value="@if(isset($ug_academic_details)) {{$ug_academic_details->major_subject}} @else {{old('under_graduate_major_subject')}}    @endif" />

            <div class="invalid-feedback">
                Please type your major subject
             </div>
             
             @if ($errors->has('under_graduate_major_subject'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_major_subject') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Course Duration</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
            <select class="form-control js-example-basic-single" name="under_graduate_course_duration" id ="course_name" required="required">
                <option value="">Select course duration</option>
                @for($i=1;$i<7;$i++)
                <option value="{{$i}}" @if(isset($ug_academic_details)) @if($ug_academic_details->course_duration == $i ) selected="selected"  @endif @else @if(old('under_graduate_course_duration') == $i ) selected="selected" @endif    @endif >{{$i}} Year</option>  
                @endfor
            </select>

            <div class="invalid-feedback">
                Please select course duration
             </div>
             
             @if ($errors->has('under_graduate_course_duration'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('under_graduate_course_duration') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD REGISTRATION</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="higher_reg_no" name="higher_reg_no" type="file" @if(isset($ug_academic_details)) @if(empty($ug_academic_details->uploaded_registration)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_higher_reg_no">
                @if(isset($ug_academic_details))
                    @if($ug_academic_details->uploaded_registration !='' || $ug_academic_details->uploaded_registration != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/higher_reg_no/'.$ug_academic_details->uploaded_registration) }}" >Previous uploaded under graduate Registration certificate</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please select registration certificate
             </div>  
             
             
             @if ($errors->has('higher_reg_no'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('higher_reg_no') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD MARKSHEET</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="higher_markshett" name="higher_markshett" type="file" @if(isset($ug_academic_details)) @if(empty($ug_academic_details->uploaded_marksheet)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />

            <span class="text-primary" id="previous_upload_higher_markshett">
                @if(isset($ug_academic_details))
                    @if($ug_academic_details->uploaded_marksheet !='' || $ug_academic_details->uploaded_marksheet != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/higher_markshett/'.$ug_academic_details->uploaded_marksheet) }}" >Previous uploaded under graduate marksheet</a>
                    @endif
                @endif
            </span>

            <div class="invalid-feedback">
                Please select marksheet
             </div> 
             
             
             @if ($errors->has('higher_markshett'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('higher_markshett') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD CERTIFICATE</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="higher_certificate" name="higher_certificate" type="file" @if(isset($ug_academic_details)) @if(empty($ug_academic_details->uploaded_certificate)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_higher_certificate">
                @if(isset($ug_academic_details))
                    @if($ug_academic_details->uploaded_certificate !='' || $ug_academic_details->uploaded_certificate != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/higher_certificate/'.$ug_academic_details->uploaded_certificate) }}" >Previous uploaded under graduate certificate</a>
                    @endif
                @endif
            </span>

            <div class="invalid-feedback">
                Please select under graduate certificate
             </div> 
             
             @if ($errors->has('higher_certificate'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('higher_certificate') }}
                </div>
             @endif

        </div>
    </div>

    <!--<div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                
                <br>
                
            </div>
            
            <button type="button" class="btn btn-danger">ADD MORE EDUCATION</button>

            </div>
       
    </div>-->
</div>

<div class="row">
    <div class="col-lg-12">
        <strong>Higher Education Details(Post Graduate)</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">University Name</label>
            
        </div>
        
        <select class="form-control js-example-basic-single" name="post_graduate_board" id ="post_graduate_board" >
            <option value="">Select university name</option>
            @foreach($university_list as $boards)
                <option value="{{$boards->id}}" @if(isset($pg_academic_details)) @if($pg_academic_details->board_name == $boards->id ) selected="selected"  @endif @else @if(old('post_graduate_board') == $boards->id ) selected="selected" @endif    @endif >{{$boards->University}}</option>  
            @endforeach
         </select>
            <div class="invalid-feedback">
                Please select university/board name
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Passing Year</label>
            
        </div>
        
        <select class="form-control js-example-basic-single" name="post_graduate_passing_year" id ="post_graduate_passing_year" >
            <option value="">Select passing year</option>
            @for($i=date('Y') ;$i>1910; $i--)
                <option value="{{$i}}" @if(isset($pg_academic_details)) @if($pg_academic_details->year_of_passing == $i ) selected="selected"  @endif @else @if(old('post_graduate_passing_year') == $i ) selected="selected" @endif    @endif >{{$i}}</option>  
            @endfor
         </select>
            <div class="invalid-feedback">
                Please enter passing year
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Total Marks</label>
            
        </div>
        
        <input  id="p_total_marks" name="p_total_marks" type="number"  onblur="get_post_graduate_percentage()"
            class="form-control round-input " placeholder="Total Marks" value="@if(isset($pg_academic_details)) {{$pg_academic_details->total_marks}} @else {{old('p_total_marks')}}    @endif" />

            <div class="invalid-feedback">
                Please enter total marks
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Marks obtain</label>
            
        </div>
        
        <input  id="p_marks_ontain" name="p_marks_ontain" type="number"  onblur="get_post_graduate_percentage()"
            class="form-control round-input " placeholder="Marks obtain" value="@if(isset($pg_academic_details)) {{$pg_academic_details->marks_obtain}} @else {{old('p_marks_ontain')}}    @endif" />

            <div class="invalid-feedback">
                Please enter marks obtain
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Percentage</label>
            
        </div>
        
        <input  id="p_percentage" name="p_percentage" type="text"  redobly="readonly" 
            class="form-control round-input " placeholder="Percentage" value="@if(isset($pg_academic_details)) {{$pg_academic_details->percentage}} @else {{old('p_percentage')}}    @endif" />

            <div class="invalid-feedback">
                Please enter percentage
             </div>    

        </div>
    </div>

    

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Course</label>
            
        </div>
        
        <input  id="post_graduate_course" name="post_graduate_course" type="text"  
            class="form-control round-input " placeholder="MA/MSC/M.COM/M.TECH/M.PHARMA" value="@if(isset($pg_academic_details)) {{$pg_academic_details->course_name}} @else {{old('post_graduate_course')}}    @endif" />

        

            <div class="invalid-feedback">
                Please enter course name
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Major Subject</label>
            
        </div>
        
        <input  id="post_graduate_major_subject" name="post_graduate_major_subject" type="text" 
            class="form-control round-input " placeholder="English/Bengali/Mathematics" value="@if(isset($pg_academic_details)) {{$pg_academic_details->major_subject}} @else {{old('post_graduate_major_subject')}}    @endif" />

            <div class="invalid-feedback">
                Please enter major subject
            
            </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Course Duration</label>
            
        </div>
        
            <select class="form-control js-example-basic-single" name="post_graduate_course_duration" id ="post_graduate_course_duration" >
                <option value="">Select course duration</option>
                @for($i=1;$i<7;$i++)
                <option value="{{$i}}" @if(isset($pg_academic_details)) @if($pg_academic_details->course_duration == $i ) selected="selected"  @endif @else @if(old('post_graduate_course_duration') == $i ) selected="selected" @endif    @endif >{{$i}} Year</option>  
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
            <label for="forl-label">UPLOAD REGISTRATION</label>
            
            
        </div>
        
        <input  id="pg_reg_no" name="pg_reg_no" type="file"  onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_pg_reg_no">
                @if(isset($pg_academic_details))
                    @if($pg_academic_details->uploaded_registration !='' || $pg_academic_details->uploaded_registration != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/pg_reg_no/'.$pg_academic_details->uploaded_registration) }}" >Previous uploaded post graduate Registration certificate</a>
                    @endif
                @endif 
            </span>
            <div class="invalid-feedback">
                Please select registration certificate
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD MARKSHEET</label>
            
            
        </div>
        
        <input  id="pg_markshett" name="pg_markshett" type="file"  onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />

            <span class="text-primary" id="previous_upload_pg_markshett">
                @if(isset($pg_academic_details))
                    @if($pg_academic_details->uploaded_marksheet !='' || $pg_academic_details->uploaded_marksheet != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/pg_markshett/'.$pg_academic_details->uploaded_marksheet) }}" >Previous uploaded post graduate marksheet</a>
                    @endif
                @endif 
            </span>

            <div class="invalid-feedback">
                Please select marksheet
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD CERTIFICATE</label>
           
            
        </div>
        
        <input  id="pg_certificate" name="pg_certificate" type="file"  onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_pg_certificate">
                @if(isset($pg_academic_details))
                    @if($pg_academic_details->uploaded_certificate !='' || $pg_academic_details->uploaded_certificate != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/pg_certificate/'.$pg_academic_details->uploaded_certificate) }}" >Previous uploaded post graduate certificate</a>
                    @endif
                @endif
            </span>

            <div class="invalid-feedback">
                Please select certificate
             </div>    

        </div>
    </div>

    <!--<div class="col-lg-4">
        <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                
                <br>
                
            </div>
            
            <button type="button" class="btn btn-danger">ADD MORE EDUCATION</button>

            </div>
       
    </div>-->
</div>

<script>
    function get_higher_percentage(){

            var tenth_total_marks = $("#h_total_marks").val();
            var tenth_marks_obtain = $("#h_marks_ontain").val();

           

            var percentage = (parseFloat(tenth_marks_obtain)/parseFloat(tenth_total_marks)) *100 ;

            if(isNaN(percentage)){
                $("#h_percentage").val(0) ;
            }
            else{

                $("#h_percentage").val(percentage.toFixed(2)) ;
            }

            



    }

    function get_post_graduate_percentage(){

        var tenth_total_marks = $("#p_total_marks").val();
            var tenth_marks_obtain = $("#p_marks_ontain").val();

           

            var percentage = (parseFloat(tenth_marks_obtain)/parseFloat(tenth_total_marks)) *100 ;

            if(isNaN(percentage)){
                $("#p_percentage").val(0) ;
            }
            else{

                $("#p_percentage").val(percentage.toFixed(2)) ;
            }


    }
</script>