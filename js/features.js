

document.addEventListener("DOMContentLoaded", function () {
    const paymentForm = document.getElementById("paymentForm");

    paymentForm.addEventListener("submit", function (e) {
        // Prevent form submission until all validations are done
        e.preventDefault();

        let valid = true;

        // Validate Card Payment Section
        const cardNumber = document.getElementById("cardNumber").value;
        const securityCode = document.getElementById("securityCode").value;
        const expiryDate = document.getElementById("expiryDate").value;
        const billingAddress = document.getElementById("billingAddress").value;

        if (!validateCardNumber(cardNumber)) {
            alert("Please enter a valid card number (16 digits).");
            valid = false;
        }

        if (!validateSecurityCode(securityCode)) {
            alert("Please enter a valid 3 or 4 digit security code.");
            valid = false;
        }

        if (expiryDate === "") {
            alert("Please select an expiry date.");
            valid = false;
        }

        if (billingAddress.trim() === "") {
            alert("Please enter a billing address.");
            valid = false;
        }

        // Validate Bank Transfer Section
        const transferAmount = document.getElementById("transferAmount").value;
        const transferDate = document.getElementById("transferDate").value;
        const fromAccount = document.getElementById("fromAccount").value;
        const toAccount = document.getElementById("toAccount").value;

        if (transferAmount === "" || isNaN(transferAmount) || Number(transferAmount) <= 0) {
            alert("Please enter a valid transfer amount.");
            valid = false;
        }

        if (transferDate === "") {
            alert("Please select a valid transfer date.");
            valid = false;
        }

        if (fromAccount === toAccount) {
            alert("The 'From' and 'To' accounts cannot be the same.");
            valid = false;
        }

        // If all fields are valid, submit the form
        if (valid) {
            alert("Form submitted successfully!");
            paymentForm.submit(); // Uncomment this line in production
        }
    });

    function validateCardNumber(number) {
        return /^[0-9]{16}$/.test(number); // Check if the card number is 16 digits
    }

    function validateSecurityCode(code) {
        return /^[0-9]{3,4}$/.test(code); // Check if the security code is 3 or 4 digits
    }
});
function submitBooking() {
    alert("Booking request sent successfully!");
}