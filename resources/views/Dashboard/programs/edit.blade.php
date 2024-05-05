@extends('Dashboard.layout.app')

@section('content')
   

									
@if(!empty('programs'))
    
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
											 		<form id="SubmitFormProgramsEdit"  class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html"  enctype="multipart/form-data">
 											           @csrf		 	
														<input type="hidden" id = "language" name="language" value="{{ App::getLocale() }}">

													   <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                      
														<div class="card card-flush py-4">
														<!--begin::Card header-->
														<div class="card-header">
																	<!--begin::Card title-->
																	<div class="card-title">
																		<h2>{{__('columns.image')}}</h2>
																	</div>
																	<div class="card-body" >
																	<div class="card-body pt-0">
                                                    <!--begin::Select2-->
												              	<label class="form-label">{{__('columns.image')}}</label>

																	<div class="card-body pt-0">

																	<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(/storage2/{{$programs->image}})">
																	<div class="image-input-wrapper w-100px h-100px"></div>    
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="bi bi-pencil-fill fs-7"></i>
																	<!--begin::Inputs-->
																	<input type="file" name="image" id = "image"  />
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

															        </div>

																	
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
														
														<div class="card">
																<div class="card-body">

 																			<section>



                                                                            @if($CurrentLang == "en")
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.title')}}</label>
																			<input type="text"  id = "title" name="title"      value ="{{$programs->title}}" class="form-control required" placeholder="{{__('columns.title')}}">
																			</div> 
																			
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.brief')}}</label>
																			<input type="text"  id = "brief" name="brief"   value ="{{$programs->brief}}"       class="form-control required" placeholder="{{__('columns.brief')}}">
																			</div> 
																			<div class="control-group form-group">
 																			<label class="form-label">{{__('columns.strategic_objective')}}</label>
																			<input type="text"  id = "strategic_objective"       value ="{{$programs->strategic_objective}}"       name="strategic_objective" class="form-control required" placeholder="{{__('columns.strategic_objective')}}">
																			</div> 
																			<div class="control-group form-group">
 																			<label class="form-label">{{__('columns.special_objectives')}}</label>
																			<input type="text"  id = "special_objectives" name="special_objectives" class="form-control required"  value ="{{$programs->special_objectives}}" placeholder="{{__('columns.special_objectives')}}">
																			</div> 
																			<div class="control-group form-group">
 																			<label class="form-label">{{__('columns.ativities_events')}}</label>
																			<textarea 
																			type="text"  id = "ativities_events" name="ativities_events"    class="form-control required" placeholder="{{__('columns.ativities_events')}}">{!! $programs->ativities_events !!}</textarea>
																			</div>  
																			@else 


																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.title')}}</label>
																			<input type="text"  id = "title_ar" name="title_ar" value ="{{$programs->title_ar}}"   class="form-control required" placeholder="{{__('columns.title')}}">
																			</div> 
																			<div class="control-group form-group">
																			<label class="form-label">{{__('columns.brief')}}</label>
																			<input type="text"  id = "brief_ar" name="brief_ar"  value ="{{$programs->brief_ar}}"   class="form-control required" placeholder="{{__('columns.brief')}}">
																			</div> 
																			
																			<div class="control-group form-group">
 																			<label class="form-label">{{__('columns.strategic_objective')}}</label>
																			<input type="text"  id = "strategic_objective_ar" name="strategic_objective_ar" value ="{{$programs->strategic_objective_ar}}"   class="form-control required" placeholder="{{__('columns.strategic_objective')}}">
																			</div> 
																		
																			<div class="control-group form-group">
 																			<label class="form-label">{{__('columns.special_objectives')}}</label>
																			 <input type="text"  id = "special_objectives_ar" name="special_objectives_ar" class="form-control required"  value ="{{$programs->special_objectives_ar}}" placeholder="{{__('columns.special_objectives')}}">
																			 <input type="hidden"  id = "id" name="id" class="form-control required"  value ="{{$programs->id}}" placeholder="special  objective ar">
																			</div>  
																		
																			<div class="control-group form-group">
 																			<label class="form-label">{{__('columns.ativities_events')}}</label>
																			<textarea type="text"  id = "ativities_events_ar" name="ativities_events_ar"   class="form-control required" placeholder="{{__('columns.ativities_events')}}">{!! $programs->ativities_events_ar !!}</textarea>
																			</div> 
																			@endif

													 
																		 
	
																		</div> 

													 
																		 
						  
																			
 																		</section>
																		 
                                                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                                            <span class="indicator-label">{{__('button.Save')}}</span>
                                                                            <span class="indicator-progress">Please wait...
                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                   </button>
															</div>
                                            
														</div>
                                                    
													</form>
													</div>
													</div>

                                                <div>
@endif


  
                                                
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
				<!-- <script src="{{url('assets/js/scripts.bundle.js')}}"></script> -->
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
  
        @push('scripts')
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });		
       </script>
    	@endpush
     	

		<script  type= text/javascript>
         
			 $('#SubmitFormProgramsEdit').on('submit',function(e)
            {      
                    e.preventDefault();
             

                    let formData = new FormData($('#SubmitFormProgramsEdit')[0]);
	 
 
                    
            
                    $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }});
                    $.ajax(
                    {
                            type:"post",
                            url: "programs/update",
                            data:formData,
                            contentType:false, // determint type object 
                            processData: false,  // processing on response 
                            success:function(response)
                            {
                            $('#successMsg').show();
                            console.log(response);
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

                                console.log(response);
                                console.log("response");
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

 

 

												
                                     

