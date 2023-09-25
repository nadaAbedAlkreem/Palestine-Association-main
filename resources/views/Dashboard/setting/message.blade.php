@extends('Dashboard.layout.app')

@section('content')
 

 

                                                      
      
     
    
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Form-->
                                <form id="setting_update_form"  enctype="multipart/form-data" class="form d-flex " data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                    <!--begin::Aside column-->
                                    @csrf
                                
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
                                                                <h2>setting</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                      

                                                        @if(!empty($setting))
                                                          
                                                           @foreach($setting as $item)
                                                            @if (strpos($item->key, "image")) 
                                                            <label class="form-label card-body pt-0">{{$item->key}}</label>
                                                            <div class="card-body pt-0">
                                                            
                                                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(storage2/{{$item->value}})">
                                                                 <div class="image-input-wrapper w-100px h-100px"></div>    
                                                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                                <!--begin::Inputs-->
                                                                                <input type="file" name="{{$item->key}}"  />
                                                                                <input type="hidden" name="avatar_remove" />
                                                                                <!--end::Inputs-->
                                                                            </label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Cancel-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Cancel-->
                                                                            <!--begin::Remove-->
                                                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                <i class="bi bi-x fs-2"></i>
                                                                            </span>
                                                                            <!--end::Remove-->
                                                             </div>	
                                                           </div>	
                                                            @elseif( $item->key=="goals" || $item->key=="goals_ar" || $item->key=="values_principles"  || $item->key=="values_principles_ar" )
                                                                        <div class="card-body pt-0">
                                                                                <label class="form-label">{{$item->key}}</label>
                                                                                <textarea type="text"  id = "{{$item->key}}" name="{{$item->key}}" value = "{!! $item->value !!}" class="form-control required" ></textarea>
                                                                     </div>
                                                       
                                                            @else 
                                                                     <div class="card-body pt-0">
                                                                                <label class="form-label">{{$item->key}}</label>
                                                                                <input type="text"  id = "{{$item->key}}" name="{{$item->key}}" value = "{{$item->value}}" class="form-control required"  />
                                                                     </div>


                                                            @endif
 

                                                           @endforeach

                                                        @endif
                                                    
                                                 
                                                             
                                                               
                                                            
                                                               
                                                                 
                                                             
                                                         </div>                      
                                         

							 
                                         

                                                        <!--end::Card header-->
                                                    
                                  
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
                            
                            <!--end::Container-->
                        </div>
                           
            
    
          
        <script type="text/javascript">


                        $('#setting_update_form').on('submit',function(e)
                                {   
                                     
                                    e.preventDefault();

                                    let formData = new FormData($('#setting_update_form')[0]);

                                   
                                  $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            } });
                                    $.ajax(
                                    {
                                    type:"POST",
                                    url: "message/update",
                                    data:formData,
                                    contentType:false, // determint type object 
                                    processData: false,  // processing on response 
                                    success:function(response)
                                    {
                                    console.log(response);
                                    console.log("response");

                                     Swal.fire({
                                                    text: "You have successfully  update data!",
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

 

 

												
                                     

