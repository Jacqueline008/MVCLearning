<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        td{
            width:100px;
            height: 80px;
            text-align: center;
        }
        img{
            width:100px;
            height:80px;
        }
    </style>
</head>
<body>


    <table>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
            <td>pic</td>
            <td>cateName</td>
        </tr>

        {:foreach $data as $k=>$v:}
        <tr>
            <td>{:$v["id"]:}</td>
            <td>{:$v["title"]:}</td>
            <td>{:$v["content"]:}</td>
            <td><img src={:$v["pic"]:}></td>
            <td>{:$v["cateName"]:}</td>
        </tr>
        {:/foreach:}
    </table>


</body>
</html>

