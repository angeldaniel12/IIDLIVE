<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presenter</title>
        <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <script  src="https://cdn.metered.ca/sdk/video/1.4.5/sdk.min.js"></script>
</head>
<body>
<div class="container">
        <h1>Vista de Sala 3</h1>

        <div class="row">
            <video style="width: 100%" id="video" src="" autoplay muted controls></video>
        </div>
       
    </div>
    <script src="https://cdn.metered.ca/sdk/frame/1.4.3/sdk-frame.min.js"></script>
    <script>
        const ROOM_URL = "chats.metered.live/section-soc"


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