<?php
include 'header.php';

$sqlPosts = 'SELECT * FROM post';

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
            echo '<substrong>' . $post['content'] . '</substrong>';
            echo substr($post['content'], 0, 50 ) . '...' . '<br>' . '<br>';        
                if(strlen($post['content']) > 49) {
                    echo '<a href="post.php?id='.$post['ID'].'">READ MORE</a> &nbsp&nbsp&nbsp';
                }        
        echo "</div>";

    }
}

include 'footer.php';
?>