 <?php 

 if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 
    $mailTo = "sizhenchen2020@163.com";
    $headers = "From: ".$Email;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: Contact.html?mailsend");
 }

 ?>