var connection = new RTCMultiConnection();

// this line is VERY_important
connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

// all below lines are optional; however recommended.

connection.session = {
    audio: true,
    video: true
};

connection.sdpConstraints.mandatory = {
    OfferToReceiveAudio: true,
    OfferToReceiveVideo: true
};

// connection.onstream = function(event) {
//     document.body.appendChild(event.mediaElement);
// };
var videosContainer = document.getElementById('consultingRoom');
connection.onstream = function(event) {
    var video = event.mediaElement;
    videosContainer.appendChild('video');
}

var predefinedRoomId = "<?php echo $_REQUEST['id']; ?>";

connection.openOrJoin(predefinedRoomId);