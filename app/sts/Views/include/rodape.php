<footer class="footer bg-danger">
    <div class="container text-center"> 
        <?php
        if (!empty($this->Dados['seo'][0])) {
            extract($this->Dados['seo'][0]);
            echo "©" . $copyright . " " . $urlsite . " - " . $empresa;
        }
        ?>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
<script src="<?php echo URL; ?>assets/js/scrollreveal.min.js"></script>
<script src="<?php echo URL; ?>assets/js/personalizado.js"></script>
</body>
</html>
