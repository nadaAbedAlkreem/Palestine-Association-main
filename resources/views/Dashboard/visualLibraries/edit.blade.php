@extends('Dashboard.layout.app')

@section('content')
 


@if(!empty($visualLibrary))
  
                                            
										
    
<div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
													<form id="visual_update_form"  class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html"  enctype="multipart/form-data">
														@csrf
														<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                      
									  <div class="card card-flush py-4">
									  <!--begin::Card header-->
									   <div class="card-header">
												   <!--begin::Card title-->
												   <div class="card-title">
													   <h2>images</h2>
												   </div>
												   <div class="card-body" >
													   @if(!empty($visualLibrary->images))
                                                                           @foreach($visualLibrary->images as $image)

                                                           <div class="card-body text-center pt-0"  id = "image{{$image->id}}">
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
														
														<div class="card">
																<div class="card-body">

 																			<section>
																			 <label class="form-label">image</label>

																			 <div class="card-body pt-0">
 
                                                                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(/storage2/{{$visualLibrary->image}} )">
                                                                              <div class="image-input-wrapper w-100px h-100px"></div>    
                                                                               <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                                <!--begin::Inputs-->
                                                                                <input type="file" name="image"  />
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
 																				<label class="form-label">title</label>
																				<input type="text"  id = "title" name="title" value = "{{$visualLibrary->title}}" class="form-control required" placeholder="title">
																				<input type="hidden"  id = "id" name="id"  value = "{{$visualLibrary->id}}" >
  																				<label class="form-label">title_ar</label>
																				<input type="text"  id = "title_ar" name="title_ar"  value = "{{$visualLibrary->title_ar}}"class="form-control required" placeholder="title_ar">
                                                                                <div class="control-group form-group">

 
                                                                                <label class="form-label">description</label>
                                                                                <textarea type="text"  id = "description" name="description"    class="form-control required" >{!! $visualLibrary->description !!}</textarea>
                                                                                        
                                                                                 </div> 
                                                                                <div class="control-group form-group">

 
                                                                                <label class="form-label">description_ar</label>
                                                                                <textarea type="text"  id = "description_ar" name="description_ar"    class="form-control required"  >{!! $visualLibrary->description_ar !!}</textarea>
      
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
																					<div class="fv-row mb-1">
																						<!--begin::Dropzone-->
																						<div class="dropzone"  id="images">
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
																		
																			 

																			

																		
 																		</section>
																		</div>
																	</div>
                                                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                                            <span class="indicator-label">Save Changes</span>
                                                                            <span class="indicator-progress">Please wait...
                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                   </button>
															</div>
                                            
														</div>
                                                    
													</form>
                                                </div>

                                                <div>

							@endif
                                                
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{url('assets/js/scripts.bundle.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
 		<script src="{{url('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{url('assets/js/custom/widgets.js')}}"></script>
		<script src="{{url('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{url('assets/js/custom/utilities/modals/users-search.js')}}"></script>
        @push('scripts')
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });		
       </script>
    	@endpush
     		<!-- in this page  -->
	    <script src='assets/js/custom/actions/visual-libraries-actions.js'></script>
 
  
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

// $(document).on("click" ,"#delete" ,function(e)
// {   
// 	var button = this;
// 	var id = button.getAttribute("data-id");
// 	var token = $("meta[name='csrf-token']").attr("content");

// 	console.log(id);
	
// 	Swal.fire({
// 		title: 'Are you sure?',
// 		text: "You won't be able to revert this!",
// 		icon: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Yes, delete it!'
// 	})
// 	.then((willDelete) => 
// 	{
		
// 			if (willDelete.isConfirmed)
// 			{
// 				$.ajax({
// 						url: "images/delete/"+id,
// 						method: "DELETE",
// 						data: 
// 							{
// 								"id": id,
// 								"_token": token,
// 							},
// 						success: function(id) {
// 							var id = "image"+id ; 
// 							document.getElementById(id).hidden = true  ; 


							
// 						},
// 						error: function(xhr, status, error) {
// 							console.error("AJAX error: " + status + " - " + error);
// 						}
// 						});
// 			}
			
	
// 		});
// });


</script>                 
                                         
   
 
@endsection

 

 

												
                                     

