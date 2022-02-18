document.querySelector('button').onclick = getEmail;

function getEmail() {
    console.log('My script work')
    let received_email = document.getElementById('email').value;
    console.log(received_email);
}