
<?php
ob_start();
session_start();
require "php/config.php";
require_once "php/functions.php";
$db = mysqli_connect("localhost", "root", "", "learnsync");
$post_id=$_GET['id'];
    $results = mysqli_query($db, "SELECT * FROM content_sharing where id= $post_id");
$rows = mysqli_fetch_array($results);
   
  $result = mysqli_query($db, "SELECT * FROM content_sharing INNER JOIN comments ON content_sharing.id = comments.comment_id where content_sharing.id= $post_id");

     
							
    $row = mysqli_fetch_array($result);
	$author=$rows['username'];
	$title=$rows['description'];
	$likes=$rows['likes'];
	$dislikes=$rows['dislikes'];
	$file_path = "files/" . $rows['address'];						
	                       /*$file_path = "files/" . $rows['address'];
		
		$resultss=mysqli_query($db, "SELECT * FROM content_sharing INNER JOIN registration ON content_sharing.username = registration.username where id= $varic");		
                       							$rowss = mysqli_fetch_array($resultss); 
		               $username = $rowss['name'];
					   if ($row['type'] == "photo") {*/
                        
                       
	?>
	<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./CommentPg1.css?<?php echo time();?>F" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=IBM Plex Sans Hebrew:wght@500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Liberation Sans:wght@400&display=swap"
    />
  </head>
  <body>
  
    <div class="comment-pg-1">
      <div class="bg3"><a href = "index2.php" >
  <button id="b1" onclick="window.close();" >Go Back</button>
</a></div>
      <div class="comment-pg-1-child"></div>
	  <a href = "<?php echo $file_path; ?>" target="_blank" >
      <img
        class="comment-pg-1-item"
        alt=""
        src="<?php echo $file_path;?>"
      />
</a>
      <div class="supervised-learning-algorithms8">
        <?php echo $title;?>
      </div>
      <div class="john-doe17"><?php echo $author;?></div>
      <img class="comment-pg-1-inner" alt="" src="./public/ellipse-20@2x.png" />

      <!--<div class="i-will-be5">
        <?php echo $description;?>
      </div>
      <button class="share8">
        <img class="share-icon11" alt="" src="./public/share@2x.png" />

        <div class="div46">30</div>
      </button>-->
	  <form action="photo_dislike_assign.php" method="POST" enctype="multipart/form-data">
	  <input type="hidden" id="content_id" name="content_id" value="<?php echo $post_id;?>">
      <button class="dislike7">
        <div class="div47"><?php echo $dislikes; ?></div>
        <img
          class="icon-thumbs-down3"
          alt=""
          src="./public/-icon-thumbs-down.svg"
        />
      </button>
	  </form>
	  <form action="photo_like_assign.php" method="POST" enctype="multipart/form-data">
	  <input type="hidden" id="content_id" name="content_id" value="<?php echo $post_id;?>">
      <button class="like7" id="submit">
        <img class="fire-icon10" alt="" src="./public/fire@2x.png" />

        <div class="div48"><?php echo $likes; ?></div>
      </button>
	  </form>
      <!--<div class="comment-pg-1-child1"></div>
      <div class="comment-pg-1-child2"></div>
      <div class="participants5">Participants</div>
      <div class="div49">72</div>-->
      <div class="comment-section3">
        <div class="comment-section-child1"></div>
        <div class="comments6">COMMENTS</div>
        <div class="comment-read2">
          <div class="comment-read-section3"></div>
		  <?php
$db = mysqli_connect("localhost", "root", "", "learnsync");   
  $result = mysqli_query($db, "SELECT content_sharing.id,comments.id,username,description,type,address,content_sharing.date,comment_id,comment,date(comments.date) as comment_date FROM content_sharing INNER JOIN comments ON content_sharing.id = comments.comment_id where content_sharing.id= $post_id");
  
while ($row = mysqli_fetch_array($result)) { 

   $comment_author=$row['username'];
   $comment=$row['comment'];
   $date=$row['comment_date'];
	/*$varic=$row['id'];
	
	
	$results=mysqli_query($db, "SELECT * FROM content_sharing where id= $varic");
							$rows = mysqli_fetch_array($results); 
	                        $file_path = "files/" . $rows['address'];
		
		$resultss=mysqli_query($db, "SELECT * FROM content_sharing INNER JOIN registration ON content_sharing.username = registration.username where id= $varic");		
                       							$rowss = mysqli_fetch_array($resultss); 
		               $username = $rowss['name'];
					   if ($row['type'] == "photo") { */
     
							
    					
	                      
                        
                       
	?>
		  
		  
		  
          <div class="comment13">
            <div class="comment1-child4"></div>
            <div class="john-doe18"><?php echo $comment_author;?></div>
            <img
              class="comment1-child5"
              alt=""
              src="./public/ellipse-20@2x.png"
            />

            <div class="div50"><?php echo $date;?></div>
            <div class="comments-description3"><?php echo $comment;?></div>
          </div>
		  <?php } ?>
        </div>
		<form action="assign3.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" id="content_id" name="content_id" value="<?php echo $post_id;?>">
		
        <input
		  name="description"
          class="comment-write3"
          placeholder="Enter you comments here"
          type="text"
          alt
        />

        <button class="send-btn3" id="submit">
          <div class="send3"></div>
          <img class="icon-send3" alt="" src="./public/-icon-send.svg" />
        </button>
		</form>
      </div>
    </div>
  </body>
</html>
