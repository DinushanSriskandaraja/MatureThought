function sharePost() {

    let msg = document.getElementById("postContent").value;

    time = getTime()
    duplicatePostWithInput("Dinushan Sriskandaraja", time, msg)
}

function duplicatePostWithInput(username, timestamp, postContent) {
    var newPostContainer = document.createElement('div');
    newPostContainer.id = 'post';
    var originalPostUser = document.getElementById('postUser');
    var originalFeedPost = document.getElementById('feedPost');
    var newUser = originalPostUser.cloneNode(true);
    var newFeedPost = originalFeedPost.cloneNode(true);
    var newUserName = newUser.querySelector('#userName');
    var newTimestamp = newUser.querySelector('p');
    var newPostContent = newFeedPost.querySelector('p');
    newUserName.textContent = username;
    newTimestamp.textContent = timestamp;
    newPostContent.textContent = postContent;
    newPostContainer.appendChild(newUser);
    newPostContainer.appendChild(newFeedPost);
    var postContainer = document.getElementById('postContainer');
    postContainer.appendChild(newPostContainer);
}

function getTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var timeString = `${hours}:${minutes}`;
    return timeString;
}