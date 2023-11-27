
function flip(cardId) {
    var flipCard = document.getElementById(cardId);
    flipCard.style.transform = flipCard.style.transform === 'rotateY(180deg)' ? 'rotateY(0deg)' : 'rotateY(180deg)';
}
function validateLogin() {
    var form = document.getElementById('myForm');
    var username = form.elements['username'];
    var password = form.elements['password'];

    if (username.value.trim() === '' || password.value.trim() === '') {
        console.log('empty');
        alert('Please fill in all empty fields.');

    } else {
        form.submit();
    }
}

function validateSignup(){
    var form = document.getElementById('signupForm');
    var username2 = form.elements['username2'];
    var password2 = form.elements['password2'];
    var email = form.elements['email'];
    var firstname = form.elements['firstname'];
    var lastname = form.elements['lastname'];
    var middlename = form.elements['middlename'];
    var house_num = form.elements['house_num'];
    var street = form.elements['street'];
    var barangay= form.elements['barangay'];
    var municipality = form.elements['municipality'];
    var city_province = form.elements['city_province'];
    var zip_code = form.elements['zip_code'];
    var birthdate = form.elements['birthdate'];
    var contact_num = form.elements['contact_num'];

    if (username2.value.trim() === '' || 
    password2.value.trim() === ''|| 
    email.value.trim() === '' || 
    firstname.value.trim() === '' || 
    middlename.value.trim() === '' || 
    lastname.value.trim() === '' || 
    house_num.value.trim() === '' || 
    street.value.trim() === '' || 
    barangay.value.trim() === '' || 
    municipality.value.trim() === '' || 
    city_province.value.trim() === '' || 
    zip_code.value.trim() === '' || 
    contact_num.value.trim() === '')
    {
        alert("Please fill in all fields.");
    }else{
        form.submit();
    }
}
