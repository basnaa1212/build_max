/*const chatBox = document.getElementById('chat-box');
const chatForm = document.getElementById('chat-form');
const messageInput = document.getElementById('message');

function fetchMessages() {
    fetch('chat.php?sender=admin&receiver=architect')
        .then(response => response.json())
        .then(messages => {
            chatBox.innerHTML = '';
            messages.forEach(msg => {
                const messageDiv = document.createElement('div');
                messageDiv.textContent = msg.message;
                messageDiv.className = msg.sender === 'admin' ? 'admin' : 'architect';
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
        body: `sender=admin&receiver=architect&message=${encodeURIComponent(message)}`
    }).then(() => {
        messageInput.value = '';
        fetchMessages();
    });
});

setInterval(fetchMessages, 1000); // Poll messages every second
fetchMessages();*/
// admin-archchat.js

// Ensure the chatbox scrolls to the bottom when a new message is added
/*const chatBox = document.getElementById('chat-box');

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}

// Wait for the DOM to be fully loaded before attaching event listeners
document.addEventListener('DOMContentLoaded', () => {
    // Scroll to the bottom when the page is loaded (in case there are any existing messages)
    scrollToBottom();

    // Add an event listener for the chat form to automatically scroll when a new message is sent
    const chatForm = document.getElementById('chat-form');
    chatForm.addEventListener('submit', () => {
        // Scroll to the bottom after sending a message
        setTimeout(scrollToBottom, 100);
    });

    // Auto-grow the textarea as the user types
    const messageTextarea = document.getElementById('message');
    
    messageTextarea.addEventListener('input', () => {
        // Set the height to 'auto' to shrink the textarea when necessary, and then set it to the scroll height
        messageTextarea.style.height = 'auto';
        messageTextarea.style.height = (messageTextarea.scrollHeight) + 'px';
    });
});

*/
document.addEventListener('DOMContentLoaded', function() {
    // Reference to the chat-box container and message form
    const chatBox = document.getElementById('chat-box');
    const chatForm = document.getElementById('chat-form');
    const messageInput = document.getElementById('message');

    // Function to scroll to the bottom of the chat box when a new message is added
    function scrollToBottom() {
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    // Automatically scroll to the bottom when the page loads (if there are any messages)
    if (chatBox) {
        scrollToBottom();
    }

    // Handle the form submission
    chatForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const message = messageInput.value.trim();
        if (message !== "") {
            // Add the message to the chat box immediately (for user experience)
            const newMessageDiv = document.createElement('div');
            newMessageDiv.classList.add('message');
            newMessageDiv.innerHTML = `
                <strong>Admin:</strong>
                <p>${message}</p>
                <small>Just now</small>
            `;
            chatBox.appendChild(newMessageDiv);

            // Scroll the chat box to the bottom after the new message is added
            scrollToBottom();

            // Clear the message input field
            messageInput.value = '';

            // Send the message to the server via AJAX
            const formData = new FormData(chatForm);
            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Optional: Handle response from the server (if any)
                console.log(data); // For debugging purposes
            })
            .catch(error => {
                console.error("Error sending message:", error);
            });
        }
    });

    // Optional: Auto-refresh messages every few seconds
    setInterval(function() {
        if (window.location.search.includes('architect_id')) {
            const url = new URL(window.location.href);
            const architectId = url.searchParams.get('architect_id');
            if (architectId) {
                // Make an AJAX request to fetch new messages
                fetch(`?architect_id=${architectId}`)
                    .then(response => response.text())
                    .then(data => {
                        // Update the chat box with the latest messages
                        chatBox.innerHTML = data;
                        scrollToBottom();
                    })
                    .catch(error => {
                        console.error("Error fetching messages:", error);
                    });
            }
        }
    }, 5000); // Refresh every 5 seconds
});
