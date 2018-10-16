<?php
include 'header.php';

$sqlPosts = 'SELECT * FROM post';

$result = $conn->query($sqlPosts); //runs the query and puts the resulting data into a variable

if (mysqli_num_rows($result) > 0) {
?>
<div class="feed">

<div class="page_name">
<h1>Straipsnių rodymas</h1>
<button class="loop">Prasuk</button>

</div>


<?php
    while ($post = $result->fetch_assoc()) {
        $userid = $post['user_ID'];
        
        // get user info
        $sqlUser = "SELECT * FROM users WHERE id='$userid' LIMIT 1";
        $resultUser = $conn->query($sqlUser);
        $postUser = $resultUser->fetch_assoc();

        ?>
        <article class="post1">
        
        <div class="photo">
            <img src="travel-planning.jpg"/>
            <span>Nuotaukos autorius</span>
        </div>

        <div class="post_name">
            <h3><?php echo $post['title']; ?></h3>
        </div>

        <div class="author">
            <span><?php echo $postUser['first_name'] . '&nbsp' . $postUser['second_name'] . '&nbsp' . 'Data: ' . $post['timestamp']; ?></span>

        </div>

        <div class="content">
            <p><?php echo substr($post['content'], 0, 50 ) . '...' . '<br>' . '<br>';        
                if(strlen($post['content']) > 49) {
                    echo '<a href="post.php?id='.$post['ID'].'">READ MORE</a> &nbsp&nbsp&nbsp';
                } ?></p>
        </div>

    </article>
        <?php 

    }
    ?> 
    </div>
    <?php
}

include 'footer.php';
?>