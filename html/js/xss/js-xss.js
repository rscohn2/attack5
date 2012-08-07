$(document).ready(
    function () {
        $('#docWriteInput').keypress(
            function (e) {
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    // Sends value of input box to document.write without validation
                    document.write($(this).val());
                }
            }
        );

        $('#innerHTMLInput').keypress(
            function (e) {
                var code = (e.keyCode ? e.keyCode : e.which);
                if (code == 13) {
                    // Assigns value of input box to innerHTML without validation
                    $('#innerHTMLOutput').html($(this).val());
                }
            }
        );
        $('#cookieButton').click(
            function (e) {
                // Copy text to cookie
                $.cookie('xssCookie', '<script>alert("You have been pwned!")</script>');
                console.log($.cookie('xssCookie'));
                // Copy cookie to innerHTML
                $('#xssCookieOutput').html($.cookie('xssCookie'));
            }
        );
    }
)
