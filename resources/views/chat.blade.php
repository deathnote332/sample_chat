<style>
    html,body, .chat-container{
        width: 100%;
        height: 100%;
    }
    .chat-container{
        position: relative;
    }
        .inbox-container,.friend-list-container,.user-chat-container,.user-profile-container{
            position: relative;
            height: 100%;
            display: block;
            float: left;
        }

        .inbox-container{
            width: 15%;
            background-color: #1d232a;
            color: white;
            position: relative;
        }
            .inbox-header{
                padding: 20px;
            }
                .inbox-header span{
                    font-size: 16px;
                    font-weight: 900;
                }
                .inbox-header img{
                    width: 35px;
                    height: 35px;
                    border-radius: 50%;
                    position: relative;
                    left: 75px;
                }
        .inbox-list ul{
            padding: 0px;

        }
            .inbox-list ul li{
                list-style-type: none;
                padding: 10px 10px 10px 15px;
                position: relative;
                background-color: #343c45;
                margin: 5px 15px;
                border-radius: 5px;
            }
                .inbox-list ul li span:nth-child(2){
                    position: absolute;
                    right: 0px;
                    margin-right: 10px;
                }


        .friend-list-container{
            width: 25%;
            background-color: #242a31;
        }
            .search-friend{
                padding: 20px 30px;
                border-bottom: 1px solid #363d45;
            }
                .search-border{
                    background-color: #363d45;
                    padding: 5px 20px;
                    border-radius: 35px;
                    position: relative;
                    width: 100%;

                }
                    .search-border input[type='text']{
                        outline: none;
                        background-color: transparent;
                        padding-left: 25px;
                        border: none;
                        color:white;
                        background: url('../assets/images/search.png') no-repeat left/15px;
                    }
                    .search-border input[type='text'],.search-border input[type='text']:focus{
                        outline: none;
                        border-color: inherit;
                        -webkit-box-shadow: none;
                        box-shadow: none;
                    }
            .friend-list{
                height: 86%;
                margin: 0px;
                padding: 0px 10px;
            }
            .friend-list ul{
                padding: 0px;
                margin-top: 5px;
            }
                .friend-list ul li{
                    list-style-type: none;
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 5px;
                    color:white;
                    background: #1d232a;
                    position: relative;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                }
                    .friend-image{
                        width: 30%;
                    }
                    .friend-list ul li img{
                        height: 60px;
                        width: 60px;
                        border-radius: 50%;
                    }
                    .friend-data{
                        position: absolute;
                        right: 0px;
                        width:70%;
                        top: 20px;
                    }
                        .friend-name{
                            font-size: 15px;
                        }

                        .friend-message{
                            position: relative;
                            padding-top: 5px;
                            font-size: 11px;
                            width: 80%;
                        }
                        .friend-ago{
                            position: relative;
                            width: 20%;
                            right: 0px;
                            float: right;
                            font-size: 11px;
                            top: -15px;
                        }



        .user-chat-container{
            width: 40%;
            background-color: #eaecf0;
        }
            .user-chat-header{
                margin: 0;
                padding: 2px;
                border-bottom: 1px solid #363d45;
            }
                .user-chat-container{
                    display: block;
                }
                .user-chat-header ul{
                    display: block;
                    margin: 0;
                    padding: 0;
                }
                    .user-chat-header div{
                        display: inline-block;
                        list-style-type: none;
                        height: 80px;
                        text-align: center;
                        padding: 32px 0px 10px 5px;

                    }
                        .user-chat-header div:nth-child(1){
                            width: 65%;
                            text-align: left;
                            padding-left: 30px;
                        }
                        .user-chat-header div:nth-child(2),.user-chat-header div:nth-child(3),.user-chat-header div:nth-child(4){
                            width: 10%;

                            text-align: center;
                        }

                    .user-chat-header div img{
                        height: 30px;
                        width: 30px;
                    }
            .user-chat-body{
                height: 75%;

            }
            .user-chat-body ul{
                margin: 0;
                padding: 0;
            }
            .user-chat-body ul li{
                list-style-type: none;
                margin-bottom: 5px;
            }
                .left-user{
                    display: block;
                }
                
                .left-user div{
                    display: inline-block;
                    vertical-align: top;
                }

                .left-user-image{
                    padding: 10px;
                }
                .left-user-image img{
                    height: 40px;
                    width: 40px;
                    border-radius: 50%;
                }

                .left-user-message{
                    padding: 10px;
                    background-color: white;
                    width: 85%;
                    position: relative;
                    top: 10px;

                }
                .left-user-message span{
                    word-wrap: break-word;
                }


            .user-chat-footer{
                position: absolute;
                bottom:0px;
                display: block;
                width: 100%;
                padding: 0px 0px 10px 0px;
                border-top: 1px solid #363d45;

            }
                .user-chat-footer div{
                    display: inline-block;
                    text-align: center;
                }
                    .user-chat-footer div:nth-child(1),.user-chat-footer div:nth-child(3),.user-chat-footer div:nth-child(4){
                        width: 10%;
                        position: relative;
                        top: -15px;
                    }
                    .user-chat-footer div img{
                        width: 30px;
                        height: 30px;
                    }
                    .chat-area{
                        width: 65%;
                        top: 15px;
                        position: relative;
                    }

                    .chat-area textarea{
                        outline: none;
                        background-color: transparent;
                        padding-top: 10px;
                        border: none;
                        color:black;
                        resize: none;

                     }
                    .chat-area textarea,.chat-area textarea:focus{
                        outline: none;
                        border-color: inherit;
                        -webkit-box-shadow: none;
                        box-shadow: none;
                    }

        .user-profile-container{
            width: 20%;

        }
            .user-profile-header{
                padding: 32px 15px;
                border-bottom: 1px solid #363d45;
            }
            .user-profile-header img{
                width: 30px;
                height: 30px;

            }
            .user-profile-image{
                padding: 30px 0px;
                border-bottom: 1px solid #363d45;
                text-align: center;
            }
            .user-profile-image img{
                width: 120px;
                height: 120px;
                border-radius: 50%;
            }
            .user-profile-name{
                padding-top: 10px;
                font-size: 18px;
                font-weight: 700;
            }
            .user-profile-data{
                height: 50%;
            }
            .user-profile-data ul{
                padding: 10px 0px;
             }
            .user-profile-data ul li{
                list-style-type: none;
                padding: 10px 15px;
                border-bottom: 1px solid #363d45;

            }
            .user-profile-data ul li:last-child{
                border-bottom: none;
            }
            .user-profile-data ul span{
                float: right;
            }


    .mCSB_inside > .mCSB_container {
        margin-right: 20px;
    }

