<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CARBY - Pay</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;1,900&display=swap"
        rel="stylesheet">

    {{-- <link rel="icon" href="{{ url('icon.png') }}"> --}}

    <script src="https://js.stripe.com/v3/"></script>

    <style>
        /* Variables */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: center;
            align-content: center;
            height: 100vh;
            width: 100vw;
        }

        form {
            width: 30vw;
            min-width: 500px;
            align-self: center;
            box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
                0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
            border-radius: 7px;
            padding: 40px;
        }

        .hidden {
            display: none;
        }

        #payment-message {
            color: rgb(105, 115, 134);
            font-size: 16px;
            line-height: 20px;
            padding-top: 12px;
            text-align: center;
        }

        #payment-element {
            margin-bottom: 24px;
        }

        /* Buttons and links */
        button {
            background: #F55A13;
            font-family: Arial, sans-serif;
            color: #ffffff;
            border-radius: 4px;
            border: 0;
            padding: 12px 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: block;
            transition: all 0.2s ease;
            box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
            width: 100%;
        }

        button:hover {
            filter: contrast(115%);
        }

        button:disabled {
            opacity: 0.5;
            cursor: default;
        }

        /* SPINNER */

        #overlay {
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
        }

        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #F55A13 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }

        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }

        .is-hide {
            display: none;
        }

        @media only screen and (max-width: 600px) {
            form {
                width: 80vw;
                min-width: initial;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 4rem; margin-bottom: 4rem">
            <img src="{{asset('storage/logo2.png')}}" alt="CarBy" style="height: 11rem">
        </div>

        <div class="row justify-content-center my-3">
            <form class="payment-form" id="payment-form" method="POST" action="{{ route('pay', $journey->id) }}"
                style="background-color: white">

                <div id="card-element"></div>
                <input type="hidden" name="payment_method" class="payment-method">
                <button id="submit" style="margin-top: 2rem">
                    <div class="spinner hidden" id="spinner"></div>
                    <span id="button-text">PAGAR {{$journey->total_price}} €</span>
                </button>
                <div id="payment-message" class="hidden"></div>
                <br>
                <div id="payment-request-button"></div>
            </form>
        </div>

        <div class="row justify-content-center mt-5 pb-4">
            <small style="color: rgb(161, 161, 161)"> © {{ date('Y') }} · CARBY · @lang('All rights
                reserved.')</small>
        </div>
    </div>

    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
</body>


<script>
    const stripe = Stripe("{{config('app.stripe_key')}}")
    let elements = stripe.elements({clientSecret: "{{$intent}}", appearance: {variables: {colorPrimary: '#F55A13'}}})
    const elements2 = stripe.elements();

    let amount = "{{$journey->total_price}}";

    // GOOGLE PAY

    var paymentRequest = stripe.paymentRequest({
        country: 'ES',
        currency: 'eur',
        total: {
            label: 'CARBY',
            amount: amount * 100,
        },
        // requestPayerName: true,
        // requestPayerEmail: true,
    });

    var prButton = elements2.create('paymentRequestButton', {
        paymentRequest: paymentRequest,
    });

    paymentRequest.canMakePayment().then(function(result) {
        if (result) {
            prButton.mount('#payment-request-button');
        } else {
            document.getElementById('payment-request-button').style.display = 'none';
        }
    });

    const returnUrl = "https://m.carby.info/journey/{{$journey->id}}/pay";
    console.log(returnUrl);

    paymentRequest.on('paymentmethod', function(ev) {
        // Confirm the PaymentIntent without handling potential next actions (yet).
        stripe.confirmCardPayment(
            "{{$intent}}", {
                payment_method: ev.paymentMethod.id,
                return_url: returnUrl,
            }, {handleActions: false,}
        ).then(function(confirmResult) {
            console.log(confirmResult);
            if (confirmResult.error) {
            // Report to the browser that the payment failed, prompting it to
            // re-show the payment interface, or show an error message and close
            // the payment interface.
            console.log(confirmResult.error);
            ev.complete('fail');
            } else {
            // Report to the browser that the confirmation was successful, prompting
            // it to close the browser payment method collection interface.
            ev.complete('success');
            // Check if the PaymentIntent requires any actions and if so let Stripe.js
            // handle the flow. If using an API version older than "2019-02-11"
            // instead check for: `paymentIntent.status === "requires_source_action"`.
            if (confirmResult.paymentIntent.status === "requires_action") {
                // Let Stripe.js handle the rest of the payment flow.
                stripe.confirmCardPayment("{{$intent}}", {
                    payment_method: ev.paymentMethod.id,
                    return_url: returnUrl,
                },  {handleActions: false}).then(function(result) {
                if (result.error) {
                    // The payment failed -- ask your customer for a new payment method.
                    console.log(result.error);
                } else {
                    // The payment has succeeded.
                    console.log('paid');
                    window.location.href = returnUrl
                }
                });
            } else {
                // The payment has succeeded.
                console.log('paid');
                window.location.href = returnUrl
            }
            }
        });
    });

    // END GOOGLE PAY

    let paymentElement = elements.create('payment', {
        wallets: {
            applePay: 'never',
            googlePay: 'never',
        }
    })
    paymentElement.mount('#card-element')

    checkStatus();

    document.querySelector("#payment-form").addEventListener("submit", handleSubmit);

    async function handleSubmit(e) {
    e.preventDefault();
    $("#overlay").show();

    // const queryString = window.location.search;
    // const urlParams = new URLSearchParams(queryString);

    // const shift = urlParams.get('shift')
    // let amount = "";
    // if (urlParams.get('amount') != "") {
    //     amount = urlParams.get('amount')
    // } else {
    //     amount = urlParams.get('selected')
    // }

    const { error } = await stripe.confirmPayment({
        elements,
        confirmParams: {
        // Make sure to change this to your payment completion page
        return_url: returnUrl,
        },
    });

    // This point will only be reached if there is an immediate error when
    // confirming the payment. Otherwise, your customer will be redirected to
    // your `return_url`. For some payment methods like iDEAL, your customer will
    // be redirected to an intermediate site first to authorize the payment, then
    // redirected to the `return_url`.
    if (error.type === "card_error" || error.type === "validation_error") {
        showMessage(error.message);
    } else {
        showMessage("Ha ocurrido un error, por favor vuelva a intentarlo.");
    }

    $("#overlay").hide();
    }

    // Fetches the payment intent status after payment submission
    async function checkStatus() {
    const clientSecret = new URLSearchParams(window.location.search).get(
        "payment_intent_client_secret"
    );

    if (!clientSecret) {
        return;
    }

    const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

    switch (paymentIntent.status) {
        case "succeeded":
        showMessage("¡Pago completado!");
        break;
        case "processing":
        showMessage("Su pago se está procesando.");
        break;
        case "requires_payment_method":
        showMessage("Ha ocurrido un error, por favor vuelva a intentarlo.");
        break;
        default:
        showMessage("Algo ha ido mal...");
        break;
    }
    }

    // ------- UI helpers -------

    function showMessage(messageText) {
    const messageContainer = document.querySelector("#payment-message");

    messageContainer.classList.remove("hidden");
    messageContainer.textContent = messageText;

    setTimeout(function () {
        messageContainer.classList.add("hidden");
        messageText.textContent = "";
    }, 4000);
    }
</script>

</html>
