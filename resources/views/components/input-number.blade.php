<div>
    <input type="number" name="{{ $property }}" id="{{ $property }}"
        class="form-control @error($property) is-invalid @enderror" value="{{ old($property,$entity->$property) }}" />
    @error($property)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    {{ $slot }}
</div>