</style>

<div class="chat-container">
   <div class="inbox-container">
       <div class="inbox-header cold-md-12">
           <span>Inbox</span>
           <img src="../assets/images/background.jpg">
       </div>
       <div class="inbox-list">
           <ul>
               <li>
                   <span>All Messages</span>
                   <span>21</span>
               </li>
               <li>
                   <span>Unread</span>
                   <span>29</span>
               </li>
               <li>
                   <span>Important</span>
                   <span>6</span>
               </li>
           </ul>
       </div>
   </div>
   <div class="friend-list-container">
       <div class="search-friend col-md-12">
            <div class="search-border">
                <input type="text" class="form-control" placeholder="Search">
            </div>
       </div>
       <div class="friend-list col-md-12">
           <ul class="friend-list-data">

               <li class="friend-profile">
                   <div class="friend-image">
                       <img src="../assets/images/background.jpg">
                   </div>
                   <div class="friend-data">
                       <span>Matt Thompson</span>
                       <div class="friend-message">
                           <span>Thanks again you have been..</span>
                       </div>
                       <div class="friend-ago">5min</div>
                   </div>
               </li>
           </ul>
       </div>
   </div>
   <div class="user-chat-container">
       <div class="user-chat-header col-md-12">
           <div>
               <span>Matth Thompson is typing...</span>
           </div>
           <div>
               <i class="fa fa-star fa-lg"></i>
           </div>
           <div>
               <i class="fa fa-phone fa-lg"></i>
           </div>
           <div>
               <i class="fa fa-video-camera fa-lg"></i>
           </div>
       </div>
       <div class="user-chat-body col-md-12">
           <ul>
               <li>
                   <div class="left-user">
                       <div class="left-user-image">
                           <img src="../assets/images/background.jpg">
                       </div>
                       <div class="left-user-message">
                           <span> asdasdasdasdasdasd</span>

                       </div>
                   </div>
               </li>
               <li>
                   <div class="left-user">
                       <div class="left-user-image">
                           <img src="../assets/images/background.jpg">
                       </div>
                       <div class="left-user-message">
                           asdasdasdasdasdasdasdaaaaaaaaaaaaaassdasdasda
                           sadasdssssssssssssssssssssssssssssssssssssss
                       </div>
                   </div>
               </li>
           </ul>

       </div>
       <div class="user-chat-footer col-md-12">
           <div>

               <i class="fa fa-paperclip fa-lg"></i>

           </div>
           <div class="chat-area">
               <textarea rows="2" class="form-control" placeholder="Type your message"></textarea>
           </div>
           <div class="chat-action">
               <i class="fa fa-smile-o fa-lg"></i>
           </div>
           <div>
               <i class="fa fa-paper-plane fa-lg"></i>
           </div>
       </div>
   </div>
    <div class="user-profile-container">
        <div class="user-profile-header">
            <i class="fa fa-bell fa-lg"></i>

        </div>
        <div class="user-profile-image">
            <img src="../assets/images/background.jpg">
            <div class="user-profile-name">Matt Thompson</div>
            <div class="user-profile-address">USA</div>
        </div>
        <div class="user-profile-data">
            <ul>
                <li>Nickname: <span>Polds</span></li>
                <li>Tel:<span>11111</span></li>
                <li>Date of Birth:<span>July 22,1995</span></li>
                <li>Language <span>Taglish</span></li>
            </ul>
        </div>
    </div>
