<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>php</title>
        <style type="text/css">
            table th, td {
                margin: 20px 0;
                padding: 10px;
                border: 1px solid #c8c8c8;
                font-size: 14px;
            }

            table th {
                text-align: center;
                background-color: #c8c8c8;
            } 
            
           
            </style>
    
    </head>
    <body>
        <table style="table-layout: fixed; width: 900px; margin: auto;">
            <thead>
                <tr>
                    <th>
                        <strong>A</strong>
                    </th>
                    <th>
                        <strong>B</strong>
                    </th>
                    <th>
                        <strong>!A</strong>
                    </th>
                    <th>
                        <strong>A || B</strong>
                    </th>
                    <th>
                        <strong>A &amp;&amp; B</strong>
                    </th>
                    <th>
                        <strong>A xor B</strong>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <?php
                        $A1 = 0;
                        echo $A1;
                        ?>
                    </td>
                    <td>
                        <?php
                        $B1 = 0;
                        echo $B1;
                        ?>    
                    </td>
                    <td>
                        <?php
                        echo (!$A1) ? 'true' : 'false';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($A1 || $B1) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A1 && $B1) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A1 xor $B1) ? 'true' : 'false';
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $A2 = 0;
                        echo $A2;
                        ?>
                    </td>
                    <td>
                        <?php
                        $B2 = 1;
                        echo $B2;
                        ?>    
                    </td>
                    <td>
                        <?php
                        echo (!$A2) ? 'true' : 'false';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($A2 || $B2) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A2 && $B2) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A2 xor $B2) ? 'true' : 'false';
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $A3 = 1;
                        echo $A3;
                        ?>
                    </td>
                    <td>
                        <?php
                        $B3 = 0;
                        echo $B3;
                        ?>    
                    </td>
                    <td>
                        <?php
                        echo (!$A3) ? 'true' : 'false';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($A3 || $B3) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A3 && $B3) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A3 xor $B3) ? 'true' : 'false';
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $A4 = 1;
                        echo $A4;
                        ?>
                    </td>
                    <td>
                        <?php
                        $B4 = 1;
                        echo $B4;
                        ?>    
                    </td>
                    <td>
                        <?php
                        echo (!$A4) ? 'true' : 'false';
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($A4 || $B4) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A4 && $B4) ? 'true' : 'false';
                        ?> 
                    </td>
                    <td>
                        <?php
                        echo ($A4 xor $B4) ? 'true' : 'false';
                        ?> 
                    </td>
                </tr>
            </tbody>
        </table>
<br>
<br>
<br>
<h3 style="text-align: center;"> Гибкое сравнение в PHP </h3>
        <table style="table-layout: fixed; width: 900px; margin: auto;">
            <thead>
                <tr>
                    <th width="10px"></th>
                    <th width="10px">
                        <?php
                        $column1 = true;
                        echo ($column1) ? 'true' : 'false';
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column2 = false;
                        echo ($column2) ? 'true' : 'false';
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column3 = 1;
                        echo $column3;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column4 = 0;
                        echo $column4;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column5 = -1;
                        echo $column5;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column6 = "1";
                        echo '"'.$column6.'"';
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column7 = null;
                        echo ($column7 === null) ? 'null' : 'not_null';;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $column8 = "php";
                        echo '"'.$column8.'"';
                        ?>
                    </th>
                </tr>        
            </thead>

            <tbody>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line1 = true;
                        echo ($line1) ? 'true' : 'false';
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line1) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line2 = false;
                        echo ($line2) ? 'true' : 'false';
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line2) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line3 = 1;
                        echo $line3;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line3) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line4 = 0;
                        echo $line4;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line4) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line5 = -1;
                        echo $line5;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line5) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line6 = "1";
                        echo '"'.$line6.'"';
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line6) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line7 = null;
                        echo ($line7 === null) ? 'null' : 'not_null';;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line7) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $line8 = "php";
                        echo '"'.$line8.'"';
                        ?>       
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($column1 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column2 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column3 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column4 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column5 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column6 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column7 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($column8 == $line8) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
            </tbody>
        </table>

<br>
<br>
<br>
<h3 style="text-align: center;"> Жёсткое сравнение в PHP </h3>
        <table style="table-layout: fixed; width: 900px; margin: auto;">
            <thead>
                <tr>
                    <th width="10px"></th>
                    <th width="10px">
                        <?php
                        $sec_column1 = true;
                        echo ($sec_column1) ? 'true' : 'false';
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column2 = false;
                        echo ($sec_column2) ? 'true' : 'false';
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column3 = 1;
                        echo $sec_column3;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column4 = 0;
                        echo $sec_column4;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column5 = -1;
                        echo $sec_column5;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column6 = "1";
                        echo '"'.$sec_column6.'"';
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column7 = null;
                        echo ($sec_column7 === null) ? 'null' : 'not_null';;
                        ?>
                    </th>
                    <th width="10px">
                        <?php
                        $sec_column8 = "php";
                        echo '"'.$sec_column8.'"';
                        ?>
                    </th>
                </tr>        
            </thead>

            <tbody>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line1 = true;
                        echo ($sec_line1) ? 'true' : 'false';
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line1) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line2 = false;
                        echo ($sec_line2) ? 'true' : 'false';
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line2) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line3 = 1;
                        echo $sec_line3;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line3) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line4 = 0;
                        echo $sec_line4;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line4) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line5 = -1;
                        echo $sec_line5;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line5) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line6 = "1";
                        echo '"'.$sec_line6.'"';
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line6) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line7 = null;
                        echo ($sec_line7 === null) ? 'null' : 'not_null';;
                        ?>
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line7) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
                <tr>
                <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;">
                    <strong>
                        <?php
                        $sec_line8 = "php";
                        echo '"'.$sec_line8.'"';
                        ?>       
                    </strong>
                </td>
                <td>
                    <?php
                    echo ($sec_column1 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column2 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column3 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column4 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column5 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column6 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column7 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($sec_column8 === $sec_line8) ? 'true' : 'false';
                    ?>
                </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>