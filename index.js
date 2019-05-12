// This code loops through each checkbox to see if it's
// checked, if it is, we'll add it to the total to display it
function displayTotal() {
    let total = 0;
    for (let i = 0; i < 5; i++) {
        if (document.forms["main-form"][i].checked) {
            switch (document.forms["main-form"][i].value) {
                case "product1":
                    total += 20;
                    break;
                case "product2":
                    total += 18;
                    break;
                case "product3":
                    total += 22;
                    break;
                case "product4":
                    total += 18;
                    break;
                case "product5":
                    total += 20;
                    break;
                default:
                    break;
            }
        }
    }
    // Convert total to include decimals
    total = total.toFixed(2);
    // Display the total to DOM
    document.getElementById("total-output").innerHTML = total;
}

function validate() {
    // Element and value getters from DOM
    let firstName = document.getElementById('first-name');
    let firstNameValue = firstName.value;
    let lastName = document.getElementById('last-name');
    let lastNameValue = lastName.value;
    let address = document.getElementById('address');
    let addressValue = address.value;
    let phone = document.getElementById('phone');
    let phoneValue = phone.value;
    // Create array of elements
    let elementArray = new Array();
    elementArray.push(firstName, lastName, address, phone);
    // Create array of element values
    let elementValArray = new Array();
    elementValArray.push(firstNameValue, lastNameValue, addressValue, phoneValue);
    // Validation regex patterns
    let phonePattern = /^\d{3}-?\d{3}-?\d{4}$/;
    // Loop through all the values to verify their values are not null
    // If any of these values are null, return false
    let invalidFields = 0;
    for (let i = 0; i < elementValArray.length; i++) {
        // if the field is blank
        if (elementValArray[i] == "") {
            // if the field is blank and the field is month
            {
                elementArray[i].style = "border: 2px solid red";
                elementArray[i].focus();
                invalidFields++;
            }
        } else if (elementArray[i].id == "phone") {
            let index = elementArray[i].value.search(phonePattern);
            if (index < 0) {
                elementArray[i].style = "border: 2px solid red";
                document.getElementById("phone-invalid-text").innerHTML = "Invalid phone number";
                document.getElementById("phone-invalid-text").style = "color: red; position: relative; left: 206px;"
                elementArray[i].focus();
                invalidFields++;
            } else {
                document.getElementById("phone-invalid-text").style = "display: none;"
                elementArray[i].style = "border: solid 2px black";
            }
        }
    }
    // If there are invalid fields return false
    if (invalidFields) return false;
    // else, return otherwise
    return true;
}