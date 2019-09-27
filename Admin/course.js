function validate(){
  var valid = checkEmpty($("#fname"));
  valid = valid && checkEmpty($("#lname"));
  valid = valid && email($("#email"));
  valid = valid && nic($("#NIC"));
  valid = valid && phone($("#phone"));
  valid = valid && checkEmpty($("#qualify"));

  $("#add_lec").attr("disabled",true);
  if(valid) {
    $("#add_lec").attr("disabled",false);
  }
}

function checkEmpty(obj) {
  var fname = $(obj).attr("fname");
  $("."+fname+"-validation").html("");
  $(obj).css("border","");
  if($(obj).val() == "") {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Required");
    return false;
  }

  return true;
}

function phone(obj) {
  var result = true;

  var fname = $(obj).attr("fname");
  $("."+fname+"-validation").html("");
  $(obj).css("border","");

  result = checkEmpty(obj);

  if(!result) {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Required");
    return false;
  }

  var ph = /^[0-9]{10}$/;
  result = ph.test($(obj).val());

  if(!result) {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Invalid");
    return false;
  }

  return result;
}

function nic(obj) {
  var result = true;

  var fname = $(obj).attr("fname");
  $("."+fname+"-validation").html("");
  $(obj).css("border","");

  result = checkEmpty(obj);

  if(!result) {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Required");
    return false;
  }

  var n = /^[0-9]{9}[vV]{1}$/;
  result = n.test($(obj).val());

  if(!result) {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Invalid");
    return false;
  }

  return result;
}

function email(obj) {
  var result = true;

  var fname = $(obj).attr("fname");
  $("."+fname+"-validation").html("");
  $(obj).css("border","");

  result = checkEmpty(obj);

  if(!result) {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Required");
    return false;
  }

  var e = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  result = e.test($(obj).val());

  if(!result) {
    $(obj).css("border","#FF0000 1px solid");
    $("."+fname+"-validation").html("Invalid");
    return false;
  }

  return result;
}
