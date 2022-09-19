<?php 

$query = "SELECT * FROM post ORDER BY post_id DESC";
$data = mysqli_query($con,$query);

while($row = mysqli_detch_assoc($data)){
    $post_text = $row['post_text'];
    $post_date = $row['post_text'];
}

?>

<div class="tweet__box">
    <div class="tweet__left">
        <img src="images/icone_twitter.png" alt="">
    </div>
    <div class="tweet__body">
        <div class="tweet__header">
            <p class="tweet__name">Code Addict</p>
            <p class="tweet__username">@CodeAddict</p>
            <p class="tweet__date"><?php echo $post_date = date ('M d'); ?></p>
        </div>

        <p class="tweet__text"><?php echo $post_text; ?></p>

        
    </div>
</div>