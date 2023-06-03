<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<style>
    .float-contact {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 99999;
}
.chat-zalo, .chat-facebook, .call-hotline {
  display: block;
  margin-bottom: 6px;
  line-height: 0;
}

@media (max-width: 480px) {
  .chat-zalo, .chat-facebook, .call-hotline {
    display: inline-block;
  }
}
</style>
<div class="float-contact">
<div class="chat-zalo">
<a href="https://zalo.me/0123456789" target="_blank"><img title="Chat Zalo" src="data:image/png;base64,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" alt="zalo-icon" width="40" height="40" /></a>
</div>
<div class="chat-facebook">
<a href="https://m.me/wpcanban" target="_blank"><img title="Chat Facebook" src="https://wpcanban.com/facebook-icon.png" alt="facebook-icon" width="40" height="40" /></a>
</div>
<div class="call-hotline">
<a href="tel:0123456789"><img title="Call Hotline" src="https://wpcanban.com/phone-icon.png" alt="phone-icon" width="40" height="40" /></a>
</div>
</div>


</body>
</html>