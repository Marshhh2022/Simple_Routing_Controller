<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
</head>
<body>
    <h1>Marjorie's Hobbies</h1>
    <p>These are my hobbies:</p>
    <ul>
        @foreach ($hobbies as $hobby) 
            <li>{{ $hobby }}</li> 
        @endforeach 
    </ul>

    <nav>
        <a href="/about_me"><button>About Me</button></a>
        <a href="/skills"><button>Skills</button></a>
        <a href="/"><button>Home</button></a>
    </nav>
</body>
</html>