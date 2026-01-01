<!DOCTYPE html>
<html>

<head>
    <title>{{ $profileData['name'] }} - CV</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 850px;
            margin: 0 auto;
            background: #fff;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 10px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        .headline {
            font-size: 1.2em;
            color: #3498db;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .location {
            color: #7f8c8d;
            margin-bottom: 30px;
            font-size: 0.95em;
        }

        h2 {
            color: #2c3e50;
            font-size: 1.5em;
            margin-top: 30px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #ecf0f1;
        }

        .summary {
            color: #555;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 20px;
        }

        .experience-item,
        .education-item {
            margin-bottom: 20px;
            padding-left: 15px;
            border-left: 3px solid #3498db;
        }

        .role,
        .degree {
            font-size: 1.1em;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .company,
        .institution {
            color: #555;
            font-size: 0.95em;
        }

        .duration {
            color: #7f8c8d;
            font-size: 0.9em;
            font-style: italic;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: #555;
        }

        ul li:before {
            content: "▹";
            position: absolute;
            left: 0;
            color: #3498db;
            font-weight: bold;
            font-size: 1.2em;
        }

        @media print {
            body {
                background: #fff;
                padding: 0;
            }

            .container {
                box-shadow: none;
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.3em;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $profileData['name'] }}</h1>
        <p class="headline">{{ $profileData['headline'] }}</p>
        <p class="location">{{ $profileData['location'] }}</p>

        <h2>Profile Summary</h2>
        <p class="summary">{{ $profileData['summary'] }}</p>

        <h2>Experience</h2>
        @foreach ($profileData['experience'] as $exp)
            <div class="experience-item">
                <div class="role">{{ $exp['role'] }}</div>
                <div class="company">{{ $exp['company'] }}</div>
                <div class="duration">{{ $exp['duration'] }}</div>
            </div>
        @endforeach

        <h2>Education</h2>
        @foreach ($profileData['education'] as $edu)
            <div class="education-item">
                <div class="degree">{{ $edu['degree'] }}</div>
                <div class="institution">{{ $edu['institution'] }}</div>
            </div>
        @endforeach

        <h2>Skills</h2>
        <ul>
            @foreach ($profileData['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
