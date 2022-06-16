$("form").submit(function() {
    var errorMessage = "";

    if ($("#ip_addressv4").val() == "" && $("#ip_addressv6").val() == "") {
        errorMessage += 'Ip Addres Field field is empty<br>';
    }


    var isValidv4 = true;
    var isValidv6 = true;
    if ($("#ip_addressv4").val() !== "") {
        /*  alert('here'); */
        var contentv4 = $("#ip_addressv4").val();
        /* alert(contentv4); */
        isValidv4 = checkIfValidIPV4(contentv4);

    } else if ($("#ip_addressv6").val() !== "") {
        var contentv6 = $("#ip_addressv6").val();
        isValidv6 = checkIfValidIPV6(contentv6);
    }
    if (isValidv4 === false) {
        errorMessage += "Wrong ip v4 address format";
    } else if (isValidv6 === false) {
        errorMessage += "Wrong ip v6 address format";
    }

    if (errorMessage == "") {
        return true;
    } else {
        errorMessage = '<div class="alert alert-danger"><strong>There are following errors:</strong><br>' + errorMessage + '</div';
        $("#mesageBox").html(errorMessage);
        return false;
    }
  /*   setTimeout(function() {
        window.location.reload();
    }, 0); */
});

$('#ip_selector').click(function() {
    var content = $('#ip_selector').html();
    if (content == 'Switch To IPV6') {
        $('#ip_selector').html("Switch To IPV4");
        $('#ip_selector').removeClass("btn-info");
        $('#ip_selector').addClass("btn-success");
    } else {
        $('#ip_selector').html("Switch To IPV6");
        $('#ip_selector').addClass("btn-info");
        $('#ip_selector').removeClass("btn-success");
    }

    $('#ip_addressv4').toggleClass("hidden");
    $('#ip_addressv6').toggleClass("hidden");
});

function checkIfValidIPV6(str) {
    const regexExp = /(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))/gi;
    return regexExp.test(str);
}

function checkIfValidIPV4(str) {
    const regexExp = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
    return regexExp.test(str);
}