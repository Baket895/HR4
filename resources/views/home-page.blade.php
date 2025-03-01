@extends('layouts.index')

@section('title')
    JVD Travel Services
@endsection

@section('content')

<div class="relative grid grid-cols-2 w-full">

    <!-- Hero Section -->
    <section class="col-span-2 bg-cover bg-center h-screen" style="background-image: url('{{ asset('img/JvdB.png') }}');">
        <div class="bg-black bg-opacity-50 h-full flex flex-col justify-center items-center text-center text-white px-4">
            <h6>Get Hired</h6>
            <h1 class="text-5xl font-bold mb-4">Human Resources</h1>
            <p class="leading-relaxed mb-10">The journey of a thousand miles begins with a 
              Single step. Lets's make every step count together.</p>
            <a href="#contact" class="bg-violet-600 hover:bg-violet-700 text-white py-3 px-6 rounded-md text-lg font-medium">Get Started</a>
        </div>
    </section>

    <!-- Careers Section -->
    <section id="careers" class="col-span-2 py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Careers</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-10">Join our team and embark on an exciting journey in the travel and events industry. We’re always looking for passionate individuals ready to grow and make a difference.</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Job Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/carrer1.png')}}" alt="HR Manager" class="w-full h-50 object-cover">
                    <div class="p-6 text-left">
                        <h3 class="text-xl font-semibold mb-3">HR Manager</h3>
                        <p class="text-gray-600 mb-4">We are looking for an experienced HR Manager to oversee all aspects of human resources practices and processes.</p>
                        <p class="text-gray-600 mb-4">Location: Caloocan City</p>
                        <p class="text-gray-600 mb-4">Salary: Competitive</p>
                        <a href="#" class="bg-violet-600 hover:bg-violet-700 text-white py-2 px-4 rounded-md font-medium">Apply Now</a>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/carrer2.png')}}" alt="Tour Guide" class="w-full h-50 object-cover">
                    <div class="p-6 text-left">
                        <h3 class="text-xl font-semibold mb-3">Tour Guide</h3>
                        <p class="text-gray-600 mb-4">As a Tour Guide, you will provide clients with engaging and informative experiences during their travels, ensuring they have a memorable journey.</p>
                        <p class="text-gray-600 mb-4">Location: Various Locations</p>
                        <p class="text-gray-600 mb-4">Salary: Competitive</p>
                        <a href="#" class="bg-violet-600 hover:bg-violet-700 text-white py-2 px-4 rounded-md font-medium">Apply Now</a>
                    </div>
                </div>
                

                <!-- Job Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/carrer3.png')}}" alt="Event Planner" class="w-full h-50 object-cover">
                    <div class="p-6 text-left">
                        <h3 class="text-xl font-semibold mb-3">Event Planner</h3>
                        <p class="text-gray-600 mb-4">We are seeking a creative Event Planner to organize successful corporate and personal events for our clients.</p>
                        <p class="text-gray-600 mb-4">Location: Caloocan City</p>
                        <p class="text-gray-600 mb-4">Salary: Competitive</p>
                        <a href="#" class="bg-violet-600 hover:bg-violet-700 text-white py-2 px-4 rounded-md font-medium">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-12">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Don't see the role you're looking for?</h3>
                <p class="text-gray-600 mb-6">We’re always looking for talented individuals. Send us your resume and we’ll reach out if a role matches your expertise.</p>
                <a href="#contact" class="bg-violet-600 hover:bg-violet-700 text-white py-3 px-6 rounded-md font-medium">Submit Your Resume</a>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="col-span-2 py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">About Us</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-2">Born from a passion for travel and adventure,
              we buiild our dream company to provide exceptional tavel and event experience.</p>
            <p class="text-gray-600 max-w-2xl mx-auto mb-10">The company was established by three young friend whose common love for travel and adventure,
              dreamt of having their business expertise and experience in the event and travel industry coupled with their
              desire to provide efficent professional service to all and demands of travelling public, bonded together
              and established their own company.</p>
              <button class="bg-violet-600 hover:bg-violet-700 text-white px-9 py-3 rounded-md capitalize font-bold 
              hover:ocacity-80 ease-in duration-200 mb-20">See More...</button>
        </div>

        <!-- Mission, Vision, Core Values Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-8">

            <!-- Mission Card (Yellow Background) -->
            <div class="card relative bg-yellow-500 rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:shadow-2xl">
                <div class="absolute inset-0 bg-black bg-opacity-30 rounded-lg"></div> <!-- Dark overlay -->

                <div class="relative z-10 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">MISSION</h3>
                    <p>
                        TO GIVE QUALITY SERVICES THAT EXCEEDS THE EXPECTATIONS OF OUR ESTEEMED CUSTOMERS AT A COST THAT WILL
                    ENABLE US TO REMAIN COMPETITIVE.
                    </p>
                </div>
            </div>

            <!-- Vision Card (Blue Background) -->
            <div class="card relative bg-blue-500 rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:shadow-2xl">
                <div class="absolute inset-0 bg-black bg-opacity-30 rounded-lg"></div> <!-- Dark overlay -->

                <div class="relative z-10 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">VISION</h3>
                    <p>
                        TO BE THE MOST SUCCESSFUL AND RESPECTED EVENT AND TRAVEL MANAGEMENT COMPANY IN THE COUNTRY BY PROVIDING
                    HIGH CLASS EVENT AND TRAVEL SERVICES THOUGH EXCELLENT COMMITMENT AND CONSISTENT LEADERSHIP.
                    </p>
                </div>
            </div>

            <!-- Vision Card (Blue Background) -->
            <div class="card relative bg-red-500 rounded-lg shadow-lg p-6 transform transition-transform duration-300 hover:shadow-2xl">
                <div class="absolute inset-0 bg-black bg-opacity-30 rounded-lg"></div> <!-- Dark overlay -->

                <div class="relative z-10 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">CORE VALUES</h3>
                    <p>
                        WE BELIEVE IN TREATING OUR CUSTOMERS WITH RESPECT AND FAITH. WE GROVE THROUGH CREATIVITY, INVENTION AND INNOVATION.
                    WE INTERATE HONESY, INTEGRITY AND BUSINESS ETHICS INTO ALL ASPECTS OF OUR BUSINESS FUNCTIONING.
                    </p>
                </div>
            </div>
        </div>

            <div class="container mx-auto flex items-center justify-center px-4 py-1.5 mb-4 mt-4">
                <!-- Circular Profile Card -->
                <div class="card relative bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:shadow-2xl max-w-sm p-6 text-center">
                    <div class="mb-4">
                        <img src="{{ asset('img/ceo-profile.png')}}" alt="Profile Picture" class="profile-image w-32 h-32 rounded-full mx-auto object-cover border-4 border-gray-300">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Jhune Ernest Ogoy</h3>
                    <p class="text-gray-600 mb-4">CEO</p>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magni odit delectus
                         labore distinctio eaque fuga temporibus, officia sint perspiciatis error sapiente
                          dolore earum nostrum ea ipsa aspernatur officiis deleniti.
                    </p>
                </div>
            </div>
        <!-- Add FontAwesome Icons (optional) -->
    </section>

    <!-- Blogs Section -->
    <section id="blogs" class="col-span-2 py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Blogs</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/card1.png')}}" alt="Card Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet magni esse quam. Voluptates in eaque
                            adipisci! Et totam expedita, at ducimus nesciunt, minima nam quod eveniet, quis voluptatem incidunt tenetur.</p>
                    <a href="#" class="text-gray-500 hover:text-gray-600 font-bold">Learn More</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/card2.png')}}" alt="Card Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero error rerum ad
                            porro minima et obcaecati itaque officiis! Natus, voluptate consequatur! Aliquam labore expedita amet nisi. Ratione nulla facilis sequi.</p>
                    <a href="#" class="text-gray-500 hover:text-gray-600 font-bold">Learn More</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/card3.png')}}" alt="Card Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reprehenderit veniam eius earum ea. Neque
                            vero vel obcaecati quis, natus, amet, impedit beatae suscipit quo hic at nemo nisi sint.</p>
                    <a href="#" class="text-gray-500 hover:text-gray-600 font-bold">Learn More</a>
                </div>
            </div>
            </div>

            <div class="max-w-7xl mx-auto mt-10">
                <div class="text-center">
                    <h2 class="text-base text-gray-700 font-semibold tracking-wide uppercase">Our Partners</h2>
                </div>
        
                <!-- Swiper Slider -->
                <div class="mt-10 swiper-container flex justify-center bg-white py-4 w-full">
                    <div class="swiper-wrapper">
                        <!-- Partner 1 -->
                        <div class="swiper-slide">
                            <img class="h-12" src="{{ asset('img/partner1.png')}}" alt="Partner 1 Logo">
                            <p class="text-gray-600 text-sm font-semibold">2GO Travel</p>
                        </div>
                        <!-- Partner 2 -->
                        <div class="swiper-slide">
                            <img class="h-12" src="{{ asset('img/partner2.png')}}" alt="Partner 2 Logo">
                            <p class="text-gray-600 text-sm font-semibold">Air Asia</p>
                        </div>
                        <!-- Partner 3 -->
                        <div class="swiper-slide">
                            <img class="h-12" src="{{ asset('img/partner3.png')}}" alt="Partner 3 Logo">
                            <p class="text-gray-600 text-sm font-semibold">Cebu Pacific</p>
                        </div>
                        <!-- Partner 4 -->
                        <div class="swiper-slide">
                            <img class="h-12" src="{{ asset('img/partner4.png')}}" alt="Partner 4 Logo">
                            <p class="text-gray-600 text-sm font-semibold">Cathay Pacific</p>
                        </div>
                        <!-- Partner 5 -->
                        <div class="swiper-slide">
                            <img class="h-12" src="{{ asset('img/partner5.png')}}" alt="Partner 5 Logo">
                            <p class="text-gray-600 text-sm font-semibold">Etihad Airways</p>
                        </div>
                        <!-- Partner 6 -->
                        <div class="swiper-slide">
                            <img class="h-12" src="{{ asset('img/partner6.png')}}" alt="Partner 6 Logo">
                            <p class="text-gray-600 text-sm font-semibold">Philippine Airline</p>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </section>

      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 6, // Display 4 logos at a time
                spaceBetween: 30, // Space between logos
                loop: true, // Loop the slides
                autoplay: {
                    delay: 2500, // Auto-slide every 2.5 seconds
                    disableOnInteraction: false, // Continue autoplay after interaction
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2, // 2 logos on small screens
                    },
                    768: {
                        slidesPerView: 3, // 3 logos on medium screens
                    },
                    1024: {
                        slidesPerView: 4, // 4 logos on large screens
                    },
                },
            });
        </script>

    <!-- Services Section -->

    <section id="services" class="col-span-2 py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Services</h2>
            <h2 class="text-xl font-bold text-gray-800 mb-6">We Offer</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Service Box 1 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer1.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Seminar/Meeting</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 2 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer2.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Birthday/Celebration</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 3 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer3.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Wedding/Anniversary</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 4 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer4.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Team Building</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 5 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer5.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Concert/Pageant</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 6 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer6.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Field Trip</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 7 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer7.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Airline Ticketing</h3>
                        <p class="text-gray-300 mb-4">.</p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 8 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer8.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Tour Package</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>

                <!-- Service Box 9 -->
                <div class="service-box group relative bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="service-image absolute inset-0 bg-cover bg-center transition-transform duration-500" style="background-image: url('{{ asset('img/offer9.png')}}');"></div>
                    <div class="relative z-10 p-6 flex flex-col justify-end h-full bg-gradient-to-t from-black via-transparent to-transparent">
                        <h3 class="text-2xl font-bold mb-2">Bus/Van Rental</h3>
                        <p class="text-gray-300 mb-4"></p>
                        <a href="#" class="text-white-400 font-bold hover:text-white-500">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="col-span-2 p-20 bg-white border-b border-gray-300 grid grid-cols-2 gap-10 items-center">
        <div class="col-span-2 lg:col-span-1 md:col-span-1 flex items-center justify-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246926.56072477845!2d120.75343608856204!3d14.7562083421182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1c988038143%3A0x39d625f769c1d8fc!2sJVD%20EVENT%20AND%20TRAVEL%20MANAGEMENT%20Co.!5e0!3m2!1sen!2sph!4v1728043954288!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-span-2 lg:col-span-1 md:col-span-1 container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Message Us</h2>
            <form class="max-w-lg mx-auto">
                <div class="mb-4">
                    <input type="text" placeholder="Your Name" class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Your Email" class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="mb-4">
                    <textarea placeholder="Your Message" class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-md text-lg font-medium">Submit</button>
            </form>
        </div>
    </section>
</div>


@endsection