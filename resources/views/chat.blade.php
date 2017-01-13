<style>
    html,body, .chat-container{
        width: 100%;
        height: 100%;

    }
    .chat-container{
        position: relative;

    }
        .left-container{
            width: 20%;
            height: 100%;
            float: left;
            background-color: #434753;
            position: relative;
        }
            .search{
                padding-top: 10px;
            }
            .user-list{
                height: 100%;
                padding: 125px 15px 5px 15px;
                position: relative;
                bottom: 110px;
            }
                .user-list ul{
                    padding: 0;
                }
                    .user-list ul li{
                        list-style: none;
                        padding: 7px 0px;
                    }li.card-board{
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        background: gray;
                        margin-bottom: 5px;
                     }.card-content{
                        padding: 0px 10px 0px 10px;
                        position: relative;
                     }
                        .user-list ul li img{
                            background-color: #ffffff;
                            border-radius: 50%;
                            width: 50px;
                            height: 50px;
                        }
                        .user-name{
                            color: white;
                            font-size: 13px;
                            font-weight: lighter;
                            position: relative;
                            left: 10px;
                            top: -8px;
                        }.active{
                             width: 10px;
                             height: 10px;
                             background-color: green;
                             position: absolute;
                             left: 72px;
                             border-radius: 50%;
                             /* display: block; */
                             top: 30px;
                        }.not-active{
                              width: 10px;
                              height: 10px;
                              background-color: red;
                              position: absolute;
                              left: 72px;
                              border-radius: 50%;
                              /* display: block; */
                              top: 30px;
                        }.status{
                               position: absolute;
                               top: 28px;
                               left: 85px;
                               font-size: 11px;
                               font-style: italic;
                        }
            
            .bottom-nav{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px;
            }
                .bottom-nav ul{
                    display: block;
                    margin-bottom: 0px;
                    border-top: solid 1px #ffffff;
                    padding: 10px 0px 0px 10px;

                }
                    .bottom-nav ul li{
                        display: inline-block;
                        padding: 5px 15px 0px 15px;

                    }
                    .bottom-nav ul li img{

                        width: 30px ;
                        height: 30px;
                        background-color: #ffffff;
                    }
        
        .right-container{
            width: 80%;
            height: 100%;
            float: right;
            position: relative;
        }
            .current-user{
                width: 100%;
                padding: 20px;
                border-bottom: 1px solid #434753;

            }
                .current-user img{
                    width: 70px;
                    height: 70px;
                    border-radius: 50%;
                }
            .chat-input-container{
                position: absolute;
                bottom: 0;
                height: 150px;
                width: 100%;
                border-top: 1px solid #434753;
            }
                .chat-input{
                    padding: 20px 20px 0px 30px;
                }
                    .chat-input textarea{
                        resize: none;
                    }
                    .chat-input input[type="button"]{
                        margin-top: 12px;
                        margin-left: 20px;
                    }

    .mCSB_inside > .mCSB_container {
        margin-right: 20px;
    }

    
</style>

<div class="chat-container">
    <div class="left-container">
       <div class="search col-md-12">
           <input class="form-control" type="text" placeholder="Search">
       </div>
        <div class="col-md-12 user-list">
            <ul >
                <li class="card-board">
                    <div class="card-content">
                        <img src="../assets/images/background.jpg">
                        <span class="user-name">Carecen</span>
                        <div class="active"></div>
                        <span class="status">online</span>
                    </div>
                </li>
                <li class="card-board">
                    <div class="card-content">
                        <img src="../assets/images/background.jpg">
                        <span class="user-name">Legal Provider</span>
                        <div class="not-active"></div>
                        <span class="status">offline</span>
                    </div>
                </li>
            </ul>

        </div>
       <div class="bottom-nav">
           <ul>
               <li>
                   <img >
               </li>
               <li>
                   <img >
               </li>
               <li>
                   <img >
               </li>
               <li>
                   <img >
               </li>
           </ul>
       </div>
    </div>
    <div class="right-container">
        <div class="current-user">
            <img src="../assets/images/background.jpg">
            <span style="font-size: 18px;font-weight: 900">Carecen</span>
        </div>
        <div class="chat-body">

        </div>
        <div class="chat-input-container">
            <div class="col-md-12 chat-input">
                <div class="col-md-10" >
                    <div class="row">
                        <textarea class="form-control chat-area" placeholder="Enter Message.." rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="button" class="btn btn-primary btn-lg send-chat" value="Send">
                </div>
            </div>


        </div>

    </div>
</div>

<script>

    var socket = io.connect('127.0.0.1:8890');
    $(document).ready(function(){
        $('.user-list').mCustomScrollbar();

        $('.send-chat').on('click',function(){
            socket.emit('chat message', $('.chat-area').val());
            $('.chat-area').val('');
            return false;
        });

        socket.on('chat message', function(msg){
            $('.chat-body').append($('<li>').text(msg));
        });
    });

</script>