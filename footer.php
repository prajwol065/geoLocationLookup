    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/jquery.input-ip-address-control-1.0.min.js"></script>
    <script type="text/javascript">
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
            setTimeout(function() {
                window.location.reload();
            }, 0);
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
    </script>
    </body>

    </html>
