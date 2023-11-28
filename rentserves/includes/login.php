<?


if (isset($_POST['login'])) {
    // ----------------------------------------- Basic Detail Section -----------------------------------------
    // Storing Form values in variable
    $Fullname = mysqli_real_escape_string($conn, $_POST['full-name']);
    $Email = mysqli_real_escape_string($conn, $_POST['user-name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $md5pass = password_hash($password, PASSWORD_ARGON2I);

    // Validate Name of customer
    /* 
            1] Preg_match_all(): This function check any number is avaible in string or not
            2] !\d+! : passing this regular expression in above function which conatin numeric data pattern
            3] Varible : this parameter contains string to be check
            4] logic explain: if() ant numeric value found in string and it is == 1 
        
     */

    if (preg_match_all('!\d+!', $Fullname) == 1) {
        $Fullname_error = "* Numeric value not allowed in First Name";
    }

    // ************************************************** Email Validation *********************************************

    if (!empty($Email) && !empty($password)) {
            $query = "SELECT * FROM users WHERE email = '" . $Email . "'";
            $result2 =  mysqli_query($conn, $query);
            if(mysqli_num_rows($ch_e) == 1){
                while ($det=mysqli_fetch_array($ch_e, MYSQLI_ASSOC)) {
                    $pass = $det['password'];
                    $user_email = $det['email'];
                }
                $status = "registered";
            }
            else {
                $status = "notregistered";
            }
        
    } 
    else {
        $Email_error = "* Please enter your email or username";
        $Pass_error = "* Please enter your password";
        $status = "failed";
    }

    


    // ++++++++++++++++++++++++++++++++++++++++++++++ Basic Detail Ends Here +++++++++++++++++++++++++++++++++++++++++

        if ($status == "registered"){
            if(password_verify($password, $pass))
            {
                $sucess = "You have sucessfully loged in";
                $msg = "You have Sucessfully Loged In";
                $_SESSION['email'] = $user_email;
                $status = "success";
            }
            else {
                $fail = "Invalid Credentials/Password Not Correct";
                $msg = "Invalid Credentials/Password Not Correct";
                $status = "failed";
            }
        } 
        else if ($status == "notregistered"){
            $signup = "INSERT INTO users(fullname, email, password, status) VALUES('$Fullname', '$Email', '$password', 'Not Approved')";
            // query execution
            mysqli_query($conn, $signup) or die(mysqli_error($conn));
            $_SESSION['email'] = $Email;
        }
        else {
            $status = "failed";
        }
                           
}

?>