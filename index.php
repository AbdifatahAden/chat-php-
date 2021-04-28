<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat Room</title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="style.css" rel="stylesheet" type="text/css" />
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="center">
            Добро пожаловать в чат
        </h1>
        <div class="row">
            <div class="row">
                <div class="input-field col l12 m12 s12">
                  <input type="text" name="yourName" id="nameInput" >
                  <label class="active" for="first_name2">Имя</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l12 m12 s12">
                    <input class="form-control" rows="10" placeholder="Type your message" cols="70" id="mytexteare" ></input> 
                    <label class="active" for="message">Сообщение</label>
                  </div>
            </div>
            <div class="row" id="sendBtn">
                <a class="waves-effect waves-light btn" class="sentMSG" onclick="sendMessage()" onchange="inputChanged()" id='btn'><i class="material-icons left">send</i>Oтправить</a>
            </div>
        </div>

        <div id="content">
      <div class="container d-flex justify-content-center">
        <div class="card mt-5">
            <div class="d-flex flex-row justify-content-between p-3 adiv text-white"> <i class="fas fa-chevron-left"></i> <span class="pb-3">Live chat</span> <i class="fas fa-times"></i> </div>
            <div id="msgContent">
              <div id="addName">
              
              </div>
              <div class="d-flex flex-row p-3" id="addMessage">
                
              </div>
            </div>
            
            
        </div>
    </div>
        <script src="script.js"></script>
        <script src="jquery.js"></script>
    </div>
	</body>
</html>