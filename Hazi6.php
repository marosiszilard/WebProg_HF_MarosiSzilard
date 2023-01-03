<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $valid = true;
    if (isset($_POST["firstName"]) && empty($_POST["firstName"])){
        echo "Kotelezoen kitoltendo mezo<br>";
        $valid = false;
    }
    if(isset($_POST["lastName"]) && empty($_POST["lastName"])){
        echo "Kotelezoen kitoltendo mezo<br>";
        $valid = false;
    }

    if(isset($_POST["email"] ) && empty($_POST["email"])){
        echo "Kotelezoen kitoltendo mezo<br>";
        $valid = false;
    }else{
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Hibas email formatum<br>";
            echo $emailErr;
            $valid = false;
        }
    }
    if(!isset($_POST["terms"])){
        echo "Muszaj elfogadnod a szerzodesi felteteleket<br>";
        $valid = false;
    }
    if(!isset($_POST['attend'])) {
        echo "Legalabb egy mezot be kell pipalni<br>";
        $valid = false;
    }

    if ($valid){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"] ;
        $tshirt = $_POST["tshirt"];
        $events = $_POST["attend"];
        echo "First name: $firstName <br> 
            Last name: $lastName <br> 
            Email: $email <br> 
            T-Shirt size: $tshirt <br>
            Events: ";
        foreach ($events as $value){
            echo " $value";
        }
    }

}
?>
<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>
