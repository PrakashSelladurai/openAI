<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT Chat</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Add CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Add CSRF Token for AJAX requests -->
     <style>
   
     </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="chat-page">
        <div class="chat-container">
            <h2>Chat with ChatGPT</h2>
            <div id="chat-box" class="chat-box">
                <!-- Chat messages will appear here -->
            </div>
            <div class="chat-input-container">
    <input id="message-input" type="text" placeholder="Type your message..." autocomplete="off">
    <button id="send-button">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>
        </div>
    </div>
    <!-- Include JavaScript -->
    <script src="{{ asset('js/chat.js') }}"></script>
</body>
</html>
