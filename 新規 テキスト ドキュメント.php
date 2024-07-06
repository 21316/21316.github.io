<?php
$response = $_POST['recaptcha_response'];
$secret = 'YOUR_SECRET_KEY';

// Recaptcha APIへのリクエスト
$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$responseData = json_decode($verifyResponse);

if($responseData->success) {
    // Recaptcha成功
    echo "Recaptcha success.";
    // その他のフォーム処理をここに追加
} else {
    // Recaptcha失敗
    echo "Recaptcha failed.";
}
?>
