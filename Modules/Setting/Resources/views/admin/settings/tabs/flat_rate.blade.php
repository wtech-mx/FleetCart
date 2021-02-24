<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('flat_rate_enabled', trans('setting::attributes.flat_rate_enabled'), trans('setting::settings.form.enable_flat_rate'), $errors, $settings) }}
        {{ Form::text('translatable[flat_rate_label]', trans('setting::attributes.translatable.flat_rate_label'), $errors, $settings, ['required' => true]) }}
        {{ Form::number('flat_rate_cost', trans('setting::attributes.flat_rate_cost'), $errors, $settings, ['min' => 0, 'required' => true]) }}

        {{ Form::number('flat_rate_cost2', 'Costo 6-10 kg', $errors, $settings, ['min' => 0, 'required' => true]) }}
        {{ Form::number('flat_rate_cost3', 'Costo 11-15 kg', $errors, $settings, ['min' => 0, 'required' => true]) }}
        {{ Form::number('flat_rate_cost4', 'Costo 16-20 kg', $errors, $settings, ['min' => 0, 'required' => true]) }}
        {{ Form::number('flat_rate_cost5', 'Costo 21-30 kg', $errors, $settings, ['min' => 0, 'required' => true]) }}
        {{ Form::number('flat_rate_cost6', 'Costo 31-40 kg', $errors, $settings, ['min' => 0, 'required' => true]) }}
        {{ Form::number('flat_rate_cost7', 'Costo 41-50 kg', $errors, $settings, ['min' => 0, 'required' => true]) }}
    </div>
</div>
