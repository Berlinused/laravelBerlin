<h2>
    Edit Page
</h2>
{{-- 要照useful的格式寫 photos/{photo} --}}
<form action="{{ route('thursdays.update', ['thursday' => $data->id]) }}" method="post">
    @csrf
    {{-- method put --}}
    @method('PUT') 
    <table style="border:1px solid gray;text-align:center">
        <th>
           name
        </th>
        <th>
            age
        </th>
        <tr>
            <td>
                <input type="text" name="name" id="name" value="{{$data->name}}">
            </td>
            <td><input type="text" name="age" id="age" value="{{$data->age}}"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">送出</button></td>
        </tr>
    </table>
</form>
