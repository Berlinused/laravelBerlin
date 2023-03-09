<h2>
    Thursday Show
</h2>

{{-- <DIV>
    {{dd($data)}}
</DIV> --}}

<div>
    <a href="{{ route('thursday.create') }}"><button>GO Create</button></a>
</div>
<table>
    <thead>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>
                    {{ $item->name }},
                </td>
                <td>
                    {{ $item->age }},
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
