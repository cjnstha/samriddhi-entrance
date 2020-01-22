<option value="{{$data}}">Select Set</option>
@foreach($data as $datas)
    <option value="{{ $datas->set_name }}">{{ $datas->set_name }}</option>
@endforeach
