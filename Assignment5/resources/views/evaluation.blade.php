<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Evaluation System</h2>

    <form method="GET" action="/evaluation">
        <strong>Student Name:</strong>
        <input type="text" name="name" value="{{ request('name') }}"> <br><br>
        <strong>Prelim Grade:</strong>
        <input type="number" name="prelim" value={{$prelim}}> <br><br>
        <strong>Midterm Grade:</strong>
        <input type="number" name="midterm" value={{$midterm}}> <br><br>
        <strong>Final Grade:</strong>
        <input type="number" name="final" value={{$final}}> <br><br>

        <button type="submit">Evaluate</button>
    </form>

    <hr>

    @if($average !== null)

    <h3>Evaluation Result</h3>

    <p><strong>Average: </strong>{{number_format($average,2)}}</p>
    
    <p><strong>Letter Grade: </strong>
        @if($average >= 90) 
            A
        @elseif ($average >= 80)
            B
        @elseif ($average >= 70)
            C
        @elseif ($average >= 60)
            D
        @else
            F
        @endif
    </p>

    <p><strong>Remarks: </strong>
        @if ($average >= 75)
            Passed
        @else
            Failed
        @endif
    </p>

    <p><strong>Award: </strong>
        @if($average >= 98) 
            With Highest Honors
        @elseif($average >= 95) 
            With High Honors
        @elseif($average >= 90) 
            With Honors
        @else 
            No Award
        @endif
    </p>

    @endif
</body>
</html>