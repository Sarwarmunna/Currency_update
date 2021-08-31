
<?php 
ob_start();
session_start();
error_reporting(0);
// include("../includes/config.php");
// $db = new mysqli($CONF['host'], $CONF['user'], $CONF['pass'], $CONF['name']);
// if ($db->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
// }
$uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['transaction_id']) || isset($_POST['file'])){ 
    // Get the submitted form data 
    $updatePostID     = $_POST['updatePostID'];
    $name = $_POST['transaction_id']; 
    $email = "asif@gmail.com"; 
     
    // Check whether submitted data is not empty 
    if(!empty($name) && !empty($email)){ 
        // Validate email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
          
        }else{ 
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                        $response['message'] = 'File Uploaded Successfully.'; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
               
                 include("../includes/config.php");
                 $db = new mysqli($CONF['host'], $CONF['user'], $CONF['pass'], $CONF['name']);
                 if ($db->connect_errno) {
                  echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
                // Insert form data in the database 
                // $update = $db->query("UPDATE bit_exchanges SET status='3',transaction_id='$transaction_id',image='$fileName' WHERE id=' $updatePostID'");
                 $sql = "UPDATE bit_exchanges SET status='3',transaction_id='$name',image='$fileName'  WHERE id = '$updatePostID' ";

                              $addUser = mysqli_query($db, $sql);
                               if ( $addUser ){
                          $_SESSION['status']="Item added Succesfully";
                           $_SESSION['status_code']="success";          
                                // header('Location: https://sarwar35.com/currency_management/submit_done.php');
                                // exit();
                                // header("Refresh:0");
                               }
                
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 
 
// Return response

header('Content-Type: application/json');


// Return response 
echo  json_encode($response);
exit;
?>
  <?php include "script.php" ?>