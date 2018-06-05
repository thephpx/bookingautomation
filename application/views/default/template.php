<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php if(isset($page_title)) print $page_title; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="/vendor/thomaspark/bootswatch/dist/sandstone/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php print base_url(); ?>assets/default/css/main.css">
    <link rel="icon" href="<?php print base_url(); ?>assets/default/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php print $this->config->item('site_config_brand','site_config'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php print ($current_nav == 'home' || $current_nav == '') ? 'active' : '';?> ">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php print ($current_nav == 'subaccounts') ? 'active' : '';?>">
                <a class="nav-link" href="<?php echo site_url('subaccounts'); ?>">Sub Accounts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><strong style="color:red;">Logout</strong></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid" style="margin-top:15px;">
    <?php if(isset($page_content)) echo $page_content; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="<?php print base_url(); ?>assets/default/js/scripts.js"></script>
</body>

</html>