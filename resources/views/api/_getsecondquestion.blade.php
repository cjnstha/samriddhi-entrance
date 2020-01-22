
<table class="table is-condensed-for-mobile" id="js-secondquestion" js-secondquestion="{{ $questions }}">
   <thead>
    <tr class="tw-text-base">
        <th>S.No.</th>
        <th>Questions</th>
    </tr>
</thead>
<tbody>
    @foreach($questions as $key=>$question)
    <tr>
        <td>{{++$key}}</td>
        <td> {{ $question->questions}}</td>
    </tr>
    @endforeach
</tbody>
</table>



