/**
 * Created by john.inhog on 1/12/17.
 */
var app = require('express')();
var server =  require('http').Server(app);
var io = require('socket.io')(server);

server.listen(8890);

io.on('connection', function (socket) {

    console.log("client connected");


    socket.on('notification',function(e){
        io.emit('notification',e) ;
    });

    socket.on('chat message', function(msg){
        io.emit('chat message', msg);
    });

    socket.on('disconnect', function() {
    });

});