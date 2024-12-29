// Add event listener to the send button
 document.getElementById('send-button').addEventListener('click', async () => {
    const inputField = document.getElementById('message-input');
    const chatBox = document.getElementById('chat-box');
    const message = inputField.value.trim();

    if (message === '') {
        return; // Prevent sending empty messages
    }

    // Display user's message
    chatBox.innerHTML += `<div class="user-info"><p class="user-message">${message}</p></div>`;

    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom

    // Clear the input field
    inputField.value = '';

    try {
        // Send the user's message to the server
        const response = await axios.post('/api/chat', { message });

        // Display ChatGPT's response
        const botMessage = response.data.reply || "No response from ChatGPT."; // Adjust based on your API response structure
        chatBox.innerHTML += `<p class="bot-message">${botMessage}</p>`;
        chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom
    } catch (error) {
        console.error('Error sending message:', error);
        chatBox.innerHTML += `<p class="bot-message">Error: Unable to get response.</p>`;
        chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom
    }
});

// Add "Enter" key functionality for the input field
document.getElementById('message-input').addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent form submission
        document.getElementById('send-button').click();
    }
});