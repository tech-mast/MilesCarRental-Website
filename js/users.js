function grant(elmt){
    console.log(elmt);
    let grantid = elmt.id;
    console.log(grantid);
    let uid = grantid.split("_")[1];
    console.log(uid);
    let adminid = "#admin_"+uid;
    console.log(adminid);
    let admin = $(adminid).text();
    let sucess;
    console.log(admin);
    var jsonObj;
    if(admin=="No"){
        //grant as admin
        var jsonObj = { isadmin: "yes" };
        sucess = "Yes";
    }else{
        //de-grant as normal client
        var jsonObj = { isadmin: "no" };
        sucess = "No";
    }
    var jsonString = JSON.stringify(jsonObj);
    console.log(jsonString);
    $.ajax({
        url: '/admin/users/grant/' + uid,
        type: 'POST',
        dataType: "json",
        data: jsonString, // body of the request
        success: function(data){
            $(adminid).text(sucess);
            //$(elmt).prop('disabled', false);
            console.log("result: "+data);
            console.log("grant success was called");
        },
        error: function(data) {
            console.log("result: "+data);
            console.log("grant error was called");
        }
    });
}

function reset(elmt){
    console.log(elmt);
    let resetid = elmt.id;
    console.log(resetid);
    let uid = resetid.split("_")[1];
    console.log(uid);
    let driverid = "#driver_"+uid;
    console.log(driverid);
    let driver = $(driverid).text();
    console.log(driver);
    var jsonObj;
    var jsonObj = { password: driver };
    var jsonString = JSON.stringify(jsonObj);
    console.log(jsonString);
    $.ajax({
        url: '/admin/users/reset/' + uid,
        type: 'POST',
        dataType: "json",
        data: jsonString, // body of the request
        success: function(data){
            $(elmt).prop('disabled', true);
            console.log("result: "+data);
            console.log("reset success was called");
        },
        error: function(data) {
            console.log("result: "+data);
            console.log("reset error was called");
        }
    });
}

function add(){
    let fname = $('#newuser_fname').val();
    let lname = $('#newuser_lname').val();
    let birth = $('#newuser_birth').val();
    let phone = $('#newuser_phone').val();
    let driver = $('#newuser_driver').val();
    let company = $('#newuser_company').val();
    let useremail = $('#newuser_email').val();
    let mailing = 0, admin = 0;
    if ($('#newuser_mailing').is(":checked"))
    {
      mailing = 1;
    }
    if ($('#newuser_admin').is(":checked"))
    {
        admin = 1;
    }

    var jsonObj;
    var jsonObj = { firstname: fname, lastname: lname, dateofbirth: birth, 
                    phonenumber: phone, driversliscencenum: driver, companyname: company,
                    email: useremail, password: driver, mailinglist: mailing, isadmin: admin };
    var jsonString = JSON.stringify(jsonObj);
    console.log(jsonString);
    $.ajax({
        url: '/admin/users/add',
        type: 'POST',
        dataType: "json",
        data: jsonString, // body of the request
        success: function(data){
            $("#newuser_id").text(data);
            console.log("result: "+data);
            console.log("add success was called");
            location.reload();
        },
        error: function(data) {
            console.log("result: "+data);
            console.log("add error was called");
        }
    });
}
