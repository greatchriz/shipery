@props(['inputName', 'inputPlaceholder', 'inputFeedback', 'inputTitle'])
<div class="mb-3 row">
    <label class="col-lg-4 col-form-label" for="{{ $inputName }}">
        <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="validationCustom01" placeholder="Enter a username.." required="">
        <div class="invalid-feedback">
            Please enter a username.
        </div>
    </div>
</div>
