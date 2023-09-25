let myDropzone = new Dropzone("#images", {
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
 
    function Images() {
        return myDropzone.getAcceptedFiles();
    }


$(document).ready(function($)
{             

 
            var table = $('.data-table-visualLibraries').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "visualLibraries",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [
                    
                    {data: 'title', name: 'title'},
                     {data: 'description', name: 'description'},
                     {data: 'action', name: 'action'},]     


            });
 
           
            $('#SubmitFormVisaulLibrary').on('submit',function(e)
            {      
                    e.preventDefault();
             

                    let formData = new FormData($('#SubmitFormVisaulLibrary')[0]);
                    
                    Images().forEach((e) => {
                        console.log(e);
                         formData.append('images[]', e);
                         
                     });
                    $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }});
                    $.ajax(
                    {
                            type:"POST",
                            url: "visualLibraries",
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
            $(".data-table-visualLibraries").on('click', '.deleteRecord[data-id]', function (e)
            { 
                        e.preventDefault();
                    $('.show_confirm').click(function(event)
                        {
                    
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
                                    var id = $(this).data("id");
                                    var token = $("meta[name='csrf-token']").attr("content");
                            
                                    $.ajax(
                                    {
                                    url: "visualLibraries/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-visualLibraries').DataTable().ajax.reload();
                                    }
                                    });

                                }
                            });

                        
                        });

                
                });

                $('#visual_update_form').on('submit',function(e)
{   
	 
	e.preventDefault();

	let formData = new FormData($('#visual_update_form')[0]);
    console.log(formData);

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
	type:"post",
	url: "visualLibraries/update",
    data: formData,
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




});





 