// document.querySelector('button1').onclick = getAvatar;
document.getElementById('second_to_social_btn').onclick = getAvatar;

function getAvatar(){
    console.log("getAvatarScript is working!");
    let received_photo = document.getElementById('profile_pic').value;
    console.log(received_photo);
}