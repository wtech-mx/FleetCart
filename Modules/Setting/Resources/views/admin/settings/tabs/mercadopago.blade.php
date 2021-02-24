<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('mercadopago_enabled', 'Activar', 'Mercado Pago', $errors, $settings) }}
        {{ Form::text('translatable[mercadopago_label]', 'Mercado Pago', $errors, $settings, ['required' => true]) }}
        {{ Form::textarea('translatable[mercadopago_description]', 'Descripcion', $errors, $settings, ['rows' => 3, 'required' => true]) }}
        {{ Form::checkbox('mercadopago_test_mode', 'Sandbox', 'Utilice sandbox para pagos de prueba', $errors, $settings) }}

        <div class="{{ old('mercadopago_enabled', array_get($settings, 'mercadopago_enabled')) ? '' : 'text' }}" id="mercadopago-fields">
            {{ Form::text('mercadopago_public_key', 'Public Key', $errors, $settings, ['required' => true]) }}
            {{ Form::password('mercadopago_access', 'Access Token', $errors, $settings, ['required' => true]) }}
        </div>
    </div>
</div>
