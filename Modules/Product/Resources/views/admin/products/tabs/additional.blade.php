<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label class="col-md-3 control-label text-left"><i class="fa fa-archive" aria-hidden="true"></i> Ancho</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}"  onKeyUp="suma2();" type="number" id="l" value="0">
            </div>

            <label class="col-md-3 control-label text-left"><i class="fa fa-th" aria-hidden="true"></i> Altura</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma2();" type="number" id="m" value="0">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label text-left"><i class="fa fa-dropbox" aria-hidden="true"></i> Largo</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma2();" type="number" id="n" value="0">
            </div>


            <div id="l" style="display: none"></div>
            <div id="m" style="display: none"></div>
            <div id="n" style="display: none"></div>
               <div class="form-group">
                    <label class="col-md-3 control-label text-left"><i class="fa fa-inbox" aria-hidden="true"></i> Peso Volumetrico</label>
                    <div class="col-md-3">
                        <div class="form-control" id="pesoV" name="pesoV"></div>
                    </div>
               </div>
        </div>
        {{ Form::number('pesoV', trans('pesoV'), $errors, $product, ['min' => 0, 'required' => true]) }}
        {{ Form::number('KG', trans('KG'), $errors, $product, ['min' => 0, 'required' => true]) }}
        {{ Form::textarea('short_description', trans('product::attributes.short_description'), $errors, $product) }}
        {{ Form::text('new_from', trans('product::attributes.new_from'), $errors, $product, ['class' => 'datetime-picker']) }}
        {{ Form::text('new_to', trans('product::attributes.new_to'), $errors, $product, ['class' => 'datetime-picker'] ) }}
    </div>
</div>

<script>
    function suma2(){
        var l = document.getElementById("l");
        var m = document.getElementById("m");
        var n = document.getElementById("n");
        var div5 = document.getElementById("pesoV");

        pesoV = parseFloat(l.value) * parseFloat(m.value) * parseFloat(n.value)/5000;
        div5.innerHTML= pesoV;
    }
</script>
