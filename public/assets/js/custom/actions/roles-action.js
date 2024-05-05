$(document).ready(function($)
{             
 
 
 
            var table = $('.data-table-roles').DataTable(
            {
                 processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "roles",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [
                    
                     {data: 'id', name: 'id'},
                     {data: 'name', name: 'name'},
                     {data: 'action', name: 'action'},]     


            });
 
  
            $(".data-table-roles").on('click', '.deleteRecord[data-id]', function (e)
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
                                    url: "roles/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-roles').DataTable().ajax.reload();
                                    }
                                   , error:function(error) 
                                    {
                                        console.log(error);


                                    }
                                    });

                                }
                            });

                        
                        });

                
                });

 
  
 




});
