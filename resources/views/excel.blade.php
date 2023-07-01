<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background:linear-gradient(to top left, rgb(54, 109, 228), rgb(77, 181, 241));
            background-size: cover;
        }
        .container, table{
            justify-content: center;
            align-items: center;
            margin: auto;

        }
        form {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            
            /* margin-left: 30%; */
        }
        form input{
            height: 36px;
            border-radius:4% ;
        }

        .table{
            /* border: 2px solid black; */
            padding: 20px;
            margin-top: 50px;
            width: 60%;
        }
        td,th{
            border: 2px solid black;
            padding: 10px;
            font-size: 1.2rem;
        }

        .btn_danger {
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 1rem;

        }
        .btn_success {
            background-color: green;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 1rem;

        }
        .btn-primary {
            background-color: blue;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 1rem;

        }

        .padding{
            text-align: center;
            padding: 10px;
        }

        #task-input{
            width: 400px;
            border: none;
            border-radius: 10px;
            padding: 5px;
            font-size: 1rem;
            
        }

        .container h1{
            text-align: center;
            border-bottom: 2px solid purple;
            font-size: 4rem;
        }
        .container button{
            padding: 13px;
        }

        .btn-logout{
            background-color: blue;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
            
        }
    
    </style>  
</head>
  <body>
    
    <a class="btn-logout" style="float:right;" href="{{ url('/logout') }}">Logout</a>
  

<form  action="/add">
 <div class="container">
 <h1>TODO APP</h1>
 <input type="text" id="item-input" name="items" placeholder="Enter a task here">
  <button type="submit" class="btn-primary" id="add-button" name="add">Add Task</button>
  <button type="button" class="btn_success" id="clear-button">Get Task</button>
  </div>
</form>

<form  action="">
 <div class="container">
 <input type="file" id="file" name="file" placeholder="Enter a task here">
    <button type="submit" class="btn-primary" id="add-button" name="add">Import</button>
  <a href="{route{'export-items'}}" class="btn-primary">Export Excel</a>
  </div>
</form>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Todo item</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  {{$count=1}}
    @foreach($items as $items)
   {{$count = $count+1}}
    <tr>
      
      <th scope="row">{{$count}}</th>
      <td>{{$items['items']}}</td>
      <td>Inprogress</td>
      <td>
      
      <a href="" class="btn_success padding">Edit</a>
      <a href={{"/delete/".$items['sno']}} class="btn_danger padding">Delete</a>
    
    </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background:linear-gradient(to top left, rgb(54, 109, 228), rgb(77, 181, 241));
            background-size: cover;
        }
        .container, table{
            justify-content: center;
            align-items: center;
            margin: auto;

        }
        form {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            
            /* margin-left: 30%; */
        }
        form input{
            height: 36px;
            border-radius:4% ;
        }

        .table{
            /* border: 2px solid black; */
            padding: 20px;
            margin-top: 50px;
            width: 60%;
        }
        td,th{
            border: 2px solid black;
            padding: 10px;
            font-size: 1.2rem;
        }

        .btn_danger {
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 1rem;

        }
        .btn_success {
            background-color: green;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 1rem;

        }
        .btn-primary {
            background-color: blue;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 1rem;

        }

        .padding{
            text-align: center;
            padding: 10px;
        }

        #task-input{
            width: 400px;
            border: none;
            border-radius: 10px;
            padding: 5px;
            font-size: 1rem;
            
        }

        .container h1{
            text-align: center;
            border-bottom: 2px solid purple;
            font-size: 4rem;
        }
        .container button{
            padding: 13px;
        }

        .btn-logout{
            background-color: blue;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
            
        }
    
    </style>  
</head>
  <body>
    
    <a class="btn-logout" style="float:right;" href="{{ url('/logout') }}">Logout</a>
  

<form  action="/add">
 <div class="container">
 <h1>TODO APP</h1>
 <input type="text" id="item-input" name="items" placeholder="Enter a task here">
  <button type="submit" class="btn-primary" id="add-button" name="add">Add Task</button>
  <button type="button" class="btn_success" id="clear-button">Get Task</button>
  </div>
</form>

<form  action="">
 <div class="container">
 <input type="file" id="file" name="file" placeholder="Enter a task here">
    <button type="submit" class="btn-primary" id="add-button" name="add">Import</button>
  <a href="{route{'export-items'}}" class="btn-primary">Export Excel</a>
  </div>
</form>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Todo item</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  {{$count=1}}
    @foreach($items as $items)
   {{$count = $count+1}}
    <tr>
      
      <th scope="row">{{$count}}</th>
      <td>{{$items['items']}}</td>
      <td>Inprogress</td>
      <td>
      
      <a href="" class="btn_success padding">Edit</a>
      <a href={{"/delete/".$items['sno']}} class="btn_danger padding">Delete</a>
    
    </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>