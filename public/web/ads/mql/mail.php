<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['phone']; // Get Mobile No
        $message_ur = $_POST['location']; // Get Mobile No
        $question = $_POST['question']; // Get Mobile No
        $to = "yamarketslimited@gmail.com"; // You can change here your Email

        $subject = "'$name' Enquiry for Yamarketsltd Page"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$message_ur</td>
                        </tr>
                    </tbody>
                </table>
            </body>dd
        </html>
        ";
        // HTML Message Ends here
        
$servername = "localhost";
$username = "yacampaign";
$password = "fImnv7l5KM&e";
$dbname = "yacampaign";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO yamarketsltd (name, email, country, question, mobile) VALUES (?,?,?,?,?)");

$stmt->bind_param("sssss", $name,$email_id, $message_ur , $question, $mobile_no );

$stmt->execute();

$stmt->close();

$conn->close();

         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: <$name>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
      
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script> alert('Mail has been sent Successfully.');</script>";
            echo "<script> location.replace('thank-you.php');</script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
            echo "<script> location.replace('index.php');</script>";
        }
    }
?>