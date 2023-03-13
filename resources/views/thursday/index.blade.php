<h2>
    Thursday Show
</h2>

{{-- <DIV>
    {{dd($data)}}
</DIV> --}}

<div>
    <a href="{{ route('thursdays.create') }}"><button>GO Create</button></a>
</div>
{{-- <div>
    <a href="{{ route('thursday.edit') }}"><button>GO Edit</button></a>
</div> --}}
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
                <td>
                    <a href="{{(route('thursdays.edit',['thursday'=>$item->id]))}}">修改</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
