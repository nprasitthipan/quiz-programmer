<!DOCTYPE html>
<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<head>
    <title>QUIZ 2</title>
</head>

<body>
    ผู้ใช้กรอกได้ 1 ช่อง
    <br>
    <form action method="post">
        <table border="1" style="width: 20%;">
            <tbody>
                <tr>
                    <td style="text-align: center;"><b>100</b></td>
                    <td style="text-align: center;"><b>7</b></td>
                    <td style="text-align: center;"><b>107</b></td>
                    <td style="text-align: center;"><b>3</b></td>
                    <td style="text-align: center;"><b>104</b></td>
                </tr>
                <?php
                    $resultV100 = '';
                    $resultV7 = '';
                    $resultV107 = '';
                    $resultV3 = '';
                    $resultV104 = '';
     
                    if (@$_POST['v100'] != "") {
                        $resultV100 = $_POST['v100'];
                        if ($_POST['v7'] == "") {
                            $resultV7 = (7 * $_POST['v100']) / 100;
                        }
                        if ($_POST['v107'] == "") {
                            $resultV107 = (107 * $_POST['v100']) / 100;
                        }
                        if ($_POST['v3'] == "") {
                            $resultV3 = (3 * $_POST['v100']) / 100;
                        }
                        if ($_POST['v104'] == "") {
                            $resultV104 = (104 * $_POST['v100']) / 100;
                        }
                    } else if (@$_POST['v7'] != "") {
                        $resultV7 = $_POST['v7'];
                        if ($_POST['v100'] == "") {
                            $resultV100 = (100 * $_POST['v7']) / 7;
                        }
                        if ($_POST['v107'] == "") {
                            $resultV107 = (107 * $_POST['v7']) / 7;
                        }
                        if ($_POST['v3'] == "") {
                            $resultV3 = (3 * $_POST['v7']) / 7;
                        }
                        if ($_POST['v104'] == "") {
                            $resultV104 = (104 * $_POST['v7']) / 7;
                        }
                    } else if (@$_POST['v107'] != "") {
                        $resultV107 = $_POST['v107'];
                        if ($_POST['v100'] == "") {
                            $resultV100 = (100 * $_POST['v107']) / 107;
                        }
                        if ($_POST['v7'] == "") {
                            $resultV7 = (7 * $_POST['v107']) / 107;
                        }
                        if ($_POST['v3'] == "") {
                            $resultV3 = (3 * $_POST['v107']) / 107;
                        }
                        if ($_POST['v104'] == "") {
                            $resultV104 = (104 * $_POST['v107']) / 107;
                        }
                    } else if (@$_POST['v3'] != "") {
                        $resultV3 = $_POST['v3'];
                        if ($_POST['v100'] == "") {
                            $resultV100 = (100 * $_POST['v3']) / 3;
                        }
                        if ($_POST['v7'] == "") {
                            $resultV7 = (7 * $_POST['v3']) / 3;
                        }
                        if ($_POST['v107'] == "") {
                            $resultV107 = (107 * $_POST['v3']) / 3;
                        }
                        if ($_POST['v104'] == "") {
                            $resultV104 = (104 * $_POST['v3']) / 3;
                        }
                    } else if (@$_POST['v104'] != "") {
                        $resultV104 = $_POST['v104'];
                        if ($_POST['v100'] == "") {
                            $resultV100 = (100 * $_POST['v104']) / 104;
                        }
                        if ($_POST['v7'] == "") {
                            $resultV7 = (7 * $_POST['v104']) / 104;
                        }
                        if ($_POST['v107'] == "") {
                            $resultV107 = (107 * $_POST['v104']) / 104;
                        }
                        if ($_POST['v3'] == "") {
                            $resultV3 = (3 * $_POST['v104']) / 104;
                        }
                    }

                    function resetForm() {
                       echo "quiz-2.php";
                    }
                ?>

                <tr>
                    <td>
                        <input type="text" name="v100" value="<?php echo $resultV100 ?>" />
                    </td>
                    <td>
                        <input type="text" name="v7" value="<?php echo $resultV7 ?>" />
                    </td>
                    <td>
                        <input type="text" name="v107" value="<?php echo $resultV107 ?>" />
                    </td>
                    <td>
                        <input type="text" name="v3" value="<?php echo $resultV3 ?>" />
                    </td>
                    <td>
                        <input type="text" name="v104" value="<?php echo $resultV104 ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="submit">GO</button> &nbsp;&nbsp;
        <a href=<?php resetForm() ?>>Clear</a>
    </form>
    <br>
    <br>
</body>

</html>