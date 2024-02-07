@props(['inputName' => null, 'inputPlaceholder' => null, 'inputFeedback' => null, 'inputTitle' => null, 'inputValue' => null, 'disabled' => false, 'required' => true])
<div class="mb-3 row">
    <label class="col-lg-4 col-form-label" for="{{ $inputName }}">{{ $inputTitle }}
        <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="{{ $inputName }}" id="{{ $inputName }}" placeholder="{{ $inputPlaceholder }}" value="{{ $inputValue }}" {{ $disabled }} {{ $required }}>
        <div class="invalid-feedback">
            {{ $inputFeedback }}
        </div>
    </div>
</div>
