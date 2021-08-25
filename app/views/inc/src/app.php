
<?php
$error_message = false;
$vardas = '';//saugo varda jei rbutu neteisingai suvesti duomenys
$email = '';//saugo email jei rbutu neteisingai suvesti duomenys

    if (isset($_POST['submit'])) {
        $vardas = trim($_POST['vardas']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $phone_number = trim($_POST['phone_number']);
        $message = trim($_POST['message']);
    
        if(!empty($vardas) && !empty($email) && !empty($subject) && !empty($phone_number) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "grumin1979@gmail.com";
                $tema = "$subject";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email . ', ' . $phone_number;
                $zinute = htmlspecialchars($message);
                //mail($to, $tema, $autorius, $zinute, $from);
                //echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime.');</script>";
            } else {
                $error_message = 'Prašome įvesti galiojantį el. pašto adresą.';
            }
        }
        include('db.php');
    }
    header("Location: ../../../../pages.php?page=contact");
?>
