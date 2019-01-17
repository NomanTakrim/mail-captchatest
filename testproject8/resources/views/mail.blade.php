<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
                ID
            </td>
            <td>
                {{$prod->id}}
            </td>
        </tr>
        <tr>
            <td>
                Name
            </td>
            <td>
                {{$prod->name}}
            </td>
        </tr>
        <tr>
            <td>
                Type
            </td>
            <td>
                {{$prod->type}}
            </td>
        </tr>
        <tr>
            <td>
                Price
            </td>
            <td>
                {{$prod->price}}
            </td>
        </tr>

    </table>
</body>
</html>