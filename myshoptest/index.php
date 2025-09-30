<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myshoptest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>list of Client</h2>
        <a class="btn btn-primary" href="/myshoptest/create.php" role="button">New Client</a>
        <br>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Created-at</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $serverName = "localhost";
                $username = "root";
                $password = "";
                $db = "myshoptest";

                $conn = new mysqli($serverName, $username, $password, $db); 

                if($conn->connect_error){
                    die("connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM clients";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: " . $conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[phone]</td>
                            <td>$row[email]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='/myshoptest/edit.php?id=$row[id]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='/myshoptest/delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                    ";
                };
                ?>
        </tbody>
    </table>
</body>
</html>