</div>


<script>
    var socket = io.connect('192.168.1.193:8891');
    $(document).ready(function(){
        var BASEURL = $('#baseURL').val();
        $('.active-list').mCustomScrollbar();

        $('.friend-list').mCustomScrollbar();

//        loadFriendList();

        loadSearchList();
        $('.user-friend-list').hide();

        $('#search_user').on('keyup',function(){

            var that = this, $allListElements = $('.active-list > li');
            var $matchingListElements = $allListElements.filter(function(i, li){
                var listItemText = $(li).text().toUpperCase(),
                    searchText = that.value.toUpperCase();
                return ~listItemText.indexOf(searchText);
            });
            $allListElements.hide();
            $matchingListElements.show();
        });


        $('#search_user_list').on('keyup',function(){

            if($(this).val()==null && $(this).val()==''){
                $('.user-friend-list').hide();
                alert(this)
            }
        });

        $('#search-btn').on('click',function(){

            if($('#search_user_list').val()!=null && $('#search_user_list').val()!=''){

                var that = $('#search_user_list')[0], $allListElements = $('.user-friend-list > li');
                var $matchingListElements = $allListElements.filter(function(i, li){
                    var listItemText = $(li).text().toUpperCase(),
                        searchText = that.value.toUpperCase();
                    return ~listItemText.indexOf(searchText);

                });

                $allListElements.hide();
                $matchingListElements.show();
                $('.user-friend-list').show();
            }else{

                $('.user-friend-list').hide();
            }

        });

      //  loadActive();



        $('body').delegate('.card-board','click',function(){
            $('.current-user span').text($(this).children('.card-content').children('.user-name').text())
            //load chat data
        })

        socket.emit('current-user',{ user_active: true });

        $('.send-chat').on('click',function(){
            var input =  $('.chat-area').val();
            if(input!=''){
                socket.emit('chat message',{user_id:$('#current_user').data('user_id'),msg:$('.chat-area').val(),user_name:$('#current_user').data('user_name')});
                $('.chat-area').val('');
                return false;
            }else{
                return false;
            }
        });

        socket.on('chat message', function(data){

            if(data.user_id==$('#current_user').data('user_id')){
                $('.chat-body ul').append($('<li class="right-user">').text(data.msg));
                $(".chat-body").mCustomScrollbar({
                    //your options...
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

            }else{
                $('.chat-body ul').append($('<li><img src="../assets/images/background.jpg"><span>'+data.user_name+'</span><div>'+ data.msg +'</div></li>'));
                $(".chat-body").mCustomScrollbar({
                    //your options...
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

            }

        });

        socket.on('current-user',function(data){
         if(data.user_active){
             loadActive();
         }
        });



    });

    function loadActive(){
        var BASEURL = $('#baseURL').val();
        $.ajax({
            url: BASEURL + '/getChat',
            type: 'get',
            data:{
                '_token': $('meta[name="csrf_token"]').attr('content')
            },
            success:function(data){
                $('.active-list').html(data)

            }
        });
    }

    function loadFriendList(){

        var BASEURL = $('#baseURL').val();
        $.ajax({
            url: BASEURL + '/getFriendList',
            type: 'post',
            data:{
                '_token': $('meta[name="csrf_token"]').attr('content')
            },
            success:function(data){
                $('.active-list').html(data)
            }
        });

    }

//    function loadSearchList(){
//        var BASEURL = $('#baseURL').val();
//        $.ajax({
//            url: BASEURL + '/getFriendList',
//            type: 'get',
//            data:{
//                '_token': $('meta[name="csrf_token"]').attr('content')
//            },
//            success:function(data){
//                $('.user-friend-list').html(data)
//
//            }
//        });
//    }

    function loadSearchList(){
        var BASEURL = $('#baseURL').val();
        $.ajax({
            url: BASEURL + '/searchUser',
            type: 'post',
            data:{
                '_token': $('meta[name="csrf_token"]').attr('content'),

            },
            success:function(data){
                $('.user-friend-list').html(data)

            }
        });
    }



</script>