<html>
    <head>
        <?php $this->view('blocks/head',$sub_content)?>
    </head>
    <body>
        <?php 
        $this->view('blocks/header');
        $this->view($content,$sub_content);
        $this->view('blocks/footer');
        ?>
    </body>
</html>

