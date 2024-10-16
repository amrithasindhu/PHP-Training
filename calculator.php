<html>
    <body>
       <h1>Calculator</h1> 
       
    </body>
    <form method ="POST">
        <input type="number" name='num1' placeholder="First Number">
        <input type="number" name='num2' placeholder="Second Number">
        <select name="operation" required>
            <option value="Add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <input type="submit" value="Calculate">
    </form>
    <?php

    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $operation=$_POST["operation"];
    $result=Null;
    switch($operation)
    {
        Case 'Add':
        $result=$number1 + $number2;
        break;
        Case 'sub':
        $result=$number1 - $number2;
        break;
        Case 'mul':
        $result=$number1 * $number2;
        break;
        case 'division':
            $result=$number1 / $number2;
            break;
        default:
        $result="Invalid Operation";	
        break;
    }
    echo "<h2>Result: $result</h2>";
    ?>
</html>