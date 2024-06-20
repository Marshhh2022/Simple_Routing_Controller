<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
</head>
<body>
    <h1>Marjorie's Skills</h1>
    <p>These are my skills:</p>
    <ul>
        @foreach ($skills as $skill) <!-- Start of the foreach loop -->
            <li>{{ $skill }}</li> <!-- Access the 'name' property of each Skill model -->
        @endforeach <!-- End of the foreach loop -->
    </ul>

    <nav>
        <a href="/about_me"><button>About Me</button></a>
        <a href="/"><button>Home</button></a>
        <a href="/hobbies"><button>Hobbies</button></a>
    </nav>
</body>
</html>