<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entity Encode/Decode | Tools - Things I often find myself using | tyler.ac</title>
    <meta name="title" content="Entity Encode/Decode | Tools - Things I often find myself using | tyler.ac">
    <meta name="description" content="Entity Encode/Decode | Tools - Things I often find myself using | tyler.ac" />

    <link href="assets/css/ee.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/app.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|M0ntserrat:400,700' rel='stylesheet' type='text/css'>
    <style type="text/css">pre{margin:0;padding:0;background:#fff;border:0}</style>
    <?php include_once("assets/inc/header.php"); ?>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="headline col-md-12 text-center">devTools | tyler.ac</div>
            </div>
            <?php include_once("assets/inc/notice.php"); ?>

            <div class="row">
                <?php include_once("assets/inc/nav.php"); ?>

                <div class="col-md-9">
                    <div class="panel-standard colorfromimg">
                        <h3>Entity Encode/Decode</h3>
                        
                        <div class="ee">
                            <h2>Decoded:</h2>
                            <textarea autofocus="">the secret is: ⓍⓎⓏ©</textarea>

                            <h2>Encoded:</h2>
                            <textarea>the secret is: &#x24CD;&#x24CE;&#x24CF;&#xA9;</textarea>

                            <div><label><input type="checkbox" checked=""> only encode unsafe and non-ASCII characters</label></div>
                            <div><label><input type="checkbox"> allow named character references in output (incompatible with older browsers)</label></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
</body>
</html>