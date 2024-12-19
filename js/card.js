document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const nextButton = document.querySelector('button[type="submit"]');
    const paymentInputs = document.querySelectorAll('input[name="payment"]');

    // Initially disable the next button
    nextButton.disabled = true;

    // Check if there's a saved payment method in localStorage
    const savedPaymentMethod = localStorage.getItem('selectedPaymentMethod');
    if (savedPaymentMethod) {
        document.getElementById(savedPaymentMethod).checked = true;
        nextButton.disabled = false;
    }

    // Add event listeners to payment inputs
    paymentInputs.forEach(input => {
        input.addEventListener('change', () => {
            // Save the selected payment method to localStorage
            localStorage.setItem('selectedPaymentMethod', input.id);

            // Enable the next button if any payment method is selected
            nextButton.disabled = !form.querySelector('input[name="payment"]:checked');
        });
    });

    // Form submission event listener
    form.addEventListener('submit', (event) => {
        if (!form.querySelector('input[name="payment"]:checked')) {
            event.preventDefault();
            alert('Please select a payment method.');
        }
    });
});
