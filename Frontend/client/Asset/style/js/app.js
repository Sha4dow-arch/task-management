const input = document.querySelector('input');
const btn = document.querySelector('button');
 btn.addEventListener('click', login);
 function login() {
     const username = input.value;
        if (username.trim() === '') {
            alert('Please enter a username');
            return;
        }
        localStorage.setItem('username', username);
        window.location.href = "index.html";
    }
