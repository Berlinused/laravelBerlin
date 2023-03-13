<h2>
    Edit Page
</h2>

<form action="{{ route('thursdays.store') }}" method="post">
    @csrf
    <table style="border:1px solid gray;text-align:center">
        <th>
           name
        </th>
        <th>
            age
        </th>
        <tr>
            <td>
                <input type="text" name="id" value="1">
            </td>
            <td>
                <input type="text" name="name" id="name" value="2">
            </td>
            <td><input type="text" name="age" id="age" value="3"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">送出</button></td>
        </tr>
    </table>
</form>
