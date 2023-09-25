var selectedValue = 0  ; 

const cardElements = document.querySelectorAll('.cardDonate');
cardElements.forEach((card) => {
 card.addEventListener('click', () => {
    cardElements.forEach((otherCard) => {
     otherCard.classList.remove('active');
    });

    card.classList.add('active');
 
   selectedValue =parseInt( card.querySelector('span').textContent.slice(1));
   console.log(`Selected value: ${selectedValue}`);
  });
});



 
$(".btnDonare").on('click', function (e)
{ 
    


  let formData = new FormData($('#formStoreDonores')[0]);   //announcing_donor
  var checkbox = document.getElementById("announcing_donor");
  var defaultCheck2 = document.getElementById("defaultCheck2");
  var checked_checkbox = (checkbox.checked)  ? 1 : 0 ; 
  var checked_money = (defaultCheck2.checked)  ? 1 : 0 ; 
 formData.append('money',selectedValue);
 formData.append('announcing_donor',checked_checkbox);
 formData.append('defaultCheck2',checked_money);


 

     $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
    $.ajax(
    {
            type:"POST",
            url: "donors/store",
            data:formData,
            contentType:false, // determint type object 
            processData: false,  // processing on response 
            success:function(response)
            {     

                     console.log(formnumber);
 
                
                 
                     Swal.fire({
                      text: "You have successfully send message!",
                      icon: "success",
                      buttonsStyling: false,
                      confirmButtonText: "Ok, got it!",
                      customClass: 
                      {
                          confirmButton: "btn btn-primary",
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
  