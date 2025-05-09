

 <?php $this->load->view('layouts/header'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- MAIN CONTENT -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <!-- HEADER -->
           
        </div><!-- /span -->

        <div class="span9">
            <!-- MAIN CONTENT -->
            <?php $this->load->view('layouts/main_content'); ?>
        </div><!-- /span -->
    </div><!-- /row-fluid -->

    <!-- FOOTER -->
    <?php $this->load->view('layouts/footer'); ?>
</div><!-- /container-fluid -->

</body>
</html>
