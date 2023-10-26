<!DOCTYPE>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <title>Comments</title>
</head>

<body>
   <div style="display: flex;justify-content: center;align-items: center; margin-top: 15px">
      <form action="{{route('create')}}" method="post" style="margin: 0 auto">
         @csrf
         <textarea name="comment" id="" cols="30" rows="10" style="width: 100vh;"></textarea>
          <input type="hidden" name="sub_count">
         <button type="submit" style="display: block;margin-top: 15px;">Leave Comment</button>
      </form>
   </div>
   <div style="width: 150px;margin: 0 auto;">
      <p>Comments</p>
      <ol>
         @foreach($comments as $comment)
         <li>
            <p>{{$comment->comment}}</p>
         </li>
         <div style="width: 100%">
            <span style="margin-right: 15px;">{{ $comment->subcomment_count }} comments</span>
             <ul>
                 @foreach($comment->subcomments as $title)
                 <li>{{$title->subcomment}}</li>
                 @endforeach
             </ul>
            <form action="{{route('comment',$comment->id)}}">
               <button type="submit">Leave Comment</button>
            </form>
         </div>
         @endforeach
      </ol>
   </div>
</body>

</html>
