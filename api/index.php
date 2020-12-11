<?php

// header('content-type: application/json');
// echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);

echo '<h2>votre message:' . $_POST['message'] . '</h2>';

echo '<script>
setTimeout(function(){window.location.href = \'/\'}, 3000);
</script>';
