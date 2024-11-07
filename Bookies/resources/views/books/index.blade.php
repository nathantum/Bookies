<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h2>Here is the list of the books</h2>
    <ul>
        <li>
            <a href="/books/{{$books[0]["id"]}}">
                {{$books[0]["Title"]}}
            </a>
        </li>
        <li>
            <a href="/books/{{$books[1]["id"]}}">
                {{$books[1]["Title"]}}
            </a>
        </li>
        <li>
            <a href="/books/{{$books[2]["id"]}}">
                {{$books[2]["Title"]}}
            </a>
        </li>
        <li>
            <a href="/books/{{$books[3]["id"]}}">
                {{$books[3]["Title"]}}
            </a>
        </li>
    </ul>
    
</body>
</html>