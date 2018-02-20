<section id="login">
    <div class="form-wrap" style="max-width: 500px; margin: 0 auto">
        <h1>Contact</h1>
        <form role="form" action="" method="post" id="login-form" autocomplete="off">
            <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required>
            </div>
            <div class="form-group">
                <label for="subject" class="sr-only">username</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
            </div>
            <textarea name="body" id="body" cols="30" rows="3">enter text</textarea>
            
            
            <input type="submit" name="send_email" id="btn-login" class="button success" value="Send email">
        </form>

    </div>
</section>
<hr>
<?php
if(isset($_POST['send_email'])) {

    $to = "info@mail.com";
    $subject = wordwrap($_POST['subject'], 70);
    $body = $_POST['body'];
    $header = "From: " . $_POST['email'];

    mail($to, $subject, $body, $header);
}
?>