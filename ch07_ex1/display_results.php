<?php
    // gets email user enters
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
    //gets password user enters
    $password = filter_input(INPUT_POST, 'password');
    
    //get phone number entered by user
    $phone = filter_input(INPUT_POST, 'phone');
   
    // for the heard_from radio buttons,
    //will display value of unknown if the user doesn select a radio button
    $heard_from = filter_input(INPUT_POST, 'heard_from');
    if ($heard_from === NULL) {
        $heard_from = 'Unknown';
    }

    // for the wants_updates check box,
    // display a value of 'Yes' or 'No'
    $wants_updates = $_POST['wants_updates'];
    if (isset($wants_updates)) {
        $wants_updates = 'Yes';
    } else {
        $wants_updates = 'No';
    }
    
    //converts special characters and new lines to display properly. 
    $contact_via = filter_input(INPUT_POST, 'contact_via');

    $comments = filter_input(INPUT_POST, 'comments');
    $comments = htmlspecialchars($comments);  
    $comments = nl2br($comments, false); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>

        <label>Heard From:</label>
        <span><?php echo htmlspecialchars($heard_from); ?></span><br>

        <label>Send Updates:</label>
        <span><?php echo htmlspecialchars($wants_updates); ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo htmlspecialchars($comments); ?></span><br>        
    </main>
</body>
</html>