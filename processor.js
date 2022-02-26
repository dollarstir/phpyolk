
$(function(){
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
                window.location="/tms/home";
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
                window.location.reload();
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
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    });
}
$('.adduser').submit(function(e){

        e.preventDefault();
        // before();
        var visitors = {
            url: 'processor.php?action=adduser',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: before,
            success: resp

        };
        $.ajax(visitors);
});


$('.addcustomer').submit(function(e){

        e.preventDefault();
        // before();
        var customers = {
            url: 'processor.php?action=addcustomer',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: before,
            success: resp

        };
        $.ajax(customers);
});



$('.adbooking').submit(function(e){

    e.preventDefault();
    // before();
    var bookings = {
        url: 'processor.php?action=addbookings',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(bookings);
});

$('.eventex').submit(function(e){

    e.preventDefault();
    // before();
    var eventx = {
        url: 'processor.php?action=addexcuted',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(eventx);
});

$('.eventeb').submit(function(e){

    e.preventDefault();
    // before();
    var eventb = {
        url: 'processor.php?action=eventbook',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(eventb);
});


$('.addstaff').submit(function(e){

    e.preventDefault();
    // before();
    var staff = {
        url: 'processor.php?action=addstaff',
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

$('.addsession').submit(function(e){

    e.preventDefault();
    // before();
    var session = {
        url: 'processor.php?action=addsession',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});

$('.delsession').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=sessions&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delsession').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});



$('.delvisitor').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=visitors&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delvisitor').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.delbookinfo').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=bookings&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delbookinfo').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.delevntx').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=eventx&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delevntx').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});




$('.delevntb').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=eventb&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delevntb').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});



$('.delcustomer').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=customers&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delcustomer').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.deladmin').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=cmd&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.deladmin').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});



$('.delstaff').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=staff&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delstaff').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.delsalary').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=salary&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delsalary').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});




$('.addadmin').submit(function(e){

    e.preventDefault();
    // before();
    var session = {
        url: 'processor.php?action=addadmin',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.supperlogin').submit(function(e){

    e.preventDefault();
    // before();
    var session = {
        url: 'processor.php?action=supperlog',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});



$('.editadmin').submit(function(e){

    e.preventDefault();
    // before();
    var admininfo = {
        url: 'processor.php?action=editadmin',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(admininfo);
});


$('.addsalary').submit(function(e){

    e.preventDefault();
    // before();
    var admininfo = {
        url: 'processor.php?action=addsalary',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(admininfo);
});

$('.editvisitor').submit(function(e){

    e.preventDefault();
    // before();
    var visitor = {
        url: 'processor.php?action=editvisit',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});


$('.editcustomer').submit(function(e){

    e.preventDefault();
    // before();
    var visitor = {
        url: 'processor.php?action=editcustom',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});


$('.editbooking').submit(function(e){

    e.preventDefault();
    // console.log("ssss");
    // before();
    var visitor = {
        url: '/tms/processor.php?action=editbook',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});

$('.editeventeb').submit(function(e){

    e.preventDefault();
    // console.log("ssss");
    // before();
    var visitor = {
        url: '/tms/processor.php?action=editevbook',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});


$('.editeventex').submit(function(e){

    e.preventDefault();
    // console.log("ssss");
    // before();
    var visitor = {
        url: '/tms/processor.php?action=editevexecute',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});



$('.editsession').submit(function(e){

    e.preventDefault();
    // console.log("ssss");
    // before();
    var visitor = {
        url: '/tms/processor.php?action=editsess',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});


$('.editstaff').submit(function(e){

    e.preventDefault();
    // console.log("ssss");
    // before();
    var visitor = {
        url: '/tms/processor.php?action=editstaff',
        type: 'POST',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(visitor);
});



    
})