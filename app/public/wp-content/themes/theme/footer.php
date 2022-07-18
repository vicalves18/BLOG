<div class="footer">
    <div class="wrap">
        <h2>Fale Conosco</h2>
        <?php
            echo FrmFormsController::get_form_shortcode(array('id'=>2,'key'=>'','title'=>false,'description'=>false,
            'readonly'=>false,'entry_id'=>false));
        ?>
    </div>
</div>
<div class="footer-2">
    <div class="wrap">
        <p>Aprendendo WordPress - &copy; 2022</p>
        <i style="color:blue;" class="bi bi-facebook"></i>
        <i style="color:#6441a5;" class="bi bi-instagram"></i>
        <i style="color:#bb0000;" class="bi bi-youtube"></i>
    </div>
</div>

<?php wp_footer();?>
</body>
</html>