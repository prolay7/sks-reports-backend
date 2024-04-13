<div class="row">
    <div class="col-lg-12">
        <strong>10+2 Details</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Board Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        <select class="form-control js-example-basic-single" name="twelve_board_name" id ="twelve_board_name" required="required">
            <option value="">Select 12th board name</option>
            @foreach($borad_list as $boards)
                <option value="{{$boards->id}}" @if(isset($twelve_academic_details)) @if($twelve_academic_details->board_name == $boards->id ) selected="selected"  @endif @else @if(old('twelve_board_name') == $boards->id ) selected="selected" @endif    @endif>{{$boards->board_name}}</option>  
            @endforeach
         </select>

            <div class="invalid-feedback">
                Please select 12th board name
             </div>  
             
             @if ($errors->has('twelve_board_name'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('twelve_board_name') }}
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
        
        <select class="form-control js-example-basic-single" name="twelve_passing_year" id ="twelve_passing_year" required="required">
            <option value="">Select passing year</option>
            @for($i=date('Y') ;$i>1910; $i--)
                <option value="{{$i}}" @if(isset($twelve_academic_details)) @if($twelve_academic_details->year_of_passing == $i ) selected="selected"  @endif @else @if(old('twelve_passing_year') == $i ) selected="selected" @endif    @endif >{{$i}}</option>  
            @endfor
         </select>

        

            <div class="invalid-feedback">
                Please select 12th passing year
             </div> 
             
             @if ($errors->has('twelve_passing_year'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_passing_year') }}
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
        
        <input  id="12th_total_marks" name="twelve_total_marks" type="number" required="required" onblur="get_twelve_percentage()"
            class="form-control round-input " placeholder="Total Marks" value="@if(isset($twelve_academic_details)) {{$twelve_academic_details->total_marks}} @else {{old('twelve_total_marks')}}    @endif" />

            <div class="invalid-feedback">
                Please enter total marks
             </div>
             
             @if ($errors->has('twelve_total_marks'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_total_marks') }}
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
        
        <input  id="12th_marks_ontain" name="twelve_marks_ontain" type="number" required="required" onblur="get_twelve_percentage()"
            class="form-control round-input " placeholder="Marks obtain" value="@if(isset($twelve_academic_details)) {{$twelve_academic_details->marks_obtain}} @else {{old('twelve_marks_ontain')}}    @endif" />

            <div class="invalid-feedback">
                Please enter marks obtain
             </div> 
             
             @if ($errors->has('twelve_marks_ontain'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_marks_ontain') }}
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
        
        <input  id="12th_percentage" name="twelve_percentage" type="text"  redobly="readonly" required="required"
            class="form-control round-input " placeholder="Percentage" value="@if(isset($twelve_academic_details)) {{$twelve_academic_details->percentage}} @else {{old('twelve_percentage')}}    @endif" />

            <div class="invalid-feedback">
                Please enter percentage
             </div> 
             
             @if ($errors->has('twelve_percentage'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_percentage') }}
             </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Registration no</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="twelve_regno" name="twelve_regno" type="number" required="required"
            class="form-control round-input " placeholder="Registration no" value="@if(isset($tenth_academic_details)) {{$tenth_academic_details->registration_no}} @else {{old('twelve_regno')}}    @endif" />

            <div class="invalid-feedback">
                Please enter registration no
             </div> 
             
             @if ($errors->has('twelve_regno'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_regno') }}
             </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Stream</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
            <select class="form-control js-example-basic-single" name="twelve_stream" id ="twelve_stream" required="required">
                <option value="">Select stream</option>
                <option vlaue="Arts" @if(isset($twelve_academic_details)) @if($twelve_academic_details->stream_name == 'Arts' ) selected="selected"  @endif @else @if(old('twelve_stream') == 'Arts' ) selected="selected" @endif    @endif >Arts</option>
                <option vlaue="Science" @if(isset($twelve_academic_details)) @if($twelve_academic_details->stream_name == 'Science' ) selected="selected"  @endif @else @if(old('twelve_stream') == 'Science' ) selected="selected" @endif    @endif>Science</option>
                <option vlaue="Commerce" @if(isset($twelve_academic_details)) @if($twelve_academic_details->stream_name == 'Commerce' ) selected="selected"  @endif @else @if(old('twelve_stream') == 'Commerce' ) selected="selected" @endif    @endif>Commerce</option>
                <option vlaue="Vocational" @if(isset($twelve_academic_details)) @if($twelve_academic_details->stream_name == 'Vocational' ) selected="selected"  @endif @else @if(old('twelve_stream') == 'Vocational' ) selected="selected" @endif    @endif>Vocational</option>
            </select>

            <div class="invalid-feedback">
                Please select stream
             </div> 
             
             @if ($errors->has('twelve_stream'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_stream') }}
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
        
        <input  id="twelve_reg_no" name="twelve_reg_no" type="file" @if(isset($twelve_academic_details)) @if(empty($twelve_academic_details->uploaded_registration)) required="required" @endif @else   @endif  onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_twelve_reg_no">
                @if(isset($twelve_academic_details))
                    @if($twelve_academic_details->uploaded_registration !='' || $twelve_academic_details->uploaded_registration != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/twelve_reg_no/'.$twelve_academic_details->uploaded_registration) }}" >Previous uploaded 12th Registration</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload 12th registration certificate
             </div> 
             
             @if ($errors->has('twelve_reg_no'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_reg_no') }}
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
        
        <input  id="twelve_marksheet" name="twelve_marksheet" type="file" @if(isset($twelve_academic_details)) @if(empty($twelve_academic_details->uploaded_marksheet)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_twelve_marksheet">
                @if(isset($twelve_academic_details))
                    @if($twelve_academic_details->uploaded_marksheet !='' || $twelve_academic_details->uploaded_marksheet != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/twelve_marksheet/'.$twelve_academic_details->uploaded_marksheet) }}" >Previous uploaded 12th Marksheet</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload 12th marksheet
             </div> 
             
             @if ($errors->has('twelve_marksheet'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_marksheet') }}
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
        
        <input  id="twelve_certificate" name="twelve_certificate" type="file" @if(isset($twelve_academic_details)) @if(empty($twelve_academic_details->uploaded_certificate)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_twelve_certificate">
                @if(isset($twelve_academic_details))
                    @if($twelve_academic_details->uploaded_certificate !='' || $twelve_academic_details->uploaded_certificate != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/twelve_certificate/'.$twelve_academic_details->uploaded_certificate) }}" >Previous uploaded 12th Certificate</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload 12th certificate
             </div>
             
             @if ($errors->has('twelve_certificate'))
                                    
             <div class="invalid-feedback">
                 {{ $errors->first('twelve_certificate') }}
             </div>
             @endif

        </div>
    </div>


</div>

<script>
    function get_twelve_percentage(){

       var twelve_total_marks = $("#12th_total_marks").val();
       var twelve_marks_obtain = $("#12th_marks_ontain").val();

       
       
        var percentage = (parseFloat(twelve_marks_obtain)/parseFloat(twelve_total_marks)) *100 ;
       
        if(isNaN(percentage)){
            $("#12th_percentage").val(0) ;
        }
        else{

            $("#12th_percentage").val(percentage.toFixed(2)) ;
        }

        

       

    }
</script>