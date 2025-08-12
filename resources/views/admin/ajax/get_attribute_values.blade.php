@foreach ($attributes as $key => $attribute)
<div class="col-md-4 form-group mb-3" id="attribute_id_{{ $attribute->id }}">
    <label for="name">{{ $attribute->name }} <span>*</span></label>
    <select name="attribute_value_ids[{{ $attribute->id }}][]" class="form-select js-example-basic-multiple" multiple data-placeholder="Choose {{ $attribute->name }}..." required>
        @foreach (App\Models\AttributeValue::where('attribute_id', $attribute->id)->where('status',1)->get() as $attribute_value)
            <option value="{{ $attribute_value->id }}" >{{ $attribute_value->name }}</option>
        @endforeach
    </select>
</div>
@endforeach

<script>    
    $('.js-example-basic-multiple').select2();
</script>