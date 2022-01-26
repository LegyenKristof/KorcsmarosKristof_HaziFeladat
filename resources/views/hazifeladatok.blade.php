<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, th, table{
            border: 1px black solid;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>URL</th>
            <th>Értékelés</th>
            <th>Pontszám</th>
        </thead>
        <tbody>
           @foreach ($hazifeladatok as $hazifeladat)
           <tr>
               <td>{{$hazifeladat->id}}</td>
               <td>{{$hazifeladat->url}}</td>
               <td>{{$hazifeladat->ertekeles}}</td>
               <td>{{$hazifeladat->pontszam}}</td>
               <td>
                <form method="POST" action="{{ route('hazifeladatok.destroy', $hazifeladat->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
                </td>  
           </tr>
           @endforeach
        </tbody>
    </table>
</body>
</html>