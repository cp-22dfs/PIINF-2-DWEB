<!DOCTYPE html>
<html>
<head>
    <style>
        #chat {
            width: 100px;
            height: 100px;
            position: relative;
            animation: dance 2s infinite;
        }

        @keyframes dance {
            0% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(20px) translateY(-20px);
            }
            50% {
                transform: translateX(0) translateY(0);
            }
            75% {
                transform: translateX(-20px) translateY(-20px);
            }
            100% {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
<div id="chat">
    <img src="catdanse.png" alt="Chat qui danse">
</div>
</body>
</html>
