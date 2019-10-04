<tbody>
@foreach($historicos as $historico)
    <tr>
        <td>{{ $historico->status }}</td><br>
        <td>{{ $historico->data }}</td>
        
    </tr>
@endforeach
</tbody>