<!DOCTYPE HTML>
<html>
    <?php $this->load->view('layout/head'); ?>
    <body ng-app="ng_app">      
        <div class="page-container">            
            <?php $this->load->view('layout/left_slidbar'); ?>
            <div class="page-content">
                <?php $this->load->view('layout/top_nav'); ?>
                <?php $this->load->view('layout/main_veiw', $data); ?>
            </div>
        </div>
        <?php $this->load->view('layout/footer_js'); ?>
    </body>
</html>