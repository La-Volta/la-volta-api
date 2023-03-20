<div>

    <div class="bg-red rounded shadow-lg">
        <div class="px-8 py-6">
                <input id="card-holder-name" class="form-pay-stripe mb-4">
            
                <div id="card-element" class="form-pay-stripe"></div>
                <label className="">Nombre del titular de la tarjeta</label>
            <button id="card-button" data-secret="{{ $intent->client_secret }}">
                Update Payment Method
            </button>
        </div>
    </div>

        @push('js')

            <script src="https://js.stripe.com/v3/"></script>
        
            <script>
            const stripe = Stripe('stripe-public-key');
        
            const elements = stripe.elements();
            const cardElement = elements.create('card');
        
            cardElement.mount('#card-element');
            </script>

        @endpush
</div>
