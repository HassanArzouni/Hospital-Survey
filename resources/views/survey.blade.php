@include('partials.header')
<div class="container-fluid">
    <div class="row">
        <div class="mx-auto">
            <h2 class="text-center">Oesophageal cancer</h2>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto">
            <h3 class="text-center">Registration form new diagnosis</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="mx-auto">
            <h4 class="text-center">The variables with * in superscript are required.</h4>
            <h4 class="text-center">The variables with a   <input type="radio" checked> are single-select variables; only one answer can be selected.</h4>
            <h4 class="text-center">The variables with a   <input type="checkbox" checked> are multi-select variables; multiple answers can be selected.</h4>
        </div>
    </div>
</div>

<form>
    <div class="container-fluid">
        <div class="form-group row">
            <div class="col-md-1 mx-auto text-center">
                <label class="col-form-label">Hospital*</label>
            </div>
            <div class="col-md-11">
                <input class="form-control" placeholder="Hospital">
            </div>
        </div>
    </div>
</form>
@include('partials.footer')
