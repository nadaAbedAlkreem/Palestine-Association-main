 
$(document).ready(function($)
{             

 
            var table = $('.data-table-programs').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "programs",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 
                    {data: 'title', name: 'title'},
                    {data: 'brief', name: 'brief'},
                    {data: 'strategic_objective', name: 'strategic_objective'},
                    {data: 'special_objectives', name: 'special_objectives'},
                    {data: 'ativities_events', name: 'ativities_events'},
                    {data: 'action', name: 'action'},]     


            });
 
           
          
            $(".data-table-programs").on('click', '.deleteRecord[data-id]', function (e)
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
                                    console.log(id);
                                    var token = $("meta[name='csrf-token']").attr("content");
                            
                                    $.ajax(
                                    {
                                    url: "programs/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-programs').DataTable().ajax.reload();
                                    }
                                    });

                                }
                            });

                        
                        });

                
                });

                $('#SubmitFormPrograms').on('submit',function(e)
{   
                
                e.preventDefault();

                let formData = new FormData($('#SubmitFormPrograms')[0]);
                   
                  formData.append('ativities_events_ar', tinymce.get("ativities_events_ar").getContent());
                  formData.append('ativities_events', tinymce.get("ativities_events").getContent());



 
                  
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        } });
                $.ajax(
                {
                type:"post",
                url: "programs",
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





 