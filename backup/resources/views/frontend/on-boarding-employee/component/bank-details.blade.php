<form action="{{ route('save-bank-details')}}" method="post" enctype="multipart/form-data" class="needs-validation @if ($errors->any()) was-validated @endif" novalidate>
    @csrf
<div class="row">
    <div class="col-lg-12">
        <strong>Bank Account Details</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Account name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="account_name" name="account_name" type="text" required="required"
            class="form-control round-input " placeholder="Account naame" value="@if(isset($bank_information)) {{$bank_information->account_name}} @else {{old('account_name')}}    @endif" />

            <div class="invalid-feedback">
                Please enter account name
             </div>
             
             @if ($errors->has('account_name'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('account_name') }}
                </div>
            @endif 

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Bank Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-control js-example-basic-single" name="bank_name" id ="bank_name" required="required">
            <option value="">Select bank name</option>
            @foreach($bank_details as $bankdetails)
                <option value="{{$bankdetails->id}}" @if(isset($bank_information)) @if($bank_information->bank_name == $bankdetails->id ) selected="selected"  @endif @else @if(old('bank_name') == $bankdetails->id ) selected="selected" @endif    @endif>{{$bankdetails->bank_name}}</option>  
            @endforeach
        </select>
        
            <div class="invalid-feedback">
                Please select bank name
             </div>  
             @if ($errors->has('bank_name'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('bank_name') }}
                </div>
            @endif  

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Branch Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="branch_name" name="branch_name" type="text" required="required"
            class="form-control round-input " placeholder="Branch name" value="@if(isset($bank_information)) {{$bank_information->branch_name}} @else {{old('branch_name')}}    @endif" />

            <div class="invalid-feedback">
                Please enter branch name
             </div> 
             
             @if ($errors->has('branch_name'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('branch_name') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">IFSC Code</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="ifsc_code" name="ifsc_code" type="text" required="required"
            class="form-control round-input " placeholder="IFSC Code" value="@if(isset($bank_information)) {{$bank_information->ifsc_code}} @else {{old('ifsc_code')}}    @endif" />

            <div class="invalid-feedback">
                Please enter IFSC Code
             </div>
             
             @if ($errors->has('ifsc_code'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('ifsc_code') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Account number</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="account_number" name="account_number" type="text"  required="required"
            class="form-control round-input " placeholder="Account number" value="@if(isset($bank_information)) {{$bank_information->account_number}} @else {{old('account_number')}}    @endif" />

            <div class="invalid-feedback">
                Please enter account number
             </div>
             
             @if ($errors->has('account_number'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('account_number') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Account type</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <select class="form-control js-example-basic-single" name="account_type" id ="account_type" required="required">
            <option value="">Select account type</option>
            <option value="Savings" @if(isset($bank_information)) @if($bank_information->account_type == 'Savings' ) selected="selected"  @endif @else @if(old('account_type') == 'Savings' ) selected="selected" @endif    @endif>Savings</option>
            <option value="Current" @if(isset($bank_information)) @if($bank_information->account_type == 'Current' ) selected="selected"  @endif @else @if(old('account_type') == 'Current' ) selected="selected" @endif    @endif>Current</option>
        </select>

            <div class="invalid-feedback">
                Please select account type
             </div>   
             
             @if ($errors->has('account_type'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('account_type') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">UPLOAD BANK DETAILS</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="bank_details" name="bank_details" type="file" @if(isset($bank_information)) @if(empty($bank_information->uploaded_bank_details)) required="required" @endif @else   @endif onchange="uploadBankDetails(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_bank_details">
                @if(isset($bank_information))
                    @if($bank_information->uploaded_bank_details !='' || $bank_information->uploaded_bank_details != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/bank_information/bank_details/'.$bank_information->uploaded_bank_details) }}" >Previous uploaded Bank details</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload bank details 
             </div>  
             
             @if ($errors->has('bank_details'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('bank_details') }}
                </div>
             @endif

        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">6 MONTHS STATEMENT SHOWING SALARY</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        
        <input  id="salary_statement" name="salary_statement" type="file" @if(isset($bank_information)) @if(empty($bank_information->uploaded_salary_statement)) required="required" @endif @else   @endif onchange="uploadBankDetails(this.id)"
            class="form-control round-input " />
            <span class="text-primary" id="previous_upload_salary_statement">
                @if(isset($bank_information))
                    @if($bank_information->uploaded_salary_statement !='' || $bank_information->uploaded_salary_statement != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/bank_information/salary_statement/'.$bank_information->uploaded_salary_statement) }}" >Previous uploaded Salary Statement</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload salary statement
             </div> 
             
             @if ($errors->has('salary_statement'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('salary_statement') }}
                </div>
             @endif

        </div>
    </div>

    


</div>
<div class="row">
    <div class="col-lg-12">
        <center>

            <div class="form-group  pb-sm">
                <div class="text-danger asterik text-end mb-0 pb-0 d-mobileNone "></div>
                <button type="submit" class="btn btn-primary menu menu-big"
                  id="lead_callregister"> Save & Next </button>
              </div>
        </center>
    </div>
</div>

</form>

<script>
    function uploadBankDetails(id){
	   //var fileid = $(this).val();

       
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        if(id == 'bank_details'){

            var filety = 'bank_details';
            var ff = 'Bank details';
        }else if(id == 'salary_statement'){
            var filety = 'salary_statement';
            var ff = 'Salary statement';

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
                        url: "{{ route('uploadBankDetails') }}",
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
</script>