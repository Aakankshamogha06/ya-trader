<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['phone']; // Get Mobile No
        $country = $_POST['location']; // Get Mobile No
        $trade = $_POST['question']; // Get Mobile No
        $to = "felix@yamarkets.com"; // You can change here your Email
 $ip=$_SERVER['REMOTE_ADDR'];
        $subject = "'$name' Enquiry For Yatrader"; // This is your subject
        
                $servername = "localhost";
                $username = "u474763945_ads_user";
                $password = "Ads@123#$";
                $dbname = "u474763945_ads";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                
                 $sql ="INSERT INTO `ads`(`name`, `email`, `phone`, `country`, `trade`, `IP`) VALUES ('$name','$email_id', '$mobile_no','$country','$trade','$ip')";
                
            
                
                if ($conn->query($sql) === TRUE) {


                
                $conn->close();
                 
         
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
                            <td style='width:150px'><strong>Country: </strong></td>
                            <td style='width:400px'>$country</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Tade: </strong></td>
                            <td style='width:400px'>$trade</td>
                        </tr>
                    </tbody>
                </table>
            </body>dd
        </html>
        ";
        // HTML Message Ends here
        
         
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
                } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
?>