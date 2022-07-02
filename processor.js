
$(function(){

  // alert('hi there');
   $('#socl').click(function(){
    swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: 'success',
        padding: "2em",
        // target: document.querySelector("html")
      });
   })

    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){
        response = response.trim();

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'removedfromcart'){

          swal({
              title: "Done!",
              text: "Item removed successfusly",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              // window.location.reload();
              $("#cartcount").load('processor/processor.php?action=countcart');
              $("#minicart").load('processor/processor.php?action=viewcart');
              $("#cartot").load('processor/processor.php?action=carttotal');
              $("#vcart").load('processor/processor.php?action=viewmaincart');
              $("#checkcart").load('processor/processor.php?action=checkoutcart');
              $("#mku").load('processor/processor.php?action=cartsubtotal');
              $("#ordtt").load('processor/processor.php?action=carttotal');
              swal.close();
              
            });

      }



      else if(response == 'couponapplied'){

        swal({
            title: "Done!",
            text: "Coupon applied Successfuly",
            timer: 1000,
            type: 'success',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            // window.location.reload();
            $("#cartcount").load('processor/processor.php?action=countcart');
            $("#minicart").load('processor/processor.php?action=viewcart');
            $("#cartot").load('processor/processor.php?action=carttotal');
            $("#vcart").load('processor/processor.php?action=viewmaincart');
            $("#checkcart").load('processor/processor.php?action=checkoutcart');
            // $("#swee").load('processor/processor.php?action=carttotal1');
            $("#diskc").load('processor/processor.php?action=discount');

            $("#mku").load('processor/processor.php?action=cartsubtotal');
           
              $("#ordtt").load('processor/processor.php?action=carttotal');
            swal.close();
            
          });

    }

        else if(response == 'addedtocart'){

          swal({
              title: "Done!",
              text: "Item Added",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              // window.location.reload();
              $("#cartcount").load('processor/processor.php?action=countcart');
              $("#minicart").load('processor/processor.php?action=viewcart');
              $("#cartot").load('processor/processor.php?action=carttotal');
              swal.close();
            });

      }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="dashboard.php";
              });

        }

        else if(response == 'changepasssuccess'){

          swal({
              title: "Success",
              text: "Password updated successfuly",
              timer: 2000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="dashboard.php";
            });

      }
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location='users.php';
              });

        }



        else if(response == 'registered'){

          swal({
              title: "Success",
              text: "Registration Successful",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="ntcreg.php";
            });

      }



      else if(response == 'payadded'){

        swal({
            title: "Success",
            text: "Payment added Successful",
            timer: 1000,
            type: 'success',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            window.location="users.php";
          });

    }
    else if(response == 'userdele'){

      swal({
          title: "Success",
          text: "User Deleted Successfully",
          timer: 1000,
          type: 'success',
          padding: "2em",
          onOpen: function () {
            swal.showLoading();
          },
        }).then(function (result) {
          window.location="users.php";
        });

  }

   


        else if(response == 'loginfailed'){

            swal({
                title: "Oops!",
                text: "Record not found in database! ",
                type: "error",
                padding: "2em",
              });

        }
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function before()
{
    
    swal({
        title: 'Please Wait !',
        html: 'request in progress...',// add html attribute if you want or remove
        allowOutsideClick: false,
        // onBeforeOpen: () => {
        //     Swal.showLoading()
        // },
    });
}



$('.welcome').submit(function(e){

    e.preventDefault();
    // before();
    var staff = {
        url: 'processor/processor.php?action=welcome',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});



// update user
$('.updateuser').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=update',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// login

$('.login').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=login',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

$('.show').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=show',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


$('.showquiz').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=showquiz',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


$('.showdiscert').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=showdiscert',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


$('.showdiscert').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=showdiscert',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});



$('.settdate').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=settdate',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


$('.showdisquiz').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=showdisquiz',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});



// register

$('.register').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=register',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


$(document).on("click", ".payme", function(e) {
  e.preventDefault();

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Added Payment!'
  }).then((result) => {
    
    if (result.isConfirmed) {
      var staff = {
        url: 'processor.php?action=pay',
        type: 'post',
        data: {'id' : $(this).attr('id')},
        // cache: false,
        // contentType: false,
        // processData: false,
        beforeSend: before,
        success: resp
    
    };
    $.ajax(staff);
      // Swal.fire(
      //   'Deleted!',
      //   'Your file has been deleted.',
      //   'success'
      // )
    }
  })

});



$(document).on("click", ".delme", function(e) {
  e.preventDefault();

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Delete User!'
  }).then((result) => {
    
    if (result.isConfirmed) {
      var staff = {
        url: 'processor.php?action=dele',
        type: 'post',
        data: {'id' : $(this).attr('id')},
        // cache: false,
        // contentType: false,
        // processData: false,
        beforeSend: before,
        success: resp
    
    };
    $.ajax(staff);
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })

});
//   swal({

//     title: "Are you sure?",
//     text: "You want to confirm payment",
//     icon: "warning",
//     buttons: ["Yes", "No"],
//     // type: "warning",
//     // showDenyButton: true,
//     // showCancelButton: true,
//     // confirmButtonText: "yes",
//     // denyButtonTet: "No"
//     // showCancelButton: true,
//     // confirmButtonColor: '#DD6B55',
//     // confirmButtonText: 'Yes, I am sure!',
//     // denyButtonText: "No, cancel it!",
//     // closeOnConfirm: false,
//     // closeOnCancel: false
//     dangerMode: true,
//  }).then((result)=>{
//   // alert(result.isDenied);
//     // swal("Shortlisted", "Candidates are successfully shortlisted!", "success");


//    if (result){
//      var staff = {
//       url: 'processor.php?action=pay',
//       type: 'post',
//       data: {'id' : $(this).attr('id')},
//       // cache: false,
//       // contentType: false,
//       // processData: false,
//       beforeSend: before,
//       success: resp
  
//   };
//   $.ajax(staff);
//   // swal("Shortlisted!", "Candidates are successfully shortlisted!", "success");


//     } else {
//       swal("Cancelled", "Action Cancelled", "error");
//     }
//  });
  
// $.ajax(staff1);
  

  


// document.querySelector('#from1').addEventListener('submit', function(e) {
//   var form = this;

//   e.preventDefault(); // <--- prevent form from submitting

//   swal({
//       title: "Are you sure?",
//       text: "You will not be able to recover this imaginary file!",
//       icon: "warning",
//       buttons: [
//         'No, cancel it!',
//         'Yes, I am sure!'
//       ],
//       dangerMode: true,
//     }).then(function(isConfirm) {
//       if (isConfirm) {
//         swal({
//           title: 'Shortlisted!',
//           text: 'Candidates are successfully shortlisted!',
//           icon: 'success'
//         }).then(function() {
//           form.submit(); // <--- submit form programmatically
//         });
//       } else {
//         swal("Cancelled", "Your imaginary file is safe :)", "error");
//       }
//     })
// });

// $('.payme').click(function(e) {
//   e.preventDefault();
//   var staff = {
//     url: 'processor.php?action=pay',
//     type: 'post',
//     data: {'id' : $(this).attr('id')},
//     // cache: false,
//     // contentType: false,
//     // processData: false,
//     beforeSend: before,
//     success: resp

// };
// $.ajax(staff);

// });




// change password

$('.changepass').submit(function(e){

  e.preventDefault();
  // before();
  // var id = $(this).attr('id');
  var staff = {
      url: 'processor.php?action=changepass',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});




    
})