<!DOCTYPE >
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Sub Comments</title>
</head>
<body>
<div style="display: flex;justify-content: center;align-items: center; margin-top: 15px">
    <form action="{{route('subcomment')}}" method="post">
        @csrf
        <textarea name="subcomment" id="" cols="30" rows="10" style="width: 100vh;"></textarea>
        <input type="hidden" name="comment_id" value="{{$id}}">
        <button type="submit" style="display: block;margin-top: 15px;">Leave Comment</button>

    </form>
</div>
</body>
</html>
