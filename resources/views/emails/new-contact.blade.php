<!doctype html>
<html>
	<head>
	</head>

    <body>
        <header>
            <h1> AWTOMEDDIA </h1>
        </header>

        <div>
            <h4> {{config('admin.name') . ", you got a new contact request!"}}</h4>
            <p>Name: {{$request->name}}</p>
            <p>Email: {{$request->email}}</p>
            <p>Subject: {{$request->subject}}</p>
            <p>Message: {{$request->message}}</p>

        </div>

        <footer>
            <p>COPYRIGHT © 2018 AWTOMEDDIA. ALL RIGHTS RESERVED.</p>
        </footer>
        <script src = "{{asset('js/app.js')}}"></script>
    </body>
</html>

