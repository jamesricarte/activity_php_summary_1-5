<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP activity summary topic 1-5</title>

    <style>
        * {
    font-family: Arial, Helvetica, sans-serif;
}

body {
    display: flex;
    flex-direction: column;
    align-items: center;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin-bottom: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  td {
    font-size: 14px;
  }

  th {
    font-size: 15px;
  }

  th {
    background-color: rgb(233, 233, 233);
  }
    </style>
</head>
<body>
    
<h1>Student Information Record:</h1>

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Course and Year</th>
            <th>Enrolled:</th>
            <th>Subject</th>
            <th>Grade</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo "James Mickel";?></td>
            <td><?php echo "Cao"?></td>
            <td><?php echo "Ricarte"?></td>
            <td><?php echo "21 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Charles"?></td>
            <td><?php echo "Marfil"?></td>
            <td><?php echo "Alamares"?></td>
            <td><?php echo "21 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Cedric"?></td> 
            <td><?php echo "Dino"?></td>
            <td><?php echo "Naño"?></td>
            <td><?php echo "22 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Emmanuel"?></td> 
            <td><?php echo "Muza"?></td>
            <td><?php echo "Espeña"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Mark Joseph"?></td> 
            <td><?php echo "Montales"?></td>
            <td><?php echo "Ante"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Christian Neil"?></td> 
            <td><?php echo "Villabane"?></td>
            <td><?php echo "Dacillo"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Francis Jay"?></td> 
            <td><?php echo "Sadia"?></td>
            <td><?php echo "Ramirez"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Sean"?></td> 
            <td><?php echo "Felix"?></td>
            <td><?php echo "Palima"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
        <tr>
            <td><?php echo "Kesler Kyle"?></td> 
            <td><?php echo "Romero"?></td>
            <td><?php echo "Culibao"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>        <tr>
            <td><?php echo "Bradley Godfrey"?></td> <?php echo ""?>
            <td><?php echo "Razo"?></td>
            <td><?php echo "Soloria"?></td>
            <td><?php echo "19 years old"?></td>
            <td><?php echo "BSIT-2"?></td>
            <td><?php echo "yes"?></td>
            <td><?php echo "Object-oriented programming in PHP"?></td>
            <td><?php echo 92.1?></td>
        </tr>
    </tbody>
</table>
    
</body>
</html>