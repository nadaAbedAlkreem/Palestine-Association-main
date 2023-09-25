 
$(document).ready(function($)
{             

 
            var table = $('.data-table-donors').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "donors",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 
                   {data:'name',  name:'name'},                                                  
                   {data:'name_ar'   ,  name:   'name_ar'   },
                   {data:'email'  ,    name:   'email'  },
                   {data:'mobile' ,  name: 'mobile' },
                   {data:'project' ,  name: 'project' },
                   {data:'project_ar' ,  name:   'project_ar' },
                   {data:'country' ,    name: 'country' },
                   {data:'country_ar' ,     name:   'country_ar' },
                   {data:'city' ,      name:'city' },
                   {data:'city_ar' , name: 'city_ar' },
                   {data:'announcing_donor' ,     name:   'announcing_donor' },
                   {data:'money' ,              name:   'money' },
                   {data:'donation_method' ,             name:    'donation_method' }]
        
            });
 
           
      


});





 