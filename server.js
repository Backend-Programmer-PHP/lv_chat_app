var app = require('express')();
// require 'cors'
const cors = require('cors')
// Add CORS before any other routing
app.use(cors());
const http = require('http').createServer(app);
const io = require('socket.io')(http);




http.listen(4000, function () {
    console.log('Listening to port 4000');
});
// io.on('connection', function (socket) {
//     socket.on("user_connected", function (user_id) {
//         // users[user_id] = socket.id;
//         // io.emit('updateUserStatus', users);
//         console.log("user connected "+ user_id);
//     });
// });
