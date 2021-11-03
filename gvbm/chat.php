<?php include '../partial-font/header_gvbm.php' ?>

<head>
  <meta charset="UTF-8">
  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
  <meta name="apple-mobile-web-app-title" content="CodePen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

  <style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,700);

    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    body {
      background: #C5DDEB;
      font: 14px/20px "Lato", Arial, sans-serif;
      padding: 40px 0;
      color: white;
    }

    .container {
      margin: 2% auto;
      width: 750px;
      background: #444753;
      border-radius: 5px;
      padding: 0;
    }

    .people-list {
      width: 260px;
      float: left;
    }

    .people-list .search {
      padding: 20px;
    }

    .people-list input {
      border-radius: 3px;
      border: none;
      padding: 14px;
      color: white;
      background: #6A6C75;
      width: 90%;
      font-size: 14px;
    }

    .people-list .fa-search {
      position: relative;
      left: -25px;
    }

    .people-list ul {
      padding: 20px;
      height: 770px;
    }

    .people-list ul li {
      padding-bottom: 20px;
    }

    .people-list img {
      float: left;
    }

    .people-list .about {
      float: left;
      margin-top: 8px;
      padding-left: 8px;
    }

    .people-list .status {
      color: #92959E;
    }

    .chat {
      width: 490px;
      float: left;
      background: #F2F5F8;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      color: #434651;
    }

    .chat .chat-header {
      padding: 20px;
      border-bottom: 2px solid white;
    }

    .chat .chat-header img {
      float: left;
    }

    .chat .chat-header .chat-about {
      float: left;
      padding-left: 10px;
      margin-top: 6px;
    }

    .chat .chat-header .chat-with {
      font-weight: bold;
      font-size: 16px;
    }

    .chat .chat-header .chat-num-messages {
      color: #92959E;
    }

    .chat .chat-header .fa-star {
      float: right;
      color: #D8DADF;
      font-size: 20px;
      margin-top: 12px;
    }

    .chat .chat-history {
      padding: 30px 30px 20px;
      border-bottom: 2px solid white;
      overflow-y: scroll;
      height: 575px;
    }

    .chat .chat-history .message-data {
      margin-bottom: 15px;
    }

    .chat .chat-history .message-data-time {
      color: #a8aab1;
      padding-left: 6px;
    }

    .chat .chat-history .message {
      color: white;
      padding: 18px 20px;
      line-height: 26px;
      font-size: 16px;
      border-radius: 7px;
      margin-bottom: 30px;
      width: 90%;
      position: relative;
    }

    .chat .chat-history .message:after {
      bottom: 100%;
      left: 7%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
      border-bottom-color: #86BB71;
      border-width: 10px;
      margin-left: -10px;
    }

    .chat .chat-history .my-message {
      background: #86BB71;
    }

    .chat .chat-history .other-message {
      background: #94C2ED;
    }

    .chat .chat-history .other-message:after {
      border-bottom-color: #94C2ED;
      left: 93%;
    }

    .chat .chat-message {
      padding: 30px;
    }

    .chat .chat-message textarea {
      width: 100%;
      border: none;
      padding: 10px 20px;
      font: 14px/22px "Lato", Arial, sans-serif;
      margin-bottom: 10px;
      border-radius: 5px;
      resize: none;
    }

    .chat .chat-message .fa-file-o,
    .chat .chat-message .fa-file-image-o {
      font-size: 16px;
      color: gray;
      cursor: pointer;
    }

    .chat .chat-message button {
      float: right;
      color: #94C2ED;
      font-size: 16px;
      text-transform: uppercase;
      border: none;
      cursor: pointer;
      font-weight: bold;
      background: #F2F5F8;
    }

    .chat .chat-message button:hover {
      color: #75b1e8;
    }

    .online,
    .offline,
    .me {
      margin-right: 3px;
      font-size: 10px;
    }

    .online {
      color: #86BB71;
    }

    .offline {
      color: #E38968;
    }

    .me {
      color: #94C2ED;
    }

    .align-left {
      text-align: left;
    }

    .align-right {
      text-align: right;
    }

    .float-right {
      float: right;
    }

    .clearfix:after {
      visibility: hidden;
      display: block;
      font-size: 0;
      content: " ";
      clear: both;
      height: 0;
    }
  </style>

  <script>
    window.console = window.console || function(t) {};
  </script>

  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>


</head>

