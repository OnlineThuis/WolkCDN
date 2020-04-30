 <!--
79 110 108 105 110 101 84 104 117 105 115 
  ______   .__   __.  __       __  .__   __.  _______ .___________. __    __   __    __   __       _______.
 /  __  \  |  \ |  | |  |     |  | |  \ |  | |   ____||           ||  |  |  | |  |  |  | |  |     /       |
|  |  |  | |   \|  | |  |     |  | |   \|  | |  |__   `---|  |----`|  |__|  | |  |  |  | |  |    |   (----`
|  |  |  | |  . `  | |  |     |  | |  . `  | |   __|      |  |     |   __   | |  |  |  | |  |     \   \    
|  `--'  | |  |\   | |  `----.|  | |  |\   | |  |____     |  |     |  |  |  | |  `--'  | |  | .----)   |   
 \______/  |__| \__| |_______||__| |__| \__| |_______|    |__|     |__|  |__|  \______/  |__| |_______/    
                                                                                                           
-->



 <!-----Start main page CDN ----->
  <script src="https://wolkcdn.com/jquery.min.js"></script>
    <script src="https://wolkcdn.com/bootstrap.min.js"></script>
    <script src="https://wolkcdn.com/-Fixed-Navbar-start-with-transparency-background-BS4-.js"></script>
    <script src="https://wolkcdn.com/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Your name}</title>
    <link rel="stylesheet" href="https://wolkcdn.com/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://wolkcdn.com/-Fixed-Navbar-start-with-transparency-background-BS4-.css">
    <link rel="stylesheet" href="https://wolkcdn.com/Community-ChatComments.css">
    <link rel="stylesheet" href="https://wolkcdn.com/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://wolkcdn.com/Navigation-Clean.css">
    <link rel="stylesheet" href="https://wolkcdn.com/styles.css">
</head>

<!-----End main page CDN ----->


 <!-----Start Follow user ----->
<?php include "{oh sorry make the code}"; ?>
  <!-----end Follow user ----->


  <?php
if (is_dir("/")) {
    $dircheckPath = "";
}elseif (is_dir("../img/")) {
    $dircheckPath = "../";
}elseif (is_dir("../../img/")) {
    $dircheckPath = "../../";
}

// set user online >>> I wrote this code here cuz 'head imports' can access any page
if (isset($_SESSION['Username'])) {
$myid = $_SESSION['id'];
$online_status = "1";
$setStatus = $conn->prepare("UPDATE signup SET online = :online_status WHERE id = :myid");
$setStatus->bindParam(':online_status',$online_status,PDO::PARAM_INT);
$setStatus->bindParam(':myid',$myid,PDO::PARAM_INT);
$setStatus->execute();
}
?>
<script type="text/javascript">
window.onbeforeunload = function(){
    var st = "0";
    $.ajax({
        type: "POST",
        url: "<?php echo $dircheckPath; ?>includes/userStatus.php",


        data: {'st':st}
    });
}
</script>

<!--{  if you do not have a login screen this does not apply, NL 

54 lijn (  url: "<?php echo $dircheckPath; ?>includes/userStatus.php",)
        als u geen inlogscherm heeft, is dit niet van toepassing}

    
-->

<link rel='shortcut icon' type='image/x-icon' href='<? echo $dircheckPath ?>{ web logo local > imgs/favicon.ico  < CDN}' />

<link rel="stylesheet" href="<?php echo $dircheckPath; ?>local > css/style.css  < CDN} " />

<link rel="stylesheet" type="text/css" href="<?php echo $dircheckPath; ?>{ local > css/font-awesome-4.5.0/css/font-awesome.min.css  < CDN}">

<script src="<?php echo $dircheckPath; ?>{local CDN js/jquery.min.js  < CDN} "></script>

<script src="<?php echo $dircheckPath; ?>{local CDN js/jquery.form.min.js  < CDN} "></script>

<link rel="stylesheet" href="<?php echo $dircheckPath; ?>css/bootstrap.min.css  < CDN} ">

<script src="<?php echo $dircheckPath; ?>{local CDN js/bootstrap.min.js  < CDN} "></script>

<script src="<?php echo $dircheckPath; ?>{local CDN js/code.js  < CDN} "></script>


<script type="text/javascript" src="<?php echo $dircheckPath; ?>{local CDN > js/jquery.maxlength.js<!-local < CDN}"></script>


<div id="lightboxImg_myModal" class="lightboxImg_modal" onclick="lightboxClose()">

  <span class="lightboxImgClose" onclick="lightboxClose()">&times;</span>

  <img class="lightboxImg_modal_content" id="lightboxImg_photo">

</div>
