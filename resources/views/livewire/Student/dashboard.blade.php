<div class="bg-gray-50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .particles-js-canvas-el{
            position: absolute !important
        }
    </style>


    <header class="relative h-screen w-full text-white flex items-center justify-center" style="background: linear-gradient(213deg,#3ba5b4 0,#38ba8a 100%)" id="particles-js">
        {{-- <div class="absolute w-[150px] -top-20 -left-10 h-[150px] bg-white opacity-10 rounded-full"></div>
        <div class="absolute w-[50px] top-20 right-10 h-[50px] bg-white opacity-10 rounded-full"></div>
        <div class="absolute w-[100px] rotate-12 bottom-10 left-20 h-[250px] bg-white opacity-10"></div>
        <div class="absolute w-[70px] -rotate-12 top-20 left-50 h-[150px] bg-white opacity-10"></div>
        <div class="absolute w-[150px] bottom-4 right-5 h-[150px] bg-white opacity-10"></div>
        <div class="absolute w-[100px] -rotate-12 bottom-40 right-72 h-[100px] bg-white opacity-10"></div>
        <div class="absolute w-[90px] bottom-56 left-96 h-[90px] bg-white opacity-10 rounded-full"></div> --}}
        <div class="text-center w-2/3">
            <h5 class="text-xl mb-5">Hallo <span class="font-bold tracking-wider">{{ auth()->user()->name }}</span></h5>
            <h1 class="text-6xl font-semibold tracking-wider">SELAMAT MENGIKUTI UJIAN</h1>
            <p class="mt-12 text-md">Rasulullah -sholallaahu alaihi wasallam bersabda Barangsiapa yang mencurangi kami maka bukan dari golongan kami.” (HR. Muslim, kitab al-Imam)</p>
            <div class="mt-12 flex gap-6 justify-center">
                <a href="" class="bg-white hover:text-[#59bfa6] font-semibold hover:shadow-xl px-12 py-3 rounded-3xl text-gray-700">
                    <div class="flex items-center">
                        <img src="{{ asset('img/cap.png') }}" class="mr-3">
                        Lihat Jadwal Ulangan
                    </div>
                </a>
                <a href="" class="bg-white hover:text-[#59bfa6] font-semibold hover:shadow-xl px-12 py-3 rounded-3xl text-gray-700">
                    <div class="flex items-center">
                        <img src="{{ asset('img/book.png') }}" class="mr-3">
                        Lihat Pelajaran
                    </div>
                </a>
            </div>
        </div>
    </header>
    
    <div class="container mx-auto mt-20">
        <div class="text-center mb-16">
            <h2 class="font-semibold text-4xl tracking-wider">Pilih Pelajaran</h2>
            <p class="text-gray-700 mt-3">
                Pilih pelajaran sesuai jadwal hari 
                <span class="font-bold text-xl tracking-wider ml-2 text-[#00a498]">SENIN 07 Oktober</span>
            </p>
        </div>
        <div class="grid grid-cols-4">
            @foreach ($lessons as $lesson)    
                <div class="hover:shadow-xl border flex justify-center items-center">
                    <a 
                        href="{{ route('student.lesson.show', ['slug'=>$lesson->slug,'page'=>1]) }}"
                        class="w-full h-full py-20 px-10
                    ">
                        <img src="{{ asset('img/development.svg') }}" width="100px" class="mx-auto">
                        <h5 class="text-center mt-5 text-md tracking-wider">
                            {{ $lesson->name }}
                        </h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    
    <footer class="bg-[#48556c] mt-20 p-10 text-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-20">
                <div>
                    <div class="flex justify-between">
                        <h2 class="text-xl font-bold tracking-wider">IL-Learning</h2>
                        <div class="flex justify-center items-center">
                            <div
                                x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                        
                                        this.$refs.button.focus()
                        
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        if (! this.open) return
                        
                                        this.open = false
                        
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                x-on:keydown.escape.prevent.stop="close($refs.button)"
                                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                x-id="['dropdown-button']"
                                class="relative"
                            >
                                <!-- Button -->
                                <button
                                    x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-button')"
                                    type="button"
                                    class="border border-gray-400 px-8 py-2 rounded-3xl shadow"
                                >
                                    <span>Bahasa Indonesia</span>
                                </button>
                        
                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-button')"
                                    style="display: none;"
                                    class="absolute left-0 mt-2 w-full bg-white border border-black rounded shadow-md overflow-hidden"
                                >
                                    <div>
                                        <a href="#" class="block w-full text-gray-800 px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                            Indonesia
                                        </a>
                        
                                        <a href="#" class="block w-full text-gray-800 px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                            Inggris
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-7">

                    <p class="mt-7 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est earum delectus exercitationem, quaerat ipsam ratione
                    </p>
                    <p class="mt-8 text-gray-300 text-sm">
                        &copy; 2022 Diprella LLC. All rights reserved.
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-10">
                    <div>
                        <h3 class="text-[#3bb497] text-xl font-semibold tracking-widest">About</h3>
                        <ul class="mt-3">
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Courses</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Prices</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">For Business</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-[#3bb497] text-xl font-semibold tracking-widest">IL-Learning</h3>
                        <ul class="mt-3">
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Company</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Road Map</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Term and Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-[#3bb497] text-xl font-semibold tracking-widest">Need Help?</h3>
                        <ul class="mt-3">
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/d02202f823.js" crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'assets/particles.json', function() {
            console.log('callback - particles.js config loaded');
        });
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value":20,
                    "density": {
                        "enable":true,
                        "value_area":800
                    }
                },
                "color":{
                    "value":"#ffffff"
                },
                "shape": {
                    "type":"edge",
                    "stroke":{
                        "width":0,
                        "color":"#000000"
                    },
                    "polygon": {
                        "nb_sides":3
                    },
                    "image": {
                        "src":"img/github.svg",
                        "width":100,
                        "height":100
                    }
                },
                "opacity": {
                    "value":0.5,
                    "random":false,
                    "anim": {
                        "enable":false,
                        "speed":1,
                        "opacity_min":0.1,
                        "sync":false
                    }
                },
                "size": { 
                    "value":3,
                    "random":false,
                    "anim": {
                        "enable":false,
                        "speed":40,
                        "size_min":0.1,
                        "sync":false
                    }
                },
                "line_linked": {
                    "enable":true,
                    "distance":100,
                    "color":"#ffffff",
                    "opacity":0.4,
                    "width":1
                },
                "move": { 
                    "enable":true,
                    "speed":1,
                    "direction":"bottom-right",
                    "random":false,
                    "straight":false,
                    "out_mode":"out",
                    "bounce":false,
                    "attract": { 
                        "enable":false,
                        "rotateX":600,
                        "rotateY":1200
                    }
                }
            },
            "interactivity": {
                "detect_on":"canvas",
                "events": {
                    "onhover": {
                        "enable":false,
                        "mode":"repulse"
                    },
                    "onclick": {
                        "enable":false,
                        "mode":"push"
                    },
                    "resize":true
                },
                "modes": {
                    "grab": {
                        "distance":400,
                        "line_linked": {
                            "opacity":1
                        }
                    },
                    "bubble": {
                        "distance":400,
                        "size":40,
                        "duration":2,
                        "opacity":8,
                        "speed":3
                    },
                    "repulse": {
                        "distance":200,
                        "duration":0.4
                    },
                    "push": {
                        "particles_nb":4
                    },
                    "remove": {
                        "particles_nb":2
                    }
                }
            },
            "retina_detect":true
        });

        const nav= document.querySelector("nav");
        const title= document.querySelector(".title");
        window.addEventListener('scroll', function(){
            nav.classList.toggle('bg-white', window.scrollY > 0);
            title.classList.toggle('text-black', window.scrollY > 0);
        });
    </script>
</div>
