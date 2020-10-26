<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<input type="hidden" class="class" id="message" value="<?= $message ?>">
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->


<script>

$( document ).ready(function() {

    message = $("#message").val();

    if(message){s    
        swal({
            text: "Hello world!",
        });
    }

});
</script>
