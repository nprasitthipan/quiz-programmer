<!DOCTYPE html>
<html>

<head>
    <title>QUIZ 3</title>

</head>

<body>
    <?php
    $name = [
        101 => "AAA",
        102 => "BBB",
        103 => "CCC"
    ];


    $city = [
        103 => "Singapore",
        102 => "Tokyo",
        101 => "Bangkok"
    ];

    
    ?>
   
    <b>Array1</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
        </thead>
        <?php
        foreach ($name as $x => $y) : ?>
            <tbody>
                <tr>
                    <td><?php echo ($x); ?></td>
                    <td><?php echo ($y); ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>

    </table>
    <br>

    <b>Array2</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>City</th>
            </tr>
        </thead>
        <?php
        foreach ($city as $x => $y) : ?>
            <tbody>
                <tr>
                    <td><?php echo ($x); ?></td>
                    <td><?php echo ($y); ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
    <br>
    <hr>
    <br>

    <b>Output</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
      
            <?php
            foreach (array_diff($name, $city) as $x => $y) : ?>
                <tbody>
                    <tr>
                        <td><?php echo ($x); ?></td>
                        <td><?php echo ($y); ?></td>
                         <td>
                        <?php endforeach; ?>
                       
                        <?php
                         foreach ($city as $i => $j) : ?>
                            <?php echo ($j); ?></td>
                     
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            
           
    </table>
</body>

</html>