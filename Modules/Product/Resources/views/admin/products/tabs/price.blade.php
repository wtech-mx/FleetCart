<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label class="col-md-3 control-label text-left"><i class="fa fa-usd" aria-hidden="true"></i> Costo*</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}"  onKeyUp="suma();" type="number" id="a" value="0">
            </div>

            <label class="col-md-3 control-label text-left"><i class="fa fa-handshake-o" aria-hidden="true"></i> Utilidad</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma();" type="number" id="b" value=".30">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label text-left"><i class="fa fa-money" aria-hidden="true"></i> Comision</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma();" type="number" id="c" value="5">
            </div>

            <label class="col-md-3 control-label text-left"><i class="fa fa-credit-card"></i> Comision Paypal</label>
            <div class="col-md-3">
                <input class="form-control" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma();" type="number" id="d" value=".05">
            </div>
        </div>

        <div id="w" style="display: none"></div>
        <div id="x" style="display: none"></div>
        <div id="s" style="display: none"></div>
       <div class="form-group">
            <label class="col-md-3 control-label text-left"> <i class="fa fa-user" aria-hidden="true"></i> Precio al Publico Minorista</label>
            <div class="col-md-9 p-3">
                <div class="form-control" id="y" name="y"></div>
                <p class="text-muted text-left p-2">Calculo de las operaciones, copiar en caso de que lo requiera</p>
            </div>
       </div>

       <div class="form-group">
            <label class="col-md-3 control-label text-left"> <i class="fa fa-users" aria-hidden="true"></i> Precio al Publico Mayorista</label>
            <div class="col-md-9 p-3">
                <div class="form-control" id="n" name="n"></div>
                <p class="text-muted text-left p-2">Calculo de las operaciones, copiar en caso de que lo requiera</p>
            </div>
       </div>

    <hr>
        {{ Form::number('price', trans('product::attributes.price'), $errors, $product, ['min' => 0, 'required' => true]) }}
        {{ Form::number('price2', trans('Precio Mayoristas'), $errors, $product, ['min' => 0, 'required' => true]) }}
        {{ Form::number('costo', trans('costo'), $errors, $product, ['min' => 0, 'required' => true]) }}
        {{ Form::number('special_price', trans('product::attributes.special_price'), $errors, $product, ['min' => 0]) }}
        {{ Form::select('special_price_type', trans('product::attributes.special_price_type'), $errors, trans('product::products.form.price_types'), $product) }}
        {{ Form::text('special_price_start', trans('product::attributes.special_price_start'), $errors, $product, ['class' => 'datetime-picker']) }}
        {{ Form::text('special_price_end', trans('product::attributes.special_price_end'), $errors, $product, ['class' => 'datetime-picker']) }}
    </div>
</div>

<script>
    function suma(){
        var a = document.getElementById("a");
        var b = document.getElementById("b");
        var c = document.getElementById("c");
        var div2 = document.getElementById("w");
        var d = document.getElementById("d");
        var div = document.getElementById("x");
        var div4 = document.getElementById("s");
        var div3 = document.getElementById("y");
        var div5 = document.getElementById("m");
        var div6 = document.getElementById("n");

        w = parseFloat(a.value) * (b.value)+parseFloat(c.value);
        x = parseFloat(w) + parseFloat(a.value);
        s = parseFloat(x)*(d.value);
        y = parseFloat(s)+(x);
        m = parseFloat(a.value)*(b.value);
        n = parseFloat(a.value)+(m);

        div2.innerHTML= w;
        div.innerHTML= x;
        div4.innerHTML= s;
        div3.innerHTML= y;
        div5.innerHTML= m;
        div6.innerHTML= n;
    }
</script>
