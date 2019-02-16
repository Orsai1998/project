<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
</head>
<body>
 @foreach($show as $item)
     <p>{{$item->id}}</p>
     <p>{{$item->name}}</p>
     <form action="/edit/{{$item->id}}" method="post">
         {{csrf_field()}}
         <input type="text" name="name" value="{{$item->name}}">
         <button type="submit">Change</button>
     </form>
     <a href="/delete/{{$item->id}}">Delete</a>
  @endforeach
 <form action="/addItem" method="post">
     {{csrf_field()}}
     <input type="text" name="name" placeholder="Name">
     <button type="submit">Add</button>
 </form>

</body>
</html>