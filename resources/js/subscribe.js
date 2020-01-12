$(document).ready(function() {
    // target the form
    // on form submission, create a token
    $("#subscribe-form").submit(function(e) {
        var form = $(this);

        // disable the form button
        form.find("button").prop("disabled", true);

        // use the stripe library. create a single use token
        Stripe.card.createToken(form, function(status, response) {
            // if there are errors, show them
            if (response.error) {
                form.find(".stripe-errors")
                    .text(response.error.message)
                    .addClass("notification is-danger is-light");
                form.find("button").prop("disabled", false);
            } else {
                // append the token to the form
                form.append(
                    $('<input type="hidden" name="cc_token">').val(response.id)
                );

                // submit the form
                form.get(0).submit();
            }
        });

        e.preventDefault();
    });
});