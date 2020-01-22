
<option>Select Set</option>
@foreach($data as $datas)
    <option value="{{ $datas->set }}">{{ $datas->set }}</option>
@endforeach


