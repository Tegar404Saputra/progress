<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td>Title</td>
                <td>Author</td>
                <td>Description</td>
            </tr>
            <?php

            foreach ($books as $title => $book)
            {
                echo "<tr>";
                echo "<td> <a href='index.php?book='.$book->title.'> . $book->title . </a> </td>";
                echo "<td>" . $book->author . "</td>";
                echo "<td>" . $book->description . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>