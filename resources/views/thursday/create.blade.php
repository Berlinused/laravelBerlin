<h2>
    Create Page
</h2>

<form action="{{ route('thursday.store') }}" method="post">
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
                <input type="text" name="name" id="name">
            </td>
            <td><input type="text" name="age" id="age"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">送出</button></td>
        </tr>
    </table>
</form>
