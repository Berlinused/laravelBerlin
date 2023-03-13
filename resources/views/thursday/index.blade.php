<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

</body>

</html>
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
                    {{ $item->created_at }},
                </td>
                <td>
                    {{ $item->updated_at }},
                </td>
                <td>
                    <a href="{{ route('thursdays.edit', ['thursday' => $item->id]) }}" class="btn btn-warning">修改</a>
                </td>
                <td>
                    {{-- DEL --}}
                    {{-- 419 --}}
                    {{-- <a href="">刪除</a> --}}
                    <form action="{{ route('thursdays.destroy', ['thursday' => $item->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="刪除" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
