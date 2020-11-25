<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
   header('Location: send_email.php');
    exit;

}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}



?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>XMAS Party MIW</title>
    <link rel="stylesheet" href="main.css">

</head>
<body class="<?= $body_class ?>">

<form action="send_email.php" method="post">
    <label>
        <input type="email" name="email" placeholder="Ton email de star..." required/>
    </label>
    <button type="submit">Inscris-toi !
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.494 48.31"><defs/><defs/>
            <path d="M18.451 8.27a.708.708 0 00-.926.38l-1.78 4.241-1.772-4.245a.708.708 0 10-1.305.547l2.429 5.8a.708.708 0 001.305 0l2.429-5.8a.708.708 0 00-.38-.923zm0 0M23.911 15.432a.708.708 0 00.708-.708v-2.193h2.1a2.158 2.158 0 100-4.316h-2.813a.708.708 0 00-.708.708v5.8a.708.708 0 00.713.709zm.708-5.8h2.1a.7425.7425 0 110 1.485h-2.1zm0 0M21.496 14.724v-5.8a.708.708 0 10-1.415 0v5.8a.708.708 0 101.415 0zm0 0M19.29 18.183l-.981 3.02a.16.16 0 01-.151.11h-3.175a1.575 1.575 0 00-.925 2.849l2.569 1.866a.159.159 0 01.058.178l-.981 3.02a1.575 1.575 0 002.424 1.761l2.569-1.866a.159.159 0 01.188 0l2.569 1.866a1.575 1.575 0 002.423-1.761l-.981-3.02a.159.159 0 01.058-.178l2.569-1.866a1.575 1.575 0 00-.926-2.849h-3.175a.159.159 0 01-.151-.11l-.981-3.02a1.575 1.575 0 00-3 0zm1.5.327a.146.146 0 01.152.11l.981 3.019a1.571 1.571 0 001.5 1.088h3.175a.16.16 0 01.094.289l-2.569 1.866a1.57 1.57 0 00-.572 1.761l.981 3.02a.159.159 0 01-.245.178l-2.569-1.866a1.57 1.57 0 00-1.851 0l-2.569 1.866a.16.16 0 01-.245-.178l.981-3.02a1.571 1.571 0 00-.572-1.761l-2.569-1.866a.16.16 0 01.094-.289h3.175a1.571 1.571 0 001.5-1.088l.981-3.019a.145.145 0 01.145-.107zm0 0" class="a"/><path d="M0 22.195V47.6a.707.707 0 00.708.708h9.646a.708.708 0 100-1.415H2.962l17.785-12.387 17.785 12.389H13.656a.708.708 0 100 1.415h27.13a.708.708 0 00.708-.708V22.195a.708.708 0 00-.3-.581l-4.922-3.429v-4.433a.708.708 0 00-1.415 0v11.713l-1.415.986V6.811a.708.708 0 00-.712-.711 2.567 2.567 0 01-2.565-2.565.707.707 0 00-.708-.708H12.036a.707.707 0 00-.708.708A2.568 2.568 0 018.764 6.1a.707.707 0 00-.708.708v7.154a.708.708 0 101.415 0V7.455a3.992 3.992 0 003.209-3.209h16.133a3.991 3.991 0 003.209 3.209v19.982l-9.473 6.6-1.4-.974a.708.708 0 00-.809 0l-1.4.974-9.473-6.6v-10.17a.708.708 0 00-1.415 0v9.184l-1.415-.986V2.329a.914.914 0 01.913-.913h26.39a.915.915 0 01.913.913v8.027a.708.708 0 001.415 0V2.329A2.331 2.331 0 0033.94 0H7.554a2.331 2.331 0 00-2.329 2.329v15.857L.3 21.614a.707.707 0 00-.3.581zm5.225-2.285v4.569l-3.28-2.284zM17.706 34.9L1.415 46.247v-22.7zm22.372 11.347L23.787 34.9l16.291-11.349zm-3.81-26.337l3.279 2.284-3.279 2.284zm0 0" class="a"/>
        </svg>
    </button>
</form>
<div class="envoi_reussi">
<img src="img/envoi.png" alt="envoi réussi">
</div>

</body>
</html>