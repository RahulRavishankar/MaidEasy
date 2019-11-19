<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["community-name"]))
        {
            $comnameErr = "Community Name is required";
        } 
        else 
        {
            $comname = test_input($_POST["community-name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$comname)) 
            {
                $comnameErr = "Only letters and white space allowed";
            }
        }
    
        if (empty($_POST["community-email"])) 
        {
            $comemailErr = "Community Email is required";
        } 
        else 
        {
            $comemail = test_input($_POST["community-email"]);
            // check if e-mail address is well-formed
            if (!filter_var($comemail, FILTER_VALIDATE_EMAIL))
            {
                $comemailErr = "Invalid email format";
            }
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