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
  <a href="{{route('rumah')}}" style="color: black">rumah</a>
  <div class="container">
    <h1>Tell Us Your Story</h1>
    <form>
        <ul>
            <li>
                <input type="text" placeholder="Instagram ID">
            </li>
            <li>
                <input type="text" placeholder="E-mail">
            </li>
            <li>
                <textarea type="text" placeholder="Message" maxlength="200" style="max-width: 500px;"></textarea>
            </li>
        </ul>
        <button class="btn btn-primary" type="submit">Button</button>
    </form> 
  </div>

    <!-- Konten spesifik halaman Home -->   

</body>
</html>
