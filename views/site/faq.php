<?php include('header.php') ?>
<div class="container-fluid firstContainer faqContainer">
    <div id="particles-js"></div>

</div>
<script>
    // Get the camera stream
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
            // Create a video element to display the camera stream
            var video = document.createElement('video');
            video.srcObject = stream;
            video.play();

            // Create a canvas element to render the snapshot
            var canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;

            // Take a snapshot when the user clicks a button
            var button = document.createElement('button');
            button.textContent = 'Take Snapshot';
            button.addEventListener('click', function() {
                canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                var dataURL = canvas.toDataURL('image/png');
                // Upload the dataURL to the server or display it in an img tag
                // e.g. document.getElementById('snapshot').src = dataURL;
            });

            // Add the video element, button, and canvas element to the page
            document.body.appendChild(video);
            document.body.appendChild(button);
            document.body.appendChild(canvas);
        })
        .catch(function(err) {
            console.log(err);
        });

</script>

<?php include('footer.php') ?>
