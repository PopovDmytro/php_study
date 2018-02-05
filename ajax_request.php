<?php require 'header.php'?>

<script type="text/javascript">
    // sends data to a php file, via GET, and displays the received answer
    function ajaxrequest(serverPage, tagID) {
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');  // XMLHttpRequest object

        // create the URL with data that will be sent to the server (a pair index=value)
        var  url = serverPage+'?test='+document.getElementById('txt1').innerHTML;

        request.open("GET", url, true);      // define the request
        request.send(null);    // sends data

        // Check request status
        // If the response is received completely, will be transferred to the HTML tag with tagID
        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                document.getElementById(tagID).innerHTML = request.responseText;

                console.log(request.responseText);
            }
        }
    }
</script>

<h5 style="cursor:pointer;" onclick="ajaxrequest('file_with_response.php', 'context')"><u>Click</u></h5>
<div id="txt1">A string that will be sent with Ajax to the server and processed with PHP</div>
<div id="context">Here will be displayed the response from the php script.</div>

<?php require 'footer.php'?>


<?php
?>