<?php
include 'header.php';

$sqlPosts = 'SELECT * FROM post WHERE user_ID="' . $user['ID'] . '"';

$result = $conn->query($sqlPosts); //runs the query and puts the resulting data into a variable

if (mysqli_num_rows($result) > 0) {

    while ($post = $result->fetch_assoc()) {
        $userid = $post['user_ID'];
        
        // get user info
        $sqlUser = "SELECT * FROM users WHERE id='$userid' LIMIT 1";
        $resultUser = $conn->query($sqlUser);
        $postUser = $resultUser->fetch_assoc();

        // var_dump($postUser);
        echo "<div class='postBox'>";
            echo '<h2>' . $post['title'] . '</h2>';
            echo '<strong>' . 'Paskelbė: ' . $postUser['first_name'] . '&nbsp' . $postUser['second_name'] . '&nbsp' . 'Data: ' . $post['timestamp'] . '</strong>' . '<br><br>';
            echo substr($post['content'], 0, 80 ) . '...' . '<br><br>';   
        echo "</div>";

    }
}

include 'footer.php';
?>