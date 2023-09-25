 
$(document).ready(function($)
{             

 
            var table = $('.data-table-employment-order').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "employmentsOrders",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 

                    {data:  'first_name',            name:      'first_name'    },        
                    {data:  'father_name',  name:          'father_name'        } ,  
                    {data:  'grandfather_name', name:        'grandfather_name' } , 
                    {data:  'family_name',  name:        'family_name'          } ,  
                    {data:  'first_name_ar',      name:        'first_name_ar'  } ,      
                    {data:  'father_name_ar',  name:        'father_name_ar'    } ,  
                    {data:  'grandfather_name_ar',   name:          'grandfather_name_ar'  }   ,     
                    {data:  'family_name_ar',  name:        'family_name_ar'               }  ,  
                    {data:  'mobile',     name:        'mobile'               }     ,     
                    {data:  'email',  name:        'email'     },  
                    {data:  'gender', name:        'gender'        }         , 
                    {data:  'gender_ar', name:        'gender_ar'  }   , 
                    {data:  'qualification',name:        'qualification' }   ,
                    {data:  'Birthday', name:        'Birthday'  }  , 
                    {data:  'cv', name:        'cv'            }  
               
                ]     


            });
 
           
      


});





 