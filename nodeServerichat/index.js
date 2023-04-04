// Node server which will handle socket io connection
const {Server } = require('socket.io');

const io = new Server(8000,{
    cors: {
        origin: true,
        credentials: true,
      },
});

const users = {};

io.on("connection", (socket) => {
    socket.on("new-user-joined",(Uname) =>{
        console.log("New User", Uname);
        users[socket.id] = Uname;
        socket.broadcast.emit('user-joined', Uname);
    });
    socket.on('send', message =>{
        socket.broadcast.emit('receive', {message: message, Uname:users[socket.id]})
    });
    socket.on('disconnect', message => {
        socket.broadcast.emit('left', users[socket.id]); 
        delete users[socket.id];
    });
})
