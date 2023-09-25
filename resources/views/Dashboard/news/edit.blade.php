@extends('Dashboard.layout.app')

@section('content')
 

 

@if(!empty($news))
                                                     
      
     
    
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Form-->
                                <form id="news_update_form"  enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                    <!--begin::Aside column-->
                                    @csrf
                                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                      
                                        <div class="card card-flush py-4">
    
                                                <div class="card-header">
                                                            <!--begin::Card title-->
                                                            <div class="card-title">
                                                                <h2>images</h2>
                                                            </div>
                                                            <div class="card-body" >
                                                            @if(!empty($news->images))
                                                                                    @foreach($news->images as $image)

                                                                    <div class="card-body text-center pt-0"  id = "image{{$image->id}}">
                                                                        <!--begin::Image input-->
                                                                        <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="">
                                                                            <div   class="image-input-wrapper w-100px h-100px" style="background-image: url(/storage2/{{$image->url}})"></div>
                                                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i id="delete" data-id="{{$image->id}}" class="bi bi-x fs-2"> </i> 
                                                                            </label>  
                                                                        </div>
                                                                        </div>

                                                                        @endforeach
                                                                                @endif
                                                            </div>  

                                            </div>
                                         </div>
                                     
                         
                                        <!--end::Template settings-->
                                    </div>

                                 
                                    <!--end::Aside column-->
                                    <!--begin::Main column-->
                                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
                                            </li>
                                         
                                        </ul>
                                        <!--end:::Tabs-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <!--begin::General options-->
                                                    <div class="card card-flush py-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>General</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                    
                                                        <div class="card-body pt-0">
                                                            <!--begin::Input group-->
                                                           
                                                            <label class="required form-label">  title</label>
                                                                <input type="hidden" name="id" class="form-control mb-2" placeholder="id" value="{{$news->id}}" />
                                                                <input type="text" name="title" class="form-control mb-2" placeholder="title" value="{{$news->title}}" />
                                                              </div>
                                             
                                                        <div>
                                                        <div class="card-body pt-0">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">  title_ar</label>
                                                                 <input type="text" name="title_ar" class="form-control mb-2" placeholder="  name" value="{{$news->title_ar}}" />
                                                              </div>
                                             
                                                              <div>
                                                              <div class="card-body pt-0">

                                                                <label class="form-label">location</label>
                                                                <input type="text"  id = "location" name="location" value = "{{$news->location}}" class="form-control required" placeholder="location"/>
                                                                           
                                                            </div> 
                                                            <div class="card-body pt-0">

                                                            <label class="form-label">location_ar</label>
                                                            <input type="text"  id = "location_ar" name="location_ar" value = "{{$news->location_ar}}" class="form-control required" placeholder="location"/>
                                                                    
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <label class="form-label">description</label>
                                                                <textarea type="text"  id = "description" name="description"  class="form-control required" > {!!$news->description!!}"</textarea>
                                                    
                                                            </div> 
                                                            <div class="card-body pt-0">

                                                                <label class="form-label">description_ar</label>
                                                                <textarea type="text"  id = "description_ar" name="description_ar"  class="form-control required" >{!!$news->description_ar!!}</textarea>
                                                                        
                                                          </div> 
                                                                                                               
     
                                                             
                                                            <div class="card-body pt-0">
                                                                	<div class="control-group form-group">
																	<label class="form-label">date and time </label>
																	<input  type="datetime-local" id = "dateAndTime" name="date" class="form-control required" placeholder="dateAndTime">
															</div>
                                                            

                                            
                                                             
                                                            </div>                      
                                         
 
                                                             
                                                               
                                                            
                                                               
                                                                 
                                                             
                                                         </div>                      
                                         

												<div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h2>Media</h2>
                                                        </div>
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-2">
                                                            <!--begin::Dropzone-->
                                                            <div class="dropzone"  id="dropzone_imgaes">
                                                                <!--begin::Message-->
                                                                <div class="dz-message needsclick">
                                                                    <!--begin::Icon-->
                                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <div class="ms-4">
                                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                                        <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                            </div>
                                                            <!--end::Dropzone-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product media gallery.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card header-->
                                                </div>
                                                <!--end::Media-->
                                                <!--begin::Pricing-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                 
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0">
                                                         
                                                        <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Set Discount Percentage</label>
                                                            <!--end::Label-->
                                                            <!--begin::Slider-->
                                                            <div class="d-flex flex-column text-center mb-5">
                                                                <div class="d-flex align-items-start justify-content-center mb-7">
                                                                    <span class="fw-bolder fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                                    <span class="fw-bolder fs-4 mt-1 ms-2">%</span>
                                                                </div>
                                                                <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                            </div>
                                                         
                                                        </div>
                                                         
                                                    </div>
                                                    <!--end::Card header-->
                                                </div>
                                         

                                                        <!--end::Card header-->
                                                    
                                  
                                             @endif
                                                </div>
                                            </div>
                             
                                        </div>
                                        <!--end::Tab content-->
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Button-->
                                            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                <span class="indicator-label">Save Changes</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                    <!--end::Main column-->
                                </form>

                                
                                <!--end::Form-->
                                </div>
                                </div>
                            
                            <!--end::Container-->
                        </div>
                           
            
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
          
        <script type="text/javascript">

 
             
                                let myDropzone = new Dropzone("#dropzone_imgaes", {
                                autoProcessQueue: false,
                                url: "/]https://keenthemes.com/scripts/void.php",
                                paramName: "file",
                                maxFiles: 5,
                                maxFilesize: 5,
                                acceptedFiles: ".jpeg, .jpg, .png",
                                addRemoveLinks: true,
                                accept: function(e, t) {
                                    "wow.jpg" == e.name ? t("Naha, you don't.") : t();
                                }
                            });
                                var uploader = document.querySelector("#DocumentUpload");
                                Dropzone.autoDiscover = false;
                                $('.dropzone_imgaes').each(function () {

                                        let dropzoneControl = $(this)[0].dropzone;
                                        if (dropzoneControl) {
                                            dropzoneControl.destroy();
                                        }
                                        });                                        
                                
                                function Images() {
                                    return myDropzone.getAcceptedFiles();
                                }
                            
                                $(document).on("click" ,"#delete" ,function(e)
                                {   
                                    var button = this;
                                    var id = button.getAttribute("data-id");
                                    var token = $("meta[name='csrf-token']").attr("content");
        
                                    console.log(id);
                                    
                                    Swal.fire({
                                        title: 'Are you sure?',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                    })
                                    .then((willDelete) => 
                                    {
                                        
                                            if (willDelete.isConfirmed)
                                            {
                                                $.ajax({
                                                        url: "images/delete/"+id,
                                                        method: "DELETE",
                                                        data: 
                                                            {
                                                                "id": id,
                                                                "_token": token,
                                                            },
                                                        success: function(id) {
                                                            var id = "image"+id ; 
                                                            document.getElementById(id).hidden = true  ; 


                                                            
                                                        },
                                                        error: function(xhr, status, error) {
                                                            console.error("AJAX error: " + status + " - " + error);
                                                        }
                                                        });
                                            }
                                            
                                    
                                        });
                                });
                                $('#news_update_form').on('submit',function(e)
                                {   
                                     
                                    e.preventDefault();

                                    let formData = new FormData($('#news_update_form')[0]);

                                            Images().forEach((e) => {
                                           console.log(e);
                                            formData.append('images[]', e);
                                            
                                        });
                                  $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            } });
                                    $.ajax(
                                    {
                                    type:"POST",
                                    url: "update",
                                    data:formData,
                                    contentType:false, // determint type object 
                                    processData: false,  // processing on response 
                                    success:function(response)
                                    {
                                    console.log(response);
                                    console.log("response");

                                     Swal.fire({
                                                    text: "You have successfully reset your password!",
                                                    icon: "success",
                                                    buttonsStyling: false,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: 
                                                    {
                                                        confirmButton: "btn btn-primary"
                                                    }
                                        })
                                       

                                
                                    },
                                
                                    error: function(response) 
                                        {
                                            console.log(response)  ; 
                                                Swal.fire(
                                                    {
                                                            text:  response.responseJSON.message  , 
                                                            icon: "error",
                                                            buttonsStyling: false,
                                                            confirmButtonText: "Ok, got it!",
                                                                customClass: {
                                                                    confirmButton: "btn btn-primary"

                                                                    }
                                                        })
                                        },
                                    });
                                
                                
                                });
                
        </script>                 
                 
@endsection

 

 

												
                                     

