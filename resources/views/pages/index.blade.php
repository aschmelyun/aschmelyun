@extends('layout.default')
@section('content')
    <div class="flex">
        <div class="w-full lg:w-7/12">
            <h1 class="text-4xl lg:text-5xl font-semibold">Hey, Andrew Schmelyun here!</h1>
            <div class="text-4xl lg:text-5xl font-semibold mt-8 lg:mt-16">I'm a full-stack PHP developer with a love for <span class="lang lang-laravel">Laravel</span>, <span class="lang lang-vue">Vue</span> + <span class="lang lang-docker">Docker</span>.</div>
            <div class="flex items-center justify-between md:justify-start mt-16 lg:mt-24">
                <a class="block mr-0 md:mr-12 hover:opacity-50 transition-opacity duration-200" href="https://github.com/aschmelyun" target="_blank" rel="noreferrer">
                    <svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.4023 41.7266C17.4023 41.5156 17.1914 41.3047 16.875 41.3047C16.5586 41.3047 16.3477 41.5156 16.3477 41.7266C16.3477 41.9375 16.5586 42.1484 16.875 42.043C17.1914 42.043 17.4023 41.9375 17.4023 41.7266ZM14.1328 41.1992C14.1328 41.4102 14.3438 41.7266 14.6602 41.7266C14.8711 41.832 15.1875 41.7266 15.293 41.5156C15.293 41.3047 15.1875 41.0938 14.8711 40.9883C14.5547 40.8828 14.2383 40.9883 14.1328 41.1992ZM18.8789 41.0938C18.5625 41.0938 18.3516 41.3047 18.3516 41.6211C18.3516 41.832 18.668 41.9375 18.9844 41.832C19.3008 41.7266 19.5117 41.6211 19.4062 41.4102C19.4062 41.1992 19.0898 40.9883 18.8789 41.0938ZM25.7344 0.59375C11.1797 0.59375 0 11.7734 0 26.3281C0 38.0352 7.27734 48.0547 17.8242 51.6406C19.1953 51.8516 19.6172 51.0078 19.6172 50.375C19.6172 49.6367 19.6172 46.0508 19.6172 43.8359C19.6172 43.8359 12.2344 45.418 10.6523 40.6719C10.6523 40.6719 9.49219 37.6133 7.80469 36.875C7.80469 36.875 5.37891 35.1875 7.91016 35.1875C7.91016 35.1875 10.5469 35.3984 12.0234 37.9297C14.3438 42.043 18.1406 40.8828 19.7227 40.1445C19.9336 38.457 20.5664 37.2969 21.4102 36.5586C15.5039 35.9258 9.49219 35.082 9.49219 24.957C9.49219 22.0039 10.3359 20.6328 12.0234 18.7344C11.707 17.9961 10.8633 15.2539 12.3398 11.5625C14.4492 10.9297 19.6172 14.4102 19.6172 14.4102C21.7266 13.7773 23.9414 13.5664 26.1562 13.5664C28.4766 13.5664 30.6914 13.7773 32.8008 14.4102C32.8008 14.4102 37.8633 10.8242 40.0781 11.5625C41.5547 15.2539 40.6055 17.9961 40.3945 18.7344C42.082 20.6328 43.1367 22.0039 43.1367 24.957C43.1367 35.082 36.9141 35.9258 31.0078 36.5586C31.957 37.4023 32.8008 38.9844 32.8008 41.5156C32.8008 44.9961 32.6953 49.4258 32.6953 50.2695C32.6953 51.0078 33.2227 51.8516 34.5938 51.5352C45.1406 48.0547 52.3125 38.0352 52.3125 26.3281C52.3125 11.7734 40.3945 0.59375 25.7344 0.59375ZM10.2305 36.9805C10.0195 37.0859 10.125 37.4023 10.2305 37.6133C10.4414 37.7188 10.6523 37.8242 10.8633 37.7188C10.9688 37.6133 10.9688 37.2969 10.7578 37.0859C10.5469 36.9805 10.3359 36.875 10.2305 36.9805ZM9.07031 36.1367C8.96484 36.3477 9.07031 36.4531 9.28125 36.5586C9.49219 36.6641 9.70312 36.6641 9.80859 36.4531C9.80859 36.3477 9.70312 36.2422 9.49219 36.1367C9.28125 36.0312 9.17578 36.0312 9.07031 36.1367ZM12.4453 39.9336C12.3398 40.0391 12.3398 40.3555 12.6562 40.5664C12.8672 40.7773 13.1836 40.8828 13.2891 40.6719C13.3945 40.5664 13.3945 40.25 13.1836 40.0391C12.9727 39.8281 12.6562 39.7227 12.4453 39.9336ZM11.2852 38.3516C11.0742 38.457 11.0742 38.7734 11.2852 38.9844C11.4961 39.1953 11.707 39.3008 11.918 39.1953C12.0234 39.0898 12.0234 38.7734 11.918 38.5625C11.707 38.3516 11.4961 38.2461 11.2852 38.3516Z" fill="black"/>
                    </svg>
                </a>
                <a class="block mr-0 md:mr-12 hover:opacity-50 transition-opacity duration-200" href="https://twitter.com/aschmelyun" target="_blank" rel="noreferrer">
                    <svg width="54" height="45" viewBox="0 0 54 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M48.4102 11.7812C50.5195 10.1992 52.418 8.30078 53.8945 6.08594C51.9961 6.92969 49.7812 7.5625 47.5664 7.77344C49.8867 6.40234 51.5742 4.29297 52.418 1.65625C50.3086 2.92188 47.8828 3.87109 45.457 4.39844C43.3477 2.18359 40.5 0.917969 37.3359 0.917969C31.2188 0.917969 26.2617 5.875 26.2617 11.9922C26.2617 12.8359 26.3672 13.6797 26.5781 14.5234C17.4023 13.9961 9.17578 9.56641 3.69141 2.92188C2.74219 4.50391 2.21484 6.40234 2.21484 8.51172C2.21484 12.3086 4.11328 15.6836 7.17188 17.6875C5.37891 17.582 3.58594 17.1602 2.10938 16.3164V16.4219C2.10938 21.8008 5.90625 26.2305 10.9688 27.2852C10.125 27.4961 9.07031 27.707 8.12109 27.707C7.38281 27.707 6.75 27.6016 6.01172 27.4961C7.38281 31.9258 11.4961 35.0898 16.3477 35.1953C12.5508 38.1484 7.80469 39.9414 2.63672 39.9414C1.6875 39.9414 0.84375 39.8359 0 39.7305C4.85156 42.8945 10.6523 44.6875 16.9805 44.6875C37.3359 44.6875 48.4102 27.918 48.4102 13.2578C48.4102 12.7305 48.4102 12.3086 48.4102 11.7812Z" fill="black"/>
                    </svg>
                </a>
                <a class="block mr-0 md:mr-12 hover:opacity-50 transition-opacity duration-200" href="https://youtube.com/aschmelyun" target="_blank" rel="noreferrer">
                    <svg width="59" height="41" viewBox="0 0 59 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M56.9023 6.93359C56.2695 4.40234 54.2656 2.39844 51.8398 1.76562C47.3047 0.5 29.375 0.5 29.375 0.5C29.375 0.5 11.3398 0.5 6.80469 1.76562C4.37891 2.39844 2.375 4.40234 1.74219 6.93359C0.476562 11.3633 0.476562 20.8555 0.476562 20.8555C0.476562 20.8555 0.476562 30.2422 1.74219 34.7773C2.375 37.3086 4.37891 39.207 6.80469 39.8398C11.3398 41 29.375 41 29.375 41C29.375 41 47.3047 41 51.8398 39.8398C54.2656 39.207 56.2695 37.3086 56.9023 34.7773C58.168 30.2422 58.168 20.8555 58.168 20.8555C58.168 20.8555 58.168 11.3633 56.9023 6.93359ZM23.4688 29.3984V12.3125L38.4453 20.8555L23.4688 29.3984Z" fill="black"/>
                    </svg>
                </a>
                <a class="block mr-0 md:mr-12 hover:opacity-50 transition-opacity duration-200" href="https://dev.to/aschmelyun" target="_blank" rel="noreferrer">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6562 18.793C12.2344 18.4766 11.8125 18.2656 11.3906 18.2656H9.59766V29.3398H11.3906C11.8125 29.3398 12.2344 29.1289 12.6562 28.918C13.0781 28.6016 13.1836 28.0742 13.1836 27.4414V20.1641C13.1836 19.5312 12.9727 19.1094 12.6562 18.793ZM42.6094 0.125H4.53516C2.00391 0.125 0 2.23438 0 4.76562V42.8398C0 45.3711 2.00391 47.375 4.53516 47.375H42.6094C45.1406 47.375 47.1445 45.3711 47.25 42.8398V4.76562C47.1445 2.23438 45.1406 0.125 42.6094 0.125ZM16.2422 27.5469C16.2422 29.4453 14.9766 32.5039 11.0742 32.5039H6.22266V14.9961H11.1797C14.9766 14.9961 16.2422 18.0547 16.2422 20.0586V27.5469ZM26.7891 18.1602H21.1992V22.168H24.6797V25.332H21.1992V29.3398H26.7891V32.5039H20.25C19.0898 32.5039 18.1406 31.5547 18.0352 30.3945V17.2109C18.0352 16.0508 18.9844 15.1016 20.1445 15.1016H26.7891V18.1602ZM37.7578 30.2891C36.3867 33.5586 33.8555 32.9258 32.8008 30.2891L28.6875 15.1016H32.168L35.2266 27.0195L38.3906 15.1016H41.7656L37.7578 30.2891Z" fill="black"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="hidden lg:block w-5/12">
            <div class="icon ml-4">
                <svg width="233" height="197" viewBox="0 0 233 197" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M201.415 32.647C225.593 55.7783 239.252 94.4003 230.041 125.068C220.778 155.683 188.698 178.291 156.775 188.967C124.799 199.643 93.0327 198.387 66.709 185.722C40.4377 173.057 19.609 148.984 8.46201 117.689C-2.68499 86.3933 -4.20266 47.8237 13.957 26.053C32.169 4.28234 70.1107 -0.689326 106.378 0.619008C142.645 1.87501 177.289 9.51567 201.415 32.647Z" fill="#1A202C" fill-opacity="0.075"/>
                    <image xlink:href="/assets/images/icon-laravel.png" x="50%" y="50%" height="133" width="128" transform="translate(-60,-64)"/>
                </svg>
            </div>
            <div class="icon flex justify-end -mt-16">
                <svg width="223" height="239" viewBox="0 0 223 239" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M208.029 39.254C224.73 62.624 224.616 96.881 219.999 135.299C215.382 173.717 206.148 216.239 180.213 231.743C154.278 247.19 111.585 235.505 76.9286 215.612C42.2156 195.662 15.5966 167.504 5.22264 132.563C-5.09436 97.6789 0.890645 56.1259 23.5196 31.3879C46.0916 6.64995 85.3076 -1.21606 121.617 1.12094C157.926 3.40094 191.385 15.884 208.029 39.254Z" fill="#1A202C" fill-opacity="0.075"/>
                    <image xlink:href="/assets/images/icon-vue.png" x="50%" y="50%" height="111" width="128" transform="translate(-60,-50)"/>
                </svg>
            </div>
            <div class="icon flex ml-24 -mt-16">
                <svg width="238" height="243" viewBox="0 0 238 243" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M196.76 38.3333C219.533 61.06 235.633 90.5067 237.22 121.587C238.807 152.667 225.927 185.333 203.107 208.293C180.333 231.207 147.667 244.46 116.773 242.687C85.8333 240.913 56.7133 224.207 35.06 201.247C13.4533 178.287 -0.639987 149.167 0.24668 120.887C1.13335 92.6067 17 65.2133 38.6067 42.5333C60.2133 19.8067 87.6067 1.74665 116.027 0.719987C144.493 -0.30668 173.94 15.6067 196.76 38.3333Z" fill="#1A202C" fill-opacity="0.075"/>
                    <image xlink:href="/assets/images/icon-docker.png" x="50%" y="50%" height="111" width="156" transform="translate(-70,-50)"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="flex bg-gray-100 py-6 lg:py-8 px-4 lg:px-12 pb-6 lg:pb-12 mt-24">
        <div class="w-full text-center">
            <h2 class="text-3xl font-semibold">Here's some projects I'm working on.</h2>
            <div class="flex flex-wrap -mx-4 mt-4 lg:mt-8 text-left">
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                        <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="https://usethekeyboard.com" target="_blank" rel="noreferrer">
                            <img class="block" src="https://larametrics.com/screenshot-larametrics-dashboard.png">
                        </a>
                        <div class="py-4 px-6">
                            <p class="text-gray-700 text-lg leading-relaxed my-2"><span class="text-gray-900 font-semibold">Use The Keyboard</span> is a simplistic and open-sourced repository of keyboard shortcuts for a variety of websites and apps.</p>
                            <p class="text-gray-700 text-lg leading-relaxed my-2">&mdash; <a href="https://usethekeyboard.com" class="text-gray-700 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">https://usethekeyboard.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                        <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="https://usethekeyboard.com" target="_blank" rel="noreferrer">
                            <img class="block" src="https://larametrics.com/screenshot-larametrics-dashboard.png">
                        </a>
                        <div class="py-4 px-6">
                            <p class="text-gray-700 text-lg leading-relaxed my-2"><span class="text-gray-900 font-semibold">Larametrics</span> is a self-hosted metrics and notifications platform for Laravel apps, built with production environments in mind.</p>
                            <p class="text-gray-700 text-lg leading-relaxed my-2">&mdash; <a href="https://larametrics.com" class="text-gray-700 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">https://larametrics.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4">
                    <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                        <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="https://usethekeyboard.com" target="_blank" rel="noreferrer">
                            <img class="block" src="https://larametrics.com/screenshot-larametrics-dashboard.png">
                        </a>
                        <div class="py-4 px-6">
                            <p class="text-gray-700 text-lg leading-relaxed my-2"><span class="text-gray-900 font-semibold">PDFBlade</span> is a developer-friendly HTML to PDF API with robust documentation and a wide variety of formatting options.</p>
                            <p class="text-gray-700 text-lg leading-relaxed my-2">&mdash; <a href="https://pdfblade.com" class="text-gray-700 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">https://pdfblade.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <a href="/projects" class="inline-block px-8 py-2 text-lg font-semibold text-white bg-red-600 hover:bg-red-500 transition-all duration-200">See All Projects</a>
            </div>
        </div>
    </div>
    <div class="flex bg-gray-900 py-6 lg:py-8 px-4 lg:px-12 pb-6 lg:pb-12 mt-24">
        <div class="w-full text-center">
            <h2 class="text-3xl text-white font-semibold">Here's some videos I've published.</h2>
            <div class="flex flex-wrap -mx-4 mt-8 text-left">
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <a href="https://www.youtube.com/watch?v=I980aPL-NRM" class="block hover:opacity-50 transition-opacity duration-200" target="_blank" rel="noreferrer">
                        <img src="/assets/images/better-docker-setup-local-laravel-development-edited.png" class="block">
                    </a>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <a href="https://www.youtube.com/watch?v=BQ0gi9YHuek" class="block hover:opacity-50 transition-opacity duration-200" target="_blank" rel="noreferrer">
                        <img src="/assets/images/getting-started-amazon-s3-laravel.png" class="block">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex bg-gray-100 py-6 lg:py-8 px-4 lg:px-12 pb-6 lg:pb-12 mt-24">
        <div class="w-full text-center">
            <h2 class="text-3xl font-semibold">Here's some words I've written.</h2>
            <div class="flex flex-wrap -mx-4 mt-8 text-left">
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                        <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="https://dev.to/aschmelyun/cleaver-a-blazing-fast-static-site-generator-using-laravel-s-blade-1k32" target="_blank" rel="noreferrer">
                            <img class="block" src="https://res.cloudinary.com/practicaldev/image/fetch/s--g0EyYnkl--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://thepracticaldev.s3.amazonaws.com/i/s8jvg17eo82662qouhx4.jpg">
                        </a>
                        <div class="py-4 px-6">
                            <p class="text-gray-700 text-lg leading-relaxed my-2"><a class="text-gray-900 font-semibold text-lg" href="https://dev.to/aschmelyun/cleaver-a-blazing-fast-static-site-generator-using-laravel-s-blade-1k32" target="_blank" rel="noreferrer">A blazing-fast static site generator using Laravel's Blade.</a><br>I know what you're probably thinking, "Oh boy, another static site generator". And you'd be right, but I'm hoping that the one I've created...</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                        <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="https://dev.to/aschmelyun/the-beauty-of-docker-for-local-laravel-development-13c0" target="_blank" rel="noreferrer">
                            <img class="block" src="https://res.cloudinary.com/practicaldev/image/fetch/s--xebHeK60--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://thepracticaldev.s3.amazonaws.com/i/pinrnrdop1ajqgi7sl9y.jpg">
                        </a>
                        <div class="py-4 px-6">
                            <p class="text-gray-700 text-lg leading-relaxed my-2"><a class="text-gray-900 font-semibold text-lg" href="https://dev.to/aschmelyun/the-beauty-of-docker-for-local-laravel-development-13c0" target="_blank" rel="noreferrer">The beauty of Docker for local Laravel development.</a><br>Want to take the fast track and skip the detailed tutorial below? Install Docker for your OS, clone this repo, add your Laravel app files to the src directory, and run the following...</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4">
                    <div class="bg-white shadow hover:shadow-xl transition-shadow duration-200">
                        <a class="block pt-4 px-6 hover:opacity-50 transition-opacity duration-200" href="https://dev.to/aschmelyun/so-you-want-to-get-started-with-ar-js-22e2" target="_blank" rel="noreferrer">
                            <img class="block" src="https://res.cloudinary.com/practicaldev/image/fetch/s--1-5QeWBF--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://thepracticaldev.s3.amazonaws.com/i/khxn390gis1qehppsjg7.jpg">
                        </a>
                        <div class="py-4 px-6">
                            <p class="text-gray-700 text-lg leading-relaxed my-2"><a class="text-gray-900 font-semibold text-lg" href="https://dev.to/aschmelyun/so-you-want-to-get-started-with-ar-js-22e2" target="_blank" rel="noreferrer">So you want to get started with AR.js.</a><br>Augmented Reality seems like it's everywhere in 2018. Between Snapchat filters, Google stickers, IKEA's furniture preview, and now Shopify's AR Quick Look feature...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <a href="/articles" class="inline-block px-8 py-2 text-lg font-semibold text-white bg-red-600 hover:bg-red-500 transition-all duration-200">See All Articles</a>
            </div>
        </div>
    </div>
@endsection