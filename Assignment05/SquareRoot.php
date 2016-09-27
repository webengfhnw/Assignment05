<?php
if ((!isset($_POST['submit'])))
    echo '
        <form action="SquareRoot.php" method="POST">
            Number: <input type="text" name="number" value="" size="20" /><br/><br/>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" value="Reset" />
        </form>
';

else if ((empty($_POST['number'])) && (isset($_POST['submit']))) {
    echo '
    <form action="SquareRoot.php" method="POST">
            Number: <input type="text" name="number" value="" size="20" /><br/><br/>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" value="Reset" />
        </form>
';
    echo "There is no data! ";
} else {
    $number = $_POST['number'];
    try {
        if (is_numeric($number) && ($number >= 0)) {
            echo "The square root of " . $number . " is: " . sqrt($number) . "<br/><br/>";
        } else
            throw new Exception("Error!");
    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage() . "<br/><br/>";
    }

    echo "<a href=\"javascript: history.go(-1)\">Back</a>";
}