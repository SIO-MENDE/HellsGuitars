<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Hell's Guitars</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="subpage">
<div id="page-wrapper">

<!------------>
<!-- HEADER -->
<!------------>
    <?php include("inc/header.inc.php"); ?>
    
<!------------->
<!-- CONTENU -->
<!------------->
    <section id="content">
        <div class="container">
            <div class="row">                
                
            <!-- SIDEBAR -->
                <div class="col-3 col-12-medium">
                    <?php include("inc/menu.inc.php"); ?>
                </div>
                
            <!-- CONTENU PRINCIPAL -->
                <div class="col-9 col-12-medium imp-medium">
                    <section>
                        <h2>Mentions légales</h2>
                        <p>
                            
                        </p>
                    </section>
                </div>
                
            </div>
        </div>
    </section>

<!------------>
<!-- FOOTER -->
<!------------>
    <?php include("inc/footer.inc.php"); ?>
    
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>