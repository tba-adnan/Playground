<a href="/create"><button>Ajouter</button></a>
<table>
    <thead>
        <tr>
            <th>id : </th>
            <th>Promotions : </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($promotion as $value)
            
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
        </tr>
        @endforeach

    </tbody>
</table>

