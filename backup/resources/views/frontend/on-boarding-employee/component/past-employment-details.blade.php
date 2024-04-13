<form action="{{ route('save-employment-details')}}" enctype="multipart/form-data" method="post" class="needs-validation @if ($errors->any()) was-validated @endif" novalidate>
    @csrf
@php($ff=1)
@php($isValid=0)
@if(isset($employment_details) && !empty($employment_details))

   <input type="hidden" name="empid" id="empid" value="{{count($employment_details)}}" />
    @foreach($employment_details as $empp)
    @php($isValid=1)
    <div class="row">
        <div class="col-lg-12">
            <strong>Past Employment Details {{$ff}}</strong>
        </div>
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Company Name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="company_name_{{$ff}}" name="company_name_{{$ff}}" type="text" 
                class="form-control round-input " placeholder="Company naame" value="{{ $empp->company_name }}" />
    
                <div class="invalid-feedback">
                    Please enter company name
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Brand name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="brand_name_{{$ff}}" name="brand_name_{{$ff}}" type="text" 
                class="form-control round-input " placeholder="Brand name" value="{{$empp->company_name}}"/>
    
                    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Joining Date</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="joining_date_{{$ff}}" name="joining_date_{{$ff}}" type="date" required="required"
                class="form-control round-input " placeholder="Joining date" value="{{$empp->company_name}}" />
    
                <div class="invalid-feedback">
                    Please select joining date
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Releasing Date</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="releasing_date_{{$ff}}" name="releasing_date_{{$ff}}" type="text" required="required"
                class="form-control round-input " placeholder="Releasing date" value="{{$empp->company_name}}" />
    
                <div class="invalid-feedback">
                    Please select releasing date
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Reason for Resignation</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="resignation_reason_{{$ff}}" name="resignation_reason_{{$ff}}" type="text" required="required"
                class="form-control round-input " placeholder="Resignation reason" value="{{$empp->company_name}}" />
    
                <div class="invalid-feedback">
                    Please enter resignation reason
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Salary per Month</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="salary_per_month_{{$ff}}" name="salary_per_month_{{$ff}}" type="number" required="required"
                class="form-control round-input " placeholder="Salary per month" value="{{ $empp->company_name }}" />
    
                <div class="invalid-feedback">
                    Please enter salary per month
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Post Name</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="post_name_{{$ff}}" name="post_name_{{$ff}}" type="text" required="required"
                class="form-control round-input " placeholder="Post name" value="{{$empp->company_name }}" />
    
                <div class="invalid-feedback">
                    Please enter post name
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Posting area</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="posting_area_{{$ff}}" name="posting_area_{{$ff}}" type="text" required="required"
                class="form-control round-input " placeholder="Posting area" value="{{ $empp->company_name }}" />
    
                <div class="invalid-feedback">
                    Please enter posting area
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Reporting to</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="reporting_to_{{$ff}}" name="reporting_to_{{$ff}}" type="text" required="required"
                class="form-control round-input " placeholder="Reporting to" value="{{ $empp->company_name }}" />
    
                <div class="invalid-feedback">
                    Please enter reporting to
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Company contact number</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="company_contact_number_{{$ff}}" name="company_contact_number_{{$ff}}" type="text" required="required"
                class="form-control round-input " placeholder="Company contact number" value="{{ $empp->company_name}}" />
    
                <div class="invalid-feedback">
                    Please enter company contact number 
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Company email id</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="company_email_id_{{$ff}}" name="company_email_id_{{$ff}}" type="email" required="required"
                class="form-control round-input " placeholder="Company email id" value="{{ $empp->company_name}}" />
    
                <div class="invalid-feedback">
                    Please enter company email id
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">Company website</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="company_website_{{$ff}}" name="company_website_{{$ff}}" type="url" required="required"
                class="form-control round-input " placeholder="Company website" value="{{ $empp->company_name }}" />
    
                <div class="invalid-feedback">
                    Please enter company website
                 </div>    
    
            </div>
        </div>
    
        
    
        
    
        
    
        
        
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">UPLOAD APPOINTMENT LETTER</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="appointment_letter_{{$ff}}" name="appointment_lette_{{$ff}}" type="file"  onchange="uploadPastEmploymentFiles(this.id)"
                class="form-control round-input " />
                <span class="text-primary" id="previous_upload_appointment_letter_{{$ff}}">
                   
                        @if($empp->uploaded_appointment_letter !='' || $empp->uploaded_appointment_letter != null )
                            <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/past_employment/appointment_letter_/'.$empp->uploaded_appointment_letter) }}" >Previous uploaded appointment letter</a>
                        @endif
                   
                </span>
                <div class="invalid-feedback">
                    Please select appointment letter
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">UPLOAD RELEASE LETTER</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="release_letter_{{$ff}}" name="release_lette_{{$ff}}" type="file" required="required" onchange="uploadPastEmploymentFiles(this.id)"
                class="form-control round-input " />
                <span class="text-primary" id="previous_upload_release_letter_{{$ff}}">
                    @if($empp->uploaded_release_letter !='' || $empp->uploaded_release_letter != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/past_employment/release_letter_/'.$empp->uploaded_release_letter) }}" >Previous uploaded release letter</a>
                    @endif
                </span>
                <div class="invalid-feedback">
                    Please select release letter
                 </div>    
    
            </div>
        </div>
    
        <div class="col-lg-4">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <label for="forl-label">UPLOAD LAST 3 MONTHS SALARY SLIP</label>
                <div class="text-danger asterik text-end mb-0 pb-0">*</div>
            </div>
            
            <input  id="salary_slip_{{$ff}}" name="salary_slip_{{$ff}}" type="file" required="required" onchange="uploadPastEmploymentFiles(this.id)"
                class="form-control round-input " />
                <span class="text-primary" id="previous_upload_salary_slip_{{$ff}}">
                    @if($empp->uploaded_salary_slip !='' || $empp->uploaded_salary_slip != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/past_employment/salary_slip_/'.$empp->uploaded_salary_slip) }}" >Previous uploaded release letter</a>
                    @endif
                </span>
                <div class="invalid-feedback">
                    Please select last 3 month salary slip
                 </div>    
    
            </div>
        </div>
    
        <div class="row" id="add_more_employment">
    
        </div>
        
        <div class="col-lg-12" style="float:right;">
            <div class="form-group pb-3">
            <div class="d-flex justify-content-between mb-2" >
                <br>
            </div>
            
            <button type="button" name="add_more_employment" class="btn btn-danger" style="float:right;" onclick="add_more_employment_info()">ADD MORE EMPLOYMENT</button>   
    
            </div>
        </div>
    </div>
    @php($ff++)
    @endforeach
@endif

@if($isValid == 0)

<div class="row">
    <div class="col-lg-12">
        <strong>Past Employment Details 1</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Company Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        <input type="hidden" name="empid" id="empid" value="1" />
        <input  id="company_name_1" name="company_name_1" type="text" required="required"
            class="form-control round-input " placeholder="Company naame" value="{{ old('company_name') }}" />

            <div class="invalid-feedback">
                Please enter company name
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Brand name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="brand_name_1" name="brand_name_1" type="text" 
            class="form-control round-input " placeholder="Brand name" value="{{ old('brand_name') }}" />

                

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Joining Date</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="joining_date_1" name="joining_date_1" type="date" required="required"
            class="form-control round-input " placeholder="Joining date" value="{{ old('joining_date') }}" />

            <div class="invalid-feedback">
                Please select joining date
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Releasing Date</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="releasing_date_1" name="releasing_date_1" type="date" required="required"
            class="form-control round-input " placeholder="Releasing date" value="{{ old('releasing_date') }}" />

            <div class="invalid-feedback">
                Please select releasing date
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Reason for Resignation</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="resignation_reason_1" name="resignation_reason_1" type="text" required="required"
            class="form-control round-input " placeholder="Resignation reason" value="{{ old('resignation_reason') }}" />

            <div class="invalid-feedback">
                Please enter resignation reason
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Salary per Month</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="salary_per_month_1" name="salary_per_month_1" type="number" required="required"
            class="form-control round-input " placeholder="Salary per month" value="{{ old('salary_per_month') }}" />

            <div class="invalid-feedback">
                Please enter salary per month
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Post Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="post_name_1" name="post_name_1" type="text" required="required"
            class="form-control round-input " placeholder="Post name" value="{{ old('post_name') }}" />

            <div class="invalid-feedback">
                Please enter post name
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Posting area</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="posting_area_1" name="posting_area_1" type="text" required="required"
            class="form-control round-input " placeholder="Posting area" value="{{ old('posting_area') }}" />

            <div class="invalid-feedback">
                Please enter posting area
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Reporting to</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="reporting_to_1" name="reporting_to_1" type="text" required="required"
            class="form-control round-input " placeholder="Reporting to" value="{{ old('reporting_to') }}" />

            <div class="invalid-feedback">
                Please enter reporting to
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Company contact number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="company_contact_number_1" name="company_contact_number_1" type="text" required="required"
            class="form-control round-input " placeholder="Company contact number" value="{{ old('company_contact_number') }}" />

            <div class="invalid-feedback">
                Please enter company contact number 
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Company email id</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="company_email_id_1" name="company_email_id_1" type="email" required="required"
            class="form-control round-input " placeholder="Company email id" value="{{ old('passing_year') }}" />

            <div class="invalid-feedback">
                Please enter company email id
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Company website</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="company_website_1" name="company_website_1" type="url" required="required"
            class="form-control round-input " placeholder="Company website" value="{{ old('company_website') }}" />

            <div class="invalid-feedback">
                Please enter company website
             </div>    

        </div>
    </div>

    

    

    

    
    
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD APPOINTMENT LETTER</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="appointment_letter_1" name="appointment_lette_1" type="file" required="required" onchange="uploadPastEmploymentFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_appointment_letter_1">
                 
            </span>
            <div class="invalid-feedback">
                Please select appointment letter
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD RELEASE LETTER</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="release_letter_1" name="release_lette_1" type="file" required="required" onchange="uploadPastEmploymentFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_release_letter_1">
                
            </span>
            <div class="invalid-feedback">
                Please select release letter
             </div>    

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD LAST 3 MONTHS SALARY SLIP</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="salary_slip_1" name="salary_slip_1" type="file" required="required" onchange="uploadPastEmploymentFiles(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_salary_slip_1">
                
            </span>
            <div class="invalid-feedback">
                Please select last 3 month salary slip
             </div>    

        </div>
    </div>

    <div class="row" id="add_more_employment">

    </div>
    
    <div class="col-lg-12" style="float:right;">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <br>
        </div>
        
        <button type="button" name="add_more_employment" class="btn btn-danger" style="float:right;" onclick="add_more_employment_info()">ADD MORE EMPLOYMENT</button>   

        </div>
    </div>
</div>
@endif


<div class="row">
    <div class="col-lg-12">
        <center>

            <div class="form-group  pb-sm">
                <div class="text-danger asterik text-end mb-0 pb-0 d-mobileNone "></div>
                <button type="submit" class="btn btn-primary menu menu-big btn-ok"
                  id="lead_callregister"> Save & Next </button>
              </div>
        </center>
    </div>
</div>
</form>

<script>
    function add_more_employment_info(){
        var empid = parseInt($("#empid").val());

        var newempidd = empid+1;

        $("#empid").val(newempidd)

        var emp = '';
            emp = '<div class="row" id="empidd_'+newempidd+'">';
            emp += '<div class="col-lg-12">';
            emp +='<strong>Past Employment Details '+newempidd+'</strong>&nbsp;&nbsp;';
            emp +='<button type="button" class="btn btn-warning btn-sm" id="delete_pastemployment_'+newempidd+'" onclick="delete_past_employment(this.id)">Delete</button>';
            emp +='</div>';
            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Company Name</label>';           
            emp += '</div>';            
            emp += '<input  id="company_name_'+newempidd+'" name="company_name_'+newempidd+'" type="text"  class="form-control round-input " placeholder="Company naame"  />';

            emp += '<div class="invalid-feedback">Please enter company name </div>';
                    

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Brand name</label>';
            emp += '</div>';
        
            emp += '<input  id="brand_name_'+newempidd+'" name="brand_name_'+newempidd+'" type="text"  class="form-control round-input " placeholder="Brand name"  />';

                

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Joining Date</label>';
            
            emp += '</div>';
        
            emp += '<input  id="joining_date_'+newempidd+'" name="joining_date_'+newempidd+'" type="date" required="required" class="form-control round-input " placeholder="Joining date"  />';

            emp += '<div class="invalid-feedback"> Please select joining date </div>';
                   

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Releasing Date</label>';
           
            emp += '</div>';
        
            emp += '<input  id="releasing_date_'+newempidd+'" name="releasing_date_'+newempidd+'" type="text" required="required" class="form-control round-input " placeholder="Releasing date" />';

            emp += '<div class="invalid-feedback"> Please select releasing date </div>  ';  

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Reason for Resignation</label>';
            
            emp += '</div>';
        
            emp += '<input  id="resignation_reason_'+newempidd+'" name="resignation_reason_'+newempidd+'" type="text" required="required"  class="form-control round-input " placeholder="Resignation reason" />';

            emp += '<div class="invalid-feedback">Please enter resignation reason  </div> '; 
                  

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Salary per Month</label>';
            
            emp += '</div>';
        
            emp += '<input  id="salary_per_month_'+newempidd+'" name="salary_per_month_'+newempidd+'" type="number" required="required" class="form-control round-input " placeholder="Salary per month" />';

            emp += '<div class="invalid-feedback"> Please enter salary per month </div> ';   

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Post Name</label>';
            
            emp += '</div>';
        
            emp += '<input  id="post_name_'+newempidd+'" name="post_name_'+newempidd+'" type="text" required="required" class="form-control round-input " placeholder="Post name" />';

            emp += '<div class="invalid-feedback">Please enter post name</div> ';   

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Posting area</label>';
            
            emp += '</div>';
        
            emp += '<input  id="posting_area_'+newempidd+'" name="posting_area_'+newempidd+'" type="text" required="required" class="form-control round-input " placeholder="Posting area"  />';

            emp += '<div class="invalid-feedback">  Please enter posting area  </div>';    

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Reporting to</label>';
            
            emp += '</div>';
        
            emp += '<input  id="reporting_to_'+newempidd+'" name="reporting_to_'+newempidd+'" type="text" required="required" class="form-control round-input " placeholder="Reporting to" />';

            emp += '<div class="invalid-feedback"> Please enter reporting to  </div> ';

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Company contact number</label>';
            
            emp += '</div>';
        
            emp += '<input  id="company_contact_number_'+newempidd+'" name="company_contact_number_'+newempidd+'" type="text"  class="form-control round-input " placeholder="Company contact number" />';

            emp += '<div class="invalid-feedback"> Please enter company contact number  </div>    ';

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Company email id</label>';
            
            emp += '</div>';
        
            emp += '<input  id="company_email_id_'+newempidd+'" name="company_email_id_'+newempidd+'" type="email"  class="form-control round-input " placeholder="Company email id" />';

            emp += '<div class="invalid-feedback"> Please enter company email id </div>';

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">Company website</label>';
           
            emp += '</div>';
        
            emp += '<input  id="company_website_'+newempidd+'" name="company_website_'+newempidd+'" type="url"  class="form-control round-input " placeholder="Company website" />';

            emp += '<div class="invalid-feedback"> Please enter company website </div> ';

            emp += '</div>';
            emp += '</div>';

    
    
            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">UPLOAD APPOINTMENT LETTER</label>';
            
            emp += '</div>';
        
            emp += '<input  id="appointment_letter_'+newempidd+'" name="appointment_letter_'+newempidd+'" type="file"  class="form-control round-input " onchange="uploadPastEmploymentFiles(this.id)"  />';
            
            emp +='<span class="text-primary" id="previous_upload_appointment_letter_'+newempidd+'"></span>';
           

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">UPLOAD RELEASE LETTER</label>';
            
            emp += '</div>';
        
            emp += '<input  id="release_letter_'+newempidd+'" name="release_letter_'+newempidd+'" type="file"   class="form-control round-input " onchange="uploadPastEmploymentFiles(this.id)" />';
            
            emp +='<span class="text-primary" id="previous_upload_release_letter_'+newempidd+'"></span>';
           

            emp += '</div>';
            emp += '</div>';

            emp += '<div class="col-lg-4">';
            emp += '<div class="form-group pb-3">';
            emp += '<div class="d-flex justify-content-between mb-2" >';
            emp += '<label for="forl-label">UPLOAD LAST 3 MONTHS SALARY SLIP</label>';
            
            emp += '</div>';
        
            emp += '<input  id="salary_slip_'+newempidd+'" name="salary_slip_'+newempidd+'" type="file"  class="form-control round-input " onchange="uploadPastEmploymentFiles(this.id)" />';

            emp +='<span class="text-primary" id="previous_upload_salary_slip_'+newempidd+'"></span>';


            emp += '<div class="invalid-feedback">  Please select last 3 month salary slip  </div>    ';

            emp += '</div>';
            emp += '</div>';
            emp +='</div>';

            $("#add_more_employment").append(emp);


        
    }

    function delete_past_employment(id){
         var idsplit = id.split("_");
         if(confirm('Are you sure you want to delete this records?')){
            $("#empidd_"+idsplit[2]).remove();
         }
         

    }


    function uploadPastEmploymentFiles(id){

        
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    if(id.indexOf('appointment_letter_') != -1){

        var filety = 'appointment_letter_';
        var ff = 'Appointment Letter';
    
    }else if(id.indexOf('release_letter_') != -1){

        var filety = 'release_letter_';
        var ff = 'Release Letter';
    }else if(id.indexOf('salary_slip_') != -1){

        var filety = 'salary_slip_';
        var ff = 'Salary Slip';
    }

    var idsplit = id.split("_");

    var cmpany_name = $("#company_name_"+idsplit[2]).val();

    if(cmpany_name == '' || cmpany_name == null){

        alert('Please fill all past employment information...');
        $('#'+id).val('');

    }else{


        // Get the selected file
        var files = $('#'+id)[0].files;
        //alert(files);

        if(files.length > 0){
            var fd = new FormData();

            // Append data 
            fd.append('file',files[0]);
            fd.append('_token',CSRF_TOKEN);
            fd.append('filetype',filety);
            fd.append('company_name',cmpany_name);

            // Hide alert 
            $('#responseMsg').hide();

            // AJAX request 
            $.ajax({
                url: "{{ route('uploadPastEmploymentFile') }}",
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

                        $("#previous_upload_"+id).html('<a style="text-decoration: none !important;" target="_blank" href="'+response.filepath+'">Previous uploaded '+ff+' </a>');

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

                    $("#previous_upload_"+id).html();
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


    }
</script>