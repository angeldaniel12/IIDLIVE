@extends('layouts.app')

@section('content')
<div class="container">
        <h1>WebRTC One to Many: Viewer</h1>

        <div class="row">
            <video style="width: 100%" id="video" src="" autoplay muted controls></video>
        </div>
       
    </div>
    <script src="https://cdn.metered.ca/sdk/frame/1.4.3/sdk-frame.min.js"></script>
    <script>
        const ROOM_URL = "chats.metered.live/stream"


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
@endsection