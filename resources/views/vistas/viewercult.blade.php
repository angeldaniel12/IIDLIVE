<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
        <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="/css/chats.css">
    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    
    <script  src="https://cdn.metered.ca/sdk/video/1.4.5/sdk.min.js"></script>
</head>
<body>
<div class="container">
    <!-- listo ya puesto -->
        <h1>Vista de Sala 1</h1> 

        <div class="row">
            <video style="width: 100%" id="video" src="" autoplay muted controls></video>
            
        <!-- </div>
        <label class="form-control-label" for="input-username">Nombre: </label>
            <label for="form-control-label">{{auth()->user()->nombre}}</label>   
        </div> -->


       
    </div>
    <script src="https://cdn.metered.ca/sdk/frame/1.4.3/sdk-frame.min.js"></script>
    <script>
        const ROOM_URL = "chats.metered.live/section-cult"


        const meeting = new Metered.Meeting();
        async function joinMeeting() {
            const response = await meeting.join({
                roomURL: ROOM_URL
            });
        }
        joinMeeting();
        
        let stream = new MediaStream();
        meeting.on("remoteTrackStarted", function(remoteTrack) {
            // Checking if the remoteTrack is video
            // If it is video then removing the old video tracks from the media stream
            // and adding the new video track
            if (remoteTrack.type === "video") {
                stream.getVideoTracks().forEach((track) => {
                    stream.removeTrack(track);
                });
                stream.addTrack(remoteTrack.track);
            }
            // Checking if the remoteTrack is audio
            // If it is audio then removing the old audio tracks from the media stream
            // and adding the new audio track
            if (remoteTrack.type === "audio") {
                stream.getAudioTracks().forEach((track) => {
                    stream.removeTrack(track);
                });
                stream.addTrack(remoteTrack.track);
            }
            document.getElementById("video").srcObject = stream;
        });

    </script>
</body>
</html>