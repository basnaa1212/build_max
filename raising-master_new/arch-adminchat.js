const chatBox = document.getElementById('chat-box');
const chatForm = document.getElementById('chat-form');
const messageInput = document.getElementById('message');

function fetchMessages() {
    fetch('chat.php?sender=architect&receiver=admin')
        .then(response => response.json())
        .then(messages => {
            chatBox.innerHTML = '';
            messages.forEach(msg => {
                const messageDiv = document.createElement('div');
                messageDiv.textContent = msg.message;
                messageDiv.className = msg.sender === 'architect' ? 'architect' : 'admin';
                chatBox.appendChild(messageDiv);
            });
            chatBox.scrollTop = chatBox.scrollHeight;
        });
}

chatForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const message = messageInput.value;

    fetch('chat.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `sender=architect&receiver=admin&message=${encodeURIComponent(message)}`
    }).then(() => {
        messageInput.value = '';
        fetchMessages();
    });
});

setInterval(fetchMessages, 1000); // Poll messages every second
fetchMessages();
