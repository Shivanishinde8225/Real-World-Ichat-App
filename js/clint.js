const socket = io('http://localhost:8000');

const form = document.getElementById('send-container');
const messageInput = document.getElementById('messageInp');
// const meassageContainer = document.querySelector(".container1");
const meassageContainer = document.querySelector(".card-body");
// const meassageContainer2 = document.querySelector(".alert-primary");
var audio = new Audio("ring.mpeg");

const append = (message, position) => {
    const messageElement = document.createElement("div");
    messageElement.innerText = message;
    messageElement.classList.add('message');
    messageElement.classList.add(position);
    meassageContainer.append(messageElement);
    if(position == 'left'){
        audio.play();
        
    }
}
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const message = messageInput.value;
    append(`You : ${message}`,'right');
    socket.emit('send',message);
    messageInput.value =''
})

// const Uname = document.getElementsById('Username');
const Uname = prompt("Enter your name");
socket.emit('new-user-joined', Uname);

socket.on('user-joined', Uname => {
    append(`${Uname} joined the chat`, 'right');
})
socket.on('receive', data => {
    append(`${data.Uname} : ${data.message}`, 'left');
})
socket.on('left', data => {
    append(`${data.Uname} left the chat`, 'left');
})

