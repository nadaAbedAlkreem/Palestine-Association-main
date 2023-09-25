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

 
            var table = $('.data-table-partners').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "partners",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action'},]     


            });
 
           
          
            $(".data-table-partners").on('click', '.deleteRecord[data-id]', function (e)
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
                                    url: "partners/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-partners').DataTable().ajax.reload();
                                    }
                                    });

                                }
                            });

                        
                        });

                
                });

                $('#SubmitFormPartners').on('submit',function(e)
{   
                
                e.preventDefault();

                let formData = new FormData($('#SubmitFormPartners')[0]);
 
                  
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        } });
                $.ajax(
                {
                type:"post",
                url: "partners",
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





 