    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@isset($students)
    <table id="example" class="display tw-stripe tw-hover hoverTable tw-text-base tw-mt-5"
           style="width: 100%; padding-top: 1em; padding-bottom: 1em;">
        <thead>
        <tr>
            <th data-priority="1">S.N</th>
            <th data-priority="2">Student Name</th>
            <th data-priority="2">Marks gained</th>
            <th data-priority="2">Percentage</th>
            <th data-priority="2">Contact No</th>
            <th data-priority="2">Email</th>
            <th data-priority="2">Exam Give Date</th>
        </tr>
        </thead>
        <tbody>
        @forelse($students as $key=>$student)
            <tr>
                <td>{{ ++$key }}</td>
                <td> {{ $student->student_name }}</td>
                <td> {{ $student->marks }}</td>
                <td> {{ ($student->marks/$student->total)*100 . '%' }}</td>
                <td> {{ $student->contact_no }}</td>
                <td> {{ $student->email }}</td>
                <td> {{ $student->created_at->diffForHumans() }}</td>
            </tr>
        @empty
            <h2>Sorry, No result found.</h2>
        @endforelse
        </tbody>
    </table>
@endisset
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    }
                ]
            });
        });
    </script>
