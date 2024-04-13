<div class="row">
    <div class="col-lg-12">
        <strong>Class 10 Details</strong>
    </div>
    <div class="col-lg-4">
        <div class="form-group pb-3">
        <div class="d-flex justify-content-between mb-2" >
            <label for="forl-label">Board Name</label>
            <div class="text-danger asterik text-end mb-0 pb-0">*</div>
        </div>
        <select class="form-control js-example-basic-single" name="tenth_board_name" id ="tenth_board_name" required="required">
            <option value="">Select 10th board name</option>
            @foreach($borad_list as $boards)
                <option value="{{$boards->id}}" @if(isset($tenth_academic_details)) @if($tenth_academic_details->board_name == $boards->id ) selected="selected"  @endif @else @if(old('tenth_board_name') == $boards->id ) selected="selected" @endif    @endif>{{$boards->board_name}}</option>  
            @endforeach
         </select>

            <div class="invalid-feedback">
                Please select 10th board name
             </div>
             
             @if ($errors->has('tenth_board_name'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_board_name') }}
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
        
        <select class="form-control js-example-basic-single" name="tenth_passing_year" id ="tenth_passing_year" required="required">
            <option value="">Select passing year</option>
            @for($i=date('Y') ;$i>1910; $i--)
                <option value="{{$i}}" @if(isset($tenth_academic_details)) @if($tenth_academic_details->year_of_passing == $i ) selected="selected"  @endif @else @if(old('tenth_passing_year') == $i ) selected="selected" @endif    @endif >{{$i}}</option>  
            @endfor
         </select>

        

            <div class="invalid-feedback">
                Please select 10th passing year
             </div>  
             
             @if ($errors->has('tenth_passing_year'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_passing_year') }}
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
        
        <input  id="10th_total_marks" name="tenth_total_marks" type="number" required="required" onblur="get_tenth_percentage()"
            class="form-control round-input " placeholder="Total Marks" value="@if(isset($tenth_academic_details)) {{$tenth_academic_details->total_marks}} @else {{old('tenth_total_marks')}}    @endif" />

            <div class="invalid-feedback">
                Please enter total marks
             </div> 
             
             @if ($errors->has('tenth_total_marks'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_total_marks') }}
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
        
        <input  id="10th_marks_ontain" name="tenth_marks_ontain" type="number" required="required" onblur="get_tenth_percentage()"
            class="form-control round-input " placeholder="Marks obtain" value="@if(isset($tenth_academic_details)) {{$tenth_academic_details->marks_obtain}} @else {{old('tenth_marks_ontain')}}    @endif" />

            <div class="invalid-feedback">
                Please enter marks obtain
             </div> 
             
             @if ($errors->has('tenth_marks_ontain'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_marks_ontain') }}
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
        
        <input  id="10th_percentage" name="tenth_percentage" type="text"  redobly="readonly" required="required"
            class="form-control round-input " placeholder="Percentage" value="@if(isset($tenth_academic_details)) {{$tenth_academic_details->percentage}} @else {{old('tenth_percentage')}}    @endif" />

            <div class="invalid-feedback">
                Please enter percentage
             </div> 
             
             @if ($errors->has('tenth_percentage'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_percentage') }}
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
        
        <input  id="tenth_regno" name="tenth_regno" type="text" required="required"
            class="form-control round-input " placeholder="Registration no" value="@if(isset($tenth_academic_details)) {{$tenth_academic_details->registration_no}} @else {{old('tenth_regno')}}    @endif" />

            <div class="invalid-feedback">
                Please enter registration no
             </div> 
             
             @if ($errors->has('tenth_regno'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_regno') }}
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
        
        <input  id="tenth_reg_no" name="tenth_reg_no" type="file" @if(isset($tenth_academic_details)) @if(empty($tenth_academic_details->uploaded_registration)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"    class="form-control round-input">
            <span class="text-primary" id="previous_upload_tenth_reg_no">
                @if(isset($tenth_academic_details))
                    @if($tenth_academic_details->uploaded_registration !='' || $tenth_academic_details->uploaded_registration != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/tenth_reg_no/'.$tenth_academic_details->uploaded_registration) }}" >Previous uploaded 10th Registration</a>
                    @endif
                @endif
            </span>
            <div class="invalid-feedback">
                Please upload 10th registration certificate
             </div> 
             
             @if ($errors->has('tenth_reg_no'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_reg_no') }}
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
        
        <input  id="tenth_marksheet" name="tenth_marksheet" type="file" @if(isset($tenth_academic_details)) @if(empty($tenth_academic_details->uploaded_marksheet)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />

            <span class="text-primary" id="previous_upload_tenth_marksheet">
                @if(isset($tenth_academic_details))
                    @if($tenth_academic_details->uploaded_marksheet !='' || $tenth_academic_details->uploaded_marksheet != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/tenth_marksheet/'.$tenth_academic_details->uploaded_marksheet) }}" >Previous uploaded 10th Marksheet</a>
                    @endif
                 @endif
            </span>

            <div class="invalid-feedback">
                Please upload 10th marksheet
             </div> 
             
             
             @if ($errors->has('tenth_marksheet'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_marksheet') }}
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
        
        <input  id="tenth_certificate" name="tenth_certificate" type="file" @if(isset($tenth_academic_details)) @if(empty($tenth_academic_details->uploaded_certificate)) required="required" @endif @else   @endif onchange="uploadAcademicFiles(this.id)"
            class="form-control round-input " />

            <span class="text-primary" id="previous_upload_tenth_certificate">
                @if(isset($tenth_academic_details))
                    @if($tenth_academic_details->uploaded_certificate !='' || $tenth_academic_details->uploaded_certificate != null )
                        <a style="text-decoration: none !important;" target="_blank" href="{{asset('storage/app/public/academic_details/tenth_certificate/'.$tenth_academic_details->uploaded_certificate) }}" >Previous uploaded 10th Certificate</a>
                    @endif
                @endif
            </span>

            <div class="invalid-feedback">
                Please upload 10th certificate
             </div>  
             
             @if ($errors->has('tenth_certificate'))
                                    
                <div class="invalid-feedback">
                    {{ $errors->first('tenth_certificate') }}
                </div>
            @endif

        </div>
    </div>


</div>

<script>
    function get_tenth_percentage(){

       var tenth_total_marks = $("#10th_total_marks").val();
       var tenth_marks_obtain = $("#10th_marks_ontain").val();

       var tenth_total_marks = $("#10th_total_marks").val();
       
        var percentage = (parseFloat(tenth_marks_obtain)/parseFloat(tenth_total_marks)) *100 ;
       
        if(isNaN(percentage)){
            $("#10th_percentage").val(0) ;
        }
        else{

            $("#10th_percentage").val(percentage.toFixed(2)) ;
        }

        

       

    }

   
</script>

<script>
    function uploadAcademicFiles(id){
//var fileid = $(this).val();

//alert(id);


var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
if(id == 'tenth_reg_no'){

    var filety = 'tenth_reg_no';
    var ff = '10th Reg No.';
}else if(id == 'tenth_marksheet'){
    var filety = 'tenth_marksheet';
    var ff = '10th Marksheet';

}else if(id == 'tenth_certificate'){
    var filety = 'tenth_certificate';

    var ff = '10th Certificate';

}else if(id == 'twelve_reg_no'){

    var filety = 'twelve_reg_no';
    var ff = '12th Reg No.';
}else if(id == 'twelve_marksheet'){
    var filety = 'twelve_marksheet';
    var ff = '12th Marksheet';

}else if(id == 'twelve_certificate'){
    var filety = 'twelve_certificate';

    var ff = '12th Certificate';

}
else if(id == 'higher_reg_no'){

    var filety = 'higher_reg_no';
    var ff = 'Higher Reg No.';
}else if(id == 'higher_markshett'){
    var filety = 'higher_markshett';
    var ff = 'Higher Marksheet';

}else if(id == 'higher_certificate'){
    var filety = 'higher_certificate';

    var ff = 'Higher Certificate';

}
else if(id == 'pg_reg_no'){

    var filety = 'pg_reg_no';
    var ff = 'Post Graduate Reg No.';
}else if(id == 'pg_markshett'){
    var filety = 'pg_markshett';
    var ff = 'Post Graduate Marksheet';

}else if(id == 'pg_certificate'){
    var filety = 'pg_certificate';

    var ff = 'Post Graduate Certificate';

}
else if(id == 'other_marksheet'){
    var filety = 'other_marksheet';
    var ff = 'Marksheet';

}else if(id == 'other_certificate'){
    var filety = 'other_certificate';

    var ff = 'Certificate';

}


// Get the selected file
var files = $('#'+id)[0].files;
      //alert(files);

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
                url: "{{ route('uploadAcademicFile') }}",
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