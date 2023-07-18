<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layanan/feedback.css') }}">
    <title>WorkEz Feedback</title>
</head>
<body>
  <div class="container">
    <h1>Tell Us Your Story</h1>
    <form method="POST" action="{{route('feedback_submit')}}">
        @csrf
        <ul>
            <li>
                <input type="text" placeholder="Instagram ID" name="instagram_id">
            </li>
            <li>
                <input type="email" placeholder="E-mail" name="email">
            </li>
            <li>
                <textarea type="text" placeholder="Message" name="message" maxlength="200" style="max-width: 500px;"></textarea>
            </li>
            <li>
                <button onclick="window.location.href='{{ route('rumah') }}'" class="btn-back" type="button">Back</button>
                <button class="btn-submit" type="submit">Submit</button>
            </li>
        </ul>
        
    </form> 
  </div>

    <!-- Konten spesifik halaman Home -->   

</body>
</html>