<body translate="no">
  <div class="container clearfix">
    <div class="people-list" id="people-list">
      <div class="search">
        <input type="text" placeholder="search" />
        <i class="fa fa-search"></i>
      </div>

      <?php $sql= "SELECT * FROM users WHERE Level like '1'";
              $s1 = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($s1) ?>
      <ul class="list">
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar" />
          <div class="about">
            <div class="name"><?php echo $row['Accout'] ?></div>
            <div class="status">
              <i class="fa fa-circle offline"></i> offline
            </div>
          </div>
        </li>

        <?php $sql= "SELECT * FROM users WHERE Level like '2'";
              $s1 = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($s1) ?>
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
          <div class="about">
            <div class="name"><?php echo $row['Accout'] ?></div>
            <div class="status">
              <i class="fa fa-circle offline"></i>Giáo viên - offline
            </div>
          </div>
        </li>

        <?php $sql= "SELECT * FROM users WHERE Level like '3'";
              $s1 = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($s1) ?>
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
          <div class="about">
            <div class="name"><?php echo $row['Accout'] ?></div>
            <div class="status">
              <i class="fa fa-circle online"></i>Giáo viên - online
            </div>
          </div>
        </li>
        
        <?php $sql= "SELECT * FROM users WHERE Level like '4'";
              $s1 = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($s1) ?>
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" />
          <div class="about">
            <div class="name"><?php echo $row['Accout'] ?></div>
            <div class="status">
              <i class="fa fa-circle online"></i>Học sinh - online
            </div>
          </div>
        </li>

      </ul>
    </div>

    <div class="chat">
      <div class="chat-header clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />

        <div class="chat-about">
          <div class="chat-with">Trần Tú Anh</div>
          <div class="chat-num-messages"></div>
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->

      <div class="chat-history">
        <ul>
          <li class="clearfix">
            <div class="message-data ">
            <span class="message-data-name">Trần Tú Anh</span> <i class="fa fa-circle online"></i>
              <span class="message-data-time">10:10 AM, 2 days ago</span> &nbsp; &nbsp;
            </div>
            <div class="message my-message">
              Cô ơi, khi nào thì nhà trường cho đi học lại ạ?
            </div>
          </li>

          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time">10:12 AM, 2 days ago</span>
              <span class="message-data-name"><i class="fa fa-circle me"></i>Bạn</span>
            </div>
            <div class="message  other-message float-right">
              Nhà trường sẽ thông báo sớm nhất đến quý phụ huynh và học sinh lịch đi học sớm nhất nhé
            </div>
          </li>
        </ul>

      </div> <!-- end chat-history -->

      <div class="chat-message clearfix">
        <textarea name="message-to-send" id="message-to-send" placeholder="Mời bạn nhập tin nhắn" rows="3"></textarea>
        <button>Gửi</button>

      </div> <!-- end chat-message -->

    </div> <!-- end chat -->

  </div> <!-- end container -->

  <script id="message-template" type="text/x-handlebars-template">
    <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> 
      <span class="message-data-name" >Bạn</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>

  <script id="message-response-template" type="text/x-handlebars-template">
    <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Trần Tú Anh </span>
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
</script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
  <script id="rendered-js">
    (function() {

      var chat = {
        messageToSend: '',
        messageResponses: [
          'Em sẽ phản hồi cô khi em đọc được ạ!',
          'Học sinh/ Giáo viên đã nhận được tin nhắn của bạn'
        ],

        init: function() {
          this.cacheDOM();
          this.bindEvents();
          this.render();
        },
        cacheDOM: function() {
          this.$chatHistory = $('.chat-history');
          this.$button = $('button');
          this.$textarea = $('#message-to-send');
          this.$chatHistoryList = this.$chatHistory.find('ul');
        },
        bindEvents: function() {
          this.$button.on('click', this.addMessage.bind(this));
          this.$textarea.on('keyup', this.addMessageEnter.bind(this));
        },
        render: function() {
          this.scrollToBottom();
          if (this.messageToSend.trim() !== '') {
            var template = Handlebars.compile($("#message-template").html());
            var context = {
              messageOutput: this.messageToSend,
              time: this.getCurrentTime()
            };


            this.$chatHistoryList.append(template(context));
            this.scrollToBottom();
            this.$textarea.val('');

            // responses
            var templateResponse = Handlebars.compile($("#message-response-template").html());
            var contextResponse = {
              response: this.getRandomItem(this.messageResponses),
              time: this.getCurrentTime()
            };


            setTimeout(function() {
              this.$chatHistoryList.append(templateResponse(contextResponse));
              this.scrollToBottom();
            }.bind(this), 1500);

          }

        },

        addMessage: function() {
          this.messageToSend = this.$textarea.val();
          this.render();
        },
        addMessageEnter: function(event) {
          // enter was pressed
          if (event.keyCode === 13) {
            this.addMessage();
          }
        },
        scrollToBottom: function() {
          this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
        },
        getCurrentTime: function() {
          return new Date().toLocaleTimeString().
          replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
        },
        getRandomItem: function(arr) {
          return arr[Math.floor(Math.random() * arr.length)];
        }
      };



      chat.init();

      var searchFilter = {
        options: {
          valueNames: ['name']
        },
        init: function() {
          var userList = new List('people-list', this.options);
          var noItems = $('<li id="no-items-found">No items found</li>');

          userList.on('updated', function(list) {
            if (list.matchingItems.length === 0) {
              $(list.list).append(noItems);
            } else {
              noItems.detach();
            }
          });
        }
      };


      searchFilter.init();

    })();
    //# sourceURL=pen.js
  </script>


<?php include '../partial-font/footer_gv.php' ?>