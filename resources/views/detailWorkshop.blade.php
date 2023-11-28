<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/detailWorkshop.css') }}">
    <title>Detail Workshop</title>
</head>
<body>
    <nav class="topnav">
        <a href="">Home</a>
        <a href="">Achievement</a>
        <a href="">Workshop</a>
    </nav>
    <div class="body-content">
    <div class="content">
        <img src="{{ asset('images/images.png') }}" class="image" alt="">
        <div>
            <p class="path">Home / Workshops / Internet of Things / IoT Implementation in Business</p>
            <p>Duration: <span>2 hours 3 minutes</span></p>
            <p>Language: <span>Indonesia</span></p>
            <p>Participant: <span>3.678 participants</span></p>
            <p>Date: <span>20 December 2023</span></p>
            <div class="button">
                <button class="enroll">Enroll now</button>
                <button class="wishlist">Save to wishlist</button>
            </div>
            <hr class="break">
        </div>
    </div>

    <p class="creator">A workshop by <span>Nikola Tesla</span></p>
    <div class="text">
        <h1>IoT Implementation in Business</h1>
        <p class="description">Embark on a transformative journey to unlock the boundless potential of your business through our comprehensive guide on the strategic implementation of Internet of Things (IoT) technology. Our in-depth exploration navigates the intricacies of seamlessly integrating IoT solutions, presenting businesses with a powerful arsenal to not only streamline day-to-day operations but also to enhance overall efficiency and foster a culture of continuous innovation.
            As the business landscape evolves, so does the need for innovative solutions. Our guide goes beyond the theoretical, providing practical insights and hands-on strategies that empower businesses to harness the full spectrum of IoT benefits. Whether it's optimizing supply chain management for heightened agility, cultivating smart office environments that redefine workplace efficiency, or leveraging data-driven insights to make informed decisions, our guide is your compass in navigating the dynamic realm of IoT possibilities.</p>
    </div>
    <div class="sub">
        <h2>Other workshop</h2>
        <p>See all</p>
    </div>
    <div class="cardList">
        <div class="card">
            <img src="{{ asset('images/images.png') }}" alt="">
            <h3>IoT Implementation</h3>
            <p>Focus on implementing Internet of Things (IoT) in the business environment.</p>
            <button class="card-button">Enroll Now</button>
        </div>
        <div class="card">
            <img src="{{ asset('images/images.png') }}" alt="">
            <h3>IoT Implementation</h3>
            <p>Focus on implementing Internet of Things (IoT) in the business environment.</p>
            <button class="card-button">Enroll Now</button>
        </div>
        <div class="card">
            <img src="{{ asset('images/images.png') }}" alt="">
            <h3>IoT Implementation</h3>
            <p>Focus on implementing Internet of Things (IoT) in the business environment.</p>
            <button class="card-button">Enroll Now</button>
        </div>
    </div>

    </div>

</body>
</html>
