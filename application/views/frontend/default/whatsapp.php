<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

<link href="<?php echo base_url('uploads/whatsapp/floating-wpp.css') ?>" rel="text/stylesheet" />
<script type="text/javascript" src="<?php echo base_url('uploads/whatsapp/floating-wpp.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

</head>

<body>
    <div id="myButton"></div>
</body>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '5491133359850',
            popupMessage: 'Hello, how can we help you?',
            message: "I'd like to welcome you!..",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: 'crimson',
            // backgroundColor: 'crimson',
            buttonImage: '<img src="<?php echo base_url() ?>uploads/whatsapp/burger.svg" />'
        });
    });
</script>

</html>
