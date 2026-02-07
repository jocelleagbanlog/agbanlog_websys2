<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Female Biodata</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e4f1f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 900px;
        margin: auto;
        background-color: #f0f7f8;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .header {
        display: flex;
        gap: 30px;
        background-color: #4f8a8b;
        color: white;
        padding: 30px;
        align-items: flex-start;
    }

    .photo {
        width: 220px;
        flex-shrink: 0;
    }

    .photo img {
        width: 100%;
        height: 100%;
        border: 8px solid white;
        box-sizing: border-box;
        display: block;
    }

    .details {
        flex: 1;
    }

    .details h1 {
        margin-top: 10px;
        font-size: 35px;
        margin-bottom: 20px;
    }

    .details p {
        margin: 4px 0;
        font-size: 15px;
    }

    .section {
        padding: 10px 20px;
    }
    
    .section p {
        padding-left: 40px;
        padding-right: 40px;
        margin: 4px;
    }

    h2 {
        color: #000000;
        background-color: #f0f7f8;
        padding: 10px;
        margin-top: 0;
    }

</style>
</head>
<body>

@php
    $photo = "images/profile.jpg";

    $name = "Jocelle Agbanlog";
    $age = 22;
    $birthDate = "12/12/2003, 07:12:00 PM";
    $birthPlace = "Urdaneta City, Pangasinan";
    $residence = "Manaoag, Pangasinan";
    $nationality = "Filipino";
    $religion = "Roman Catholic";
    $height = "5' 1\"";
    $weight = "121 lbs";
    $education = "BS Information Technology";
    $occupation = "Student";
    $languages = "English, Filipino";

    $aboutMe = "I am Jocelle Agbanlog, a 22 year old BS Information Technology student with an interest in UI/UX design. I want to become a designer who creates visually appealing and user-friendly digital interfaces. In my free time, I love crocheting, dancing, watching movies, and baking, as these activities help me relax and express my creativity. I am motivated and creative, and I am always willing to learn more about technology and design.";

    $fatherName = "Teofilo Agbanlog, Jr.";
    $fatherProfession = "N/A";
    $motherName = "Connie Agbanlog";
    $motherProfession = "N/A";
    $brothers = 0;
    $sisters = 1;
    $familyType = "Nuclear";
    $socialClass = "Lower Class";
    $residence = "Manaoag, Pangasinan";

    $expectations = "I expect to push myself to learn more and improve my skills in UI/UX design. I want to learn new tools and design trends that will help me grow. Through practice and experience, I hope to become a confident UI/UX designer who creates designs that are useful and easy to use.";

    $phone = "09686042926";
    $address = "Manaoag, Pangasinan";
@endphp

<div class="container">

    <div class="header"> 
        <div class="photo">
            <img src="{{ asset($photo) }}" alt="Profile Photo">
        </div>

        <div class="details">
            <h1>{{ $name }}</h1>

            <p>
                <strong>Age:</strong> {{ $age }}
                @if ($age == 21)
                    (Dalawampu’t Isa)
                @elseif ($age >= 22 && $age <= 23)
                    (Duapulo ket dua)
                @elseif ($age > 24)
                    (Dalawampu tan lima)
                @endif
            </p>

            <p><strong>Date and time of birth:</strong> {{ $birthDate }}</p>
            <p><strong>Place of birth:</strong> {{ $birthPlace }}</p>
            <p><strong>Place of residence:</strong> {{ $residence }}</p>
            <p><strong>Nationality:</strong> {{ $nationality }}</p>
            <p><strong>Religion:</strong> {{ $religion }}</p>
            <p><strong>Height:</strong> {{ $height }}</p>
            <p><strong>Weight:</strong> {{ $weight }}</p>
            <p><strong>Education:</strong> {{ $education }}</p>
            <p><strong>Occupation:</strong> {{ $occupation }}</p>
            <p><strong>Languages:</strong> {{ $languages }}</p>
        </div>
    </div>

    <div class="section">
        <h2>About Me</h2>
        <p>{{ $aboutMe }}</p>
    </div>

    <div class="section">
        <h2>Family Background</h2>
        <p><strong>Father’s Name:</strong> {{ $fatherName }}</p>
        <p><strong>Father’s Profession:</strong> {{ $fatherProfession }}</p>
        <p><strong>Mother’s Name:</strong> {{ $motherName }}</p>
        <p><strong>Mother’s Profession:</strong> {{ $motherProfession }}</p>
        <p><strong>No. of Brothers:</strong> {{ $brothers }}</p>
        <p><strong>No. of Sisters:</strong> {{ $sisters }}</p>
        <p><strong>Family Type:</strong> {{ $familyType }}</p>
        <p><strong>Social Class:</strong> {{ $socialClass }}</p>
        <p><strong>Place of Residence:</strong> {{ $residence }}</p>
    </div>

    <div class="section">
        <h2>Expectations</h2>
        <p>{{ $expectations }}</p>

    </div>

    <div class="section">
        <h2>Contact Details</h2>
        <p><strong>Phone Number:</strong> {{ $phone }}</p>
        <p><strong>Residence Address:</strong> {{ $address }}</p>
    </div>

</div>

</body>
</html>
