<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["name"]))
        {
            $nameErr = "Name is required";
        } 
        else 
        {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {
                $nameErr = "Only letters and white space allowed";
            }
        }
    
        if (empty($_POST["email"])) 
        {
            $emailErr = "Email is required";
        } 
        else 
        {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["message"])) 
        {
            $messageErr = "Message is required";
        } 
        else 
        {
            $message = test_input($_POST["message"]);
        }

        if (empty($_POST["subject"])) 
        {
            $subjectErr = "Subject is required";
        } 
        else 
        {
            $subject = test_input($_POST["subject"]);
        }

        if (empty($_POST["new-community"])) 
        {
            $communityErr = "Community information is required";
        } 
        else 
        {
            $newCommunity = test_input($_POST["new-community"]);
        }
    }

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>