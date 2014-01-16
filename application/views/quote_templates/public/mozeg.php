<?php setlocale(LC_ALL, 'sl_SI'); ?>

<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>FusionInvoice</title>

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,800,800italic,700italic,900,900italic&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/mozeg/css/style.css">

        <style type="text/css">
            #menu-container {
                margin: auto;
                margin-top: 25px;
                width: 900px;
                top:10px;
                overflow-y: hidden;
            }
            .flash-message {
                font-size: 120%;
                font-weight: bold;
            }
            #footer {
                margin-top: 100px;
                position: static;
            }
        </style>
    </head>

    <body>

        <div id="menu-container">

            <?php if (in_array($quote->quote_status_id, array(2,3))) { ?>
            <a href="<?php echo site_url('guest/view/approve_quote/' . $quote->quote_url_key); ?>" class="btn btn-success"><i class="icon-white icon-check"></i> <?php echo lang('approve_this_quote'); ?></a>
            <a href="<?php echo site_url('guest/view/reject_quote/' . $quote->quote_url_key); ?>" class="btn btn-danger"><i class="icon-white icon-ban-circle"></i> <?php echo lang('reject_this_quote'); ?></a>
            <?php } elseif ($quote->quote_status_id == 4) { ?>
            <a href="#" class="btn btn-success"><?php echo lang('quote_approved'); ?></a>
            <?php } elseif ($quote->quote_status_id == 5) { ?>
            <a href="#" class="btn btn-danger"><?php echo lang('quote_rejected'); ?></a>
            <?php } ?>

            <div class="pull-right">
            <a href="<?php echo site_url('guest/view/generate_quote_pdf/' . $quote_url_key); ?>" class="btn btn-primary"><i class="icon-white icon-print"></i> <?php echo lang('download_pdf'); ?></a> 
            </div>

            <?php if ($flash_message) { ?>
            <div class="alert flash-message">
                <?php echo $flash_message; ?>
            </div>
            <?php } ?>
        </div>

        <div id="invoice-container">

            <?php $this->load->view('quote_templates/mozeg'); ?>

        </div>
    </body>
</html>