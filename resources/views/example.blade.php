<table border=1>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Detail</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                @foreach ($item->detail as $d)
                    - {{ $d->name }} <br>
                @endforeach
            </td>
            <td>
                <a href="{{ $item->id }}">detail</a>
            </td>
        </tr>
    @endforeach
</table>